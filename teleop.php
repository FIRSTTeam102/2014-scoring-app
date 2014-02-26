<?php
	set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

	function getScalar($sql,$def="") {
		// execute a $sql query and return the first
		// value, or, if none, the $def value
		$rs = mysql_query($sql) or die(mysql_error().$sql);
		if (mysql_num_rows($rs)) {
			$r = mysql_fetch_row($rs);
			mysql_free_result($rs);
			return $r[0];
		}
		return $def;
	}
	
	session_start();
	
	// if we cannot get the password from session - redirect to the starting page.
	if(!$_SESSION['password'])
	{
		header("Location: scoringapp.php"); 	/* Redirect browser */
		exit();
	}

	// Connect to the database.
	$link = mysql_connect('Team102.org:3306', 'team102_webuser', $_SESSION['password']);
	
	if (!mysql_select_db('team102_2014', $link)) {
    		echo 'Could not select database';
    		exit;
	}
	
	// Determine if we have submitted a teleop period.
	if(isset($_POST['btnNext']) || isset($_POST['btnDone']))
	{
		
/*		var_dump($_POST);	// Use this to see a dump of the _POST variables.
		echo '<br>';
		die;
*/		
		// Insert the submitted cycle into the database.
		// No validations are necessary.
		for($team = 1; $team <= 3; $team++)
		{
			if($team == 1)
			{
				$teamNumber = $_SESSION['match']->team1;
				$assistPts = $_POST['hidTeam1AssistPtsName'];
			}
			else if($team == 2)
			{
				$teamNumber = $_SESSION['match']->team2;
				$assistPts = $_POST['hidTeam2AssistPtsName'];
			}
			else if($team == 3)
			{
				$teamNumber = $_SESSION['match']->team3;
				$assistPts = $_POST['hidTeam3AssistPtsName'];
			}
			if($assistPts == null)
				$assistPts = 0;
			$sql = sprintf("insert into match_team_cycles
								(tournament_id, match_number, team_number, cycle_number, offense_possession, midfield_possession, defense_possession
								  , truss, catch, goal, assist_points)
								 values ('%s', %s, %s, %s, '%s', '%s', '%s'
								 , '%s', '%s', '%s', %s)"
								, $_SESSION['tournament']->ID
								, $_SESSION['match']->match_number
								, $teamNumber
								, $_SESSION['cycleNumber']
								, isset($_POST['chkTeam' . $team . 'OffenseName']) ? "Y" : "N"
								, isset($_POST['chkTeam' . $team . 'WhiteName']) ? "Y" : "N"
								, isset($_POST['chkTeam' . $team . 'DefenseName']) ? "Y" : "N"
								, ($_POST['rdoTruss'] == $team) ? "Y" : "N"
								, ($_POST['rdoCatch'] == $team) ? "Y" : "N"
								, ($_POST['rdoGoal'] == "H" . $team) ? "H" : (($_POST['rdoGoal'] == "L" . $team) ? "L" : "N")
								, $assistPts
								);
			$insertReturn = mysql_query($sql, $link);
			if(!$insertReturn)
				die("Error inserting match_team_cycles team: " . $_SESSION['match']->team1 . " Err: " . mysql_error());
		}
		// Get the score after the last submission and save it in session.
		$_SESSION['score'] = $_POST['scoreFieldName'];

		// Redirect to the Recap if we are done.
		if(isset($_POST['btnDone']))
		{
			for($team = 1; $team <= 3; $team++)
			{
				if($team == 1)
				{
					$teamNumber = $_SESSION['match']->team1;
				}
				else if($team == 2)
				{
					$teamNumber = $_SESSION['match']->team2;
				}
				else if($team == 3)
				{
					$teamNumber = $_SESSION['match']->team3;
				}
				$sql = sprintf("update match_teams set completed = 'Y', initials = '%s' where tournament_id = '%s' and match_number = %s
									and team_number = %s;"
									, $_SESSION['initials']
									, $_SESSION['tournament']->ID
									, $_SESSION['match']->match_number
									, $teamNumber);
				$updateReturn = mysql_query($sql, $link);
				if(!$updateReturn)
					die("Error updating match_teams team: " . $_SESSION['match']->team1 . " Err: " . mysql_error());
			}

			header("Location: recap.php"); /* Redirect browser */
			exit();
		}
	}
	// If not, get the current cycle of the teleop	period.
	$sql = sprintf("select ifnull(max(ifnull(cycle_number, 0)), 0) + 1 cycle_number
					from match_team_cycles
					where tournament_id = '%s' and match_number = %d and team_number in (%d, %d, %d)"
		, $_SESSION['match']->tournament_id, $_SESSION['match']->match_number, $_SESSION['match']->team1, $_SESSION['match']->team2, $_SESSION['match']->team3);
	$cycleNumber = getScalar($sql, "NULL");
	$_SESSION['cycleNumber'] = $cycleNumber;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><? echo $_SESSION['tournament']->Title; ?> TeleOp</title>
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
	<script type='text/javascript' src='jqueryui/js/jquery-1.10.2.js'></script>
    <link rel="stylesheet" href="stylesheet.css" />
    <!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<script type='text/javascript'>//<![CDATA[ 
		$(window).load(function(){
			calcScore();
			
			// Event handler to recalculate the score whenever an input control changes.
			$( "input" ).change(function() { calcScore(); })

			// Event handler to allow radio buttons to be turned off if they are mistakenly turned on.
			$("input[type='radio']").click(function()
			{
			  var previousValue = $(this).attr('previousValue');
			  var name = $(this).attr('name');
			
			  if (previousValue == 'checked')
			  {
			    $(this).removeAttr('checked');
			    $(this).attr('previousValue', false);
			  }
			  else
			  {
			    $("input[name="+name+"]:radio").attr('previousValue', false);
			    $(this).attr('previousValue', 'checked');
			  }
			  calcScore();
			});
		});

		// Function to calculate the score.
		function calcScore()
		{
			enableNextCycle = false;
			total = <?php echo $_SESSION["score"]; ?>;
			goalPoints = 0;
			
			// The idea: set the zone to 1 if any team assists in that zone.  Set teams to 1 if that teams assists.
			// The number of assists is then min(sum(zones), sum(teams))
			var zones = new Array();
			zones[0] = 0;
			zones[1] = 0;
			zones[2] = 0;
			var teams = new Array();
			teams[0] = 0;
			teams[1] = 0;
			teams[2] = 0;
			<?php
			for ($i = 1; $i <= 3; $i++) {
			?>
				if( $( "#chkTeam<?php echo $i ?>Offense" ).prop( "checked" ) )
				{
					zones[0] = 1;
					teams[<?php echo $i ?> - 1] = 1;
				}
				if( $( "#chkTeam<?php echo $i ?>White" ).prop( "checked" ) )
				{
					zones[1] = 1;
					teams[<?php echo $i ?> - 1] = 1;
				}
				if( $( "#chkTeam<?php echo $i ?>Defense" ).prop( "checked" ) )
				{
					zones[2] = 1;
					teams[<?php echo $i ?> - 1] = 1;
				}

				if( $( "#rdoLoGoal<?php echo $i ?>" ).prop( "checked" ) )
				{
					goalPoints = 1;
					enableNextCycle = true;
				}
				else if( $( "#rdoHiGoal<?php echo $i ?>" ).prop( "checked" ) )
				{
					goalPoints = 10;
					enableNextCycle = true;
				}
				if( $( "#rdoTruss<?php echo $i ?>" ).prop( "checked" ) )
				{
					total += 10;
				}
				if( $( "#rdoCatch<?php echo $i ?>" ).prop( "checked" ) )
				{
					total += 10;
				}
			<?php 
			}?> 
			assistPts = 0;
			numTeamsAssisting = teams[0] + teams[1] + teams[2]
			if(goalPoints  != 0)
			{
				total += goalPoints;
				assists = Math.min(zones[0] + zones[1] + zones[2], numTeamsAssisting);
				if(assists == 2)
				{
					assistPts = 10;
					total += assistPts;
				}
				else if(assists == 3)
				{
					assistPts = 30;
					total += assistPts;
				}
			}
			// Figure out each team's contribution to the assist points.
			if(teams[0] == 1)
				$("#hidTeam1AssistPtsID").val(assistPts / numTeamsAssisting);
			if(teams[1] == 1)
				$("#hidTeam2AssistPtsID").val(assistPts / numTeamsAssisting);
			if(teams[2] == 1)
				$("#hidTeam3AssistPtsID").val(assistPts / numTeamsAssisting);
				
			$("#Score").text("Score: " + total);
			$("#scoreField").val(total);
			
			// Figure out if the Next Cycle button should be enabled.
			$("#btnNextId").prop("disabled", !enableNextCycle);
		};
	//]]>
	</script>
</head>
<body class="no-js">
    <div id="page">
        <div class="header">
            <div id="competition"><? echo $_SESSION['tournament']->Title . ' ' . $_SESSION['initials']; ?></div>
            <div id="match">Match <? echo $_SESSION['match']->match_number . " - " . $_SESSION['match']->start_time . " - " . $_SESSION['match']->alliance; ?></div>
            <div id="cycle">Teleop Cycle <? echo $cycleNumber; ?></div>
        </div>

        <form id="cycleForm" action="teleop.php" method="POST">
			<?php
			for ($i = 1; $i <= 3; $i++) {
				if($i == 1)
					$teamNumber = $_SESSION['match']->team1;
				else if($i == 2)
					$teamNumber = $_SESSION['match']->team2;
				else
					$teamNumber = $_SESSION['match']->team3;
			?>
            <div id="Team<? echo $i; ?>" class="team">
                <div id="Team<? echo $i; ?>Number" class="teamNumber"><? echo $teamNumber; ?></div>
                <div class="controls">
                    <div id="Team<? echo $i; ?>OffenseZone" class="<?php echo strtolower($_SESSION['match']->alliance) ?>">
                        <input type="checkbox" name="chkTeam<? echo $i; ?>OffenseName" id="chkTeam<? echo $i; ?>Offense" value="Team-<? echo $i; ?>-Offense" />
                    </div>
                    <div id="Team<? echo $i; ?>WhiteZone" class="white">
                        <input type="checkbox" name="chkTeam<? echo $i; ?>WhiteName" id="chkTeam<? echo $i; ?>White" value="Team-<? echo $i; ?>-White" />
                    </div>
                    <div id="Team<? echo $i; ?>DefenseZone" class="<?php echo (strtolower($_SESSION['match']->alliance) == 'red' ? 'blue' : 'red') ?>">
                        <input type="checkbox" name="chkTeam<? echo $i; ?>DefenseName" id="chkTeam<? echo $i; ?>Defense" value="Team-<? echo $i; ?>-Defense" />
                    </div>
                    <div id="Team<? echo $i; ?>Truss">
                        <input type="radio" name="rdoTruss" id="rdoTruss<? echo $i; ?>" value="<? echo $i; ?>" />
                        <label for="rdoTruss<? echo $i; ?>">Truss</label>
                    </div>
                    <div id="Team<? echo $i; ?>Catch">
                        <input type="radio" name="rdoCatch" id="rdoCatch<? echo $i; ?>" value="<? echo $i; ?>" />
                        <label for="rdoCatch<? echo $i; ?>">Catch</label>
                    </div>
                    <div id="Team<? echo $i; ?>LoGoal">
                        <input type="radio" name="rdoGoal" id="rdoLoGoal<? echo $i; ?>" value="L<? echo $i; ?>" />
                        <label for="rdoLoGoal<? echo $i; ?>">Low Goal</label>
                    </div>
                    <div id="Team<? echo $i; ?>HiGoal">
                        <input type="radio" name="rdoGoal" id="rdoHiGoal<? echo $i; ?>" value="H<? echo $i; ?>" />
                        <label for="rdoHiGoal<? echo $i; ?>">High Goal</label>
                        <input type="hidden" name="hidTeam<? echo $i; ?>AssistPtsName" id="hidTeam<? echo $i; ?>AssistPtsID" />
                    </div>
                </div>
            </div>
		<?php
			}
		?>
            <div style="clear:both;"></div>
            <div class="footer">
                <div id="Score" class="<?php echo strtolower($_SESSION['match']->alliance) ?>"></div><input type="hidden" name="scoreFieldName" id="scoreField" />
                <div id="nav">
                    <input type="submit" name="btnNext" value="Next Cycle" id="btnNextId" disabled/>
                    <input type="submit" name="btnDone" value="Done" />
                </div>
            </div>
        </form>
    </div>
</body>
</html>
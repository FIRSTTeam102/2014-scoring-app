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
	$link = mysql_connect('team102.org:3306', 'team102_webuser', $_SESSION['password']);
	
	if (!mysql_select_db('team102_2014', $link)) {
    		echo 'Could not select database';
    		exit;
	}
	
	// Determine if we have submitted a teleop period.
	// Insert the submitted cycle into the database.
	// Redirect to the Recap if we are done.
	
	// If not, get the current cycle of the teleop	period.
	$sql = sprintf("select ifnull(max(cycle_number), 0) + 1 from match_team_cycles
		where tournament_id = '%s' and match_number = %d", $_SESSION['match']->ID, $_SESSION['match_number']);
	$cycleNumber = getScalar($sql, "NULL");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><? echo $_SESSION['tournament']->Title; ?></title>
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.4.4.min.js'></script>
    <link rel="stylesheet" href="stylesheet.css" />
    <!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<script type='text/javascript'>//<![CDATA[ 
		$(window).load(function(){
			$( "#Score" ).text('Score: <?php echo $_SESSION["score"]; ?> ');
			
			// Event handler to recalculate the score whenever an input control changes.
			$( "input" ).change(function() { calcScore(); })

		});

		// Function to calculate the score.
		function calcScore()
		{
			total = <?php echo $_SESSION["score"]; ?>;
			<?php
			$blue = 0;
			$white = 0;
			$red = 0;
			for ($i = 1; $i <= 3; $i++) {
			?>
				if( $( "#rdoLoGoal<?php echo $i ?>" ).prop( "checked" ) )
				{
					score += 1;
				}
				else if( $( "#rdoHiGoal<?php echo $i ?>" ).prop( "checked" ) )
				{
					score += 10;
				}
			<?php 
			}?> 
			$("#Score").text("Score: " + total);
		};
	//]]>
	</script>
</head>
<body class="no-js">
    <div id="page">
        <div class="header">
            <div id="competition"><? echo $_SESSION['tournament']->Title . ' ' . $_SESSION['initials']; ?></div>
            <div id="match">Match <? echo $_SESSION['match']->match_number . " - " . $_SESSION['match']->start_time . " - " . $_SESSION['alliance']; ?></div>
            <div id="cycle">Teleop Cycle <? echo $cycleNumber; ?></div>
        </div>

        <form id="cycleForm" action="teleop.html">
            <div id="Team1" class="team">
                <div id="Team1Number" class="teamNumber">102</div>
                <div class="controls">
                    <div id="Team1BlueZone" class="blue">
                        <input type="checkbox" name="chkTeam1Blue" value="Team-1-Blue" />
                    </div>
                    <!-- was going to use attack zone, mid zone, defend zone: but decided this way is easier to see. -->
                    <div id="Team1WhiteZone" class="white">
                        <input type="checkbox" name="chkTeam1White" value="Team-1-White" />
                    </div>
                    <div id="Team1RedZone" class="red">
                        <input type="checkbox" name="chkTeam1Red" value="Team-1-Red" />
                    </div>
                    <div id="Team1Truss">
                        <input type="radio" name="rdoTruss" id="rdoTruss1" value="Team-1-Truss" />
                        <label for="rdoTruss1">Truss</label>
                    </div>
                    <div id="Team1Catch">
                        <input type="radio" name="rdoCatch" id="rdoCatch1" value="Team-1-Catch" />
                        <label for="rdoCatch1">Catch</label>
                    </div>
                    <div id="Team1LoGoal">
                        <input type="radio" name="rdoGoal" id="rdoLoGoal1" value="Team-1-LoGoal" />
                        <label for="rdoLoGoal1">Low Goal</label>
                    </div>
                    <div id="Team1HiGoal">
                        <input type="radio" name="rdoGoal" id="rdoHiGoal1" value="Team-1-HiGoal" />
                        <label for="rdoHiGoal1">High Goal</label>
                    </div>
                </div>
            </div>
            <div id="Team2" class="team">
                <div id="Team2Number" class="teamNumber">303</div>
                <div class="controls">
                    <div id="Team2BlueZone" class="blue">
                        <input type="checkbox" name="chkTeam2Blue" value="Team-2-Blue" />
                    </div>
                    <div id="Team2WhiteZone" class="white">
                        <input type="checkbox" name="chkTeam2White" value="Team-2-White" />
                    </div>
                    <div id="Team2RedZone" class="red">
                        <input type="checkbox" name="chkTeam2Red" value="Team-2-Red" />
                    </div>
                    <div id="Team2Truss">
                        <input type="radio" id="rdoTruss2" name="rdoTruss" value="Team-2-Truss" />
                        <label for="rdoTruss2">Truss</label>
                    </div>
                    <div id="Team2Catch">
                        <input type="radio" id="rdoCatch2" name="rdoCatch" value="Team-2-Catch" />
                        <label for="rdoCatch2">Catch</label>
                    </div>
                    <div id="Team2LoGoal">
                        <input type="radio" name="rdoGoal" id="rdoLoGoal2" value="Team-2-LoGoal" />
                        <label for="rdoLoGoal2">Low Goal</label>
                    </div>
                    <div id="Team2HiGoal">
                        <input type="radio" name="rdoGoal" id="rdoHiGoal2" value="Team-2-HiGoal" />
                        <label for="rdoHiGoal2">High Goal</label>
                    </div>
                </div>
            </div>
            <div id="Team3" class="team">
                <div id="Team3Number" class="teamNumber">2547</div>
                <div class="controls">
                    <div id="Team3BlueZone" class="blue">
                        <input type="checkbox" name="chkTeam3Blue" value="Team-3-Blue" />
                    </div>
                    <div id="Team3WhiteZone" class="white">
                        <input type="checkbox" name="chkTeam3White" value="Team-3-White" />
                    </div>
                    <div id="Team3RedZone" class="red">
                        <input type="checkbox" name="chkTeam3Red" value="Team-3-Red" />
                    </div>
                    <div id="Team3Truss">
                        <input type="radio" name="rdoTruss" id="rdoTruss3" value="Team-3-Truss" />
                        <label for="rdoTruss3">Truss</label>
                    </div>
                    <div id="Team3Catch">
                        <input type="radio" name="rdoCatch" id="rdoCatch3" value="Team-3-Catch" />
                        <label for="rdoCatch3">Catch</label>
                    </div>
                    <div id="Team3LoGoal">
                        <input type="radio" name="rdoGoal" id="rdoLoGoal3" value="Team-3-LoGoal" />
                        <label for="rdoLoGoal3">Low Goal</label>
                    </div>
                    <div id="Team3HiGoal">
                        <input type="radio" name="rdoGoal" id="rdoHiGoal3" value="Team-3-HiGoal" />
                        <label for="rdoHiGoal3">High Goal</label>
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="footer">
                <div id="Score">Score: 37</div>
                <div id="nav">
                    <input type="submit" name="btnNext" value="Next Cycle" />
                    <input type="submit" name="btnDone" value="Done" />
                </div>
            </div>
        </form>
    </div>
</body>
</html>

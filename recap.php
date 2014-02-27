<?php
	set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

	session_start();
	
	// if we cannot get the password from session - redirect to the starting page.
	if(!$_SESSION['password'])
	{
		header("Location: index.php"); 	/* Redirect browser */
		exit();
	}

	// Connect to the database.
	$link = mysql_connect('Team102.org:3306', 'team102_webuser', $_SESSION['password']);
	
	if (!mysql_select_db('team102_2014', $link)) {
    		echo sprintf('Could not select database, Err: %s', mysql_error());
    		exit;
	}

	// If they have clicked the Next Match button, mark the match-teams complete and go to the choose match page.
	if(isset($_POST['btnNext']) )
	{
/*		for($team = 1; $team <= 3; $team++)
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
		*/
		header ("location: choosematch.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><? echo $_SESSION['tournament']->Title; ?> Recap</title>
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
	<script type='text/javascript' src='jqueryui/js/jquery-1.10.2.js'></script>
    <link rel="stylesheet" href="stylesheet.css" />
    <!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type='text/javascript'>//<![CDATA[ 
		$(window).load(function(){
				calcScore();
			}
		)
		function calcScore()
		{
			$("#Score").text("Score: <?php echo $_SESSION['score']; ?>");
		}
	//]]>
	</script>
</head>
<body class="no-js">
    <div id="page">
        <div class="header">
            <div id="competition"><? echo $_SESSION['tournament']->Title . ' ' . $_SESSION['initials']; ?></div>
            <div id="match">Match <? echo $_SESSION['match']->match_number . " - " . $_SESSION['match']->start_time . " - " . $_SESSION['match']->alliance; ?></div>
            <div>Recap</div>
        </div>
        <form id="recapForm" action="recap.php" method="POST">
		<table class="teamRecap">
		<tr><th>Team</th><th>Has Ball</th><th>Auto Goal</th><th>Hot</th><th>Mob</th><th>Ex1</th><th>Ex2</th><th>Ex3</th></tr>
<?php
	$sql = sprintf("select team_number, has_ball, auto_goal, auto_goal_hot, auto_mobility, extra_goal_1, extra_goal_2, extra_goal_3
				from match_teams
				where tournament_id = '%s' and match_number = %d
					and team_number in (%d, %d, %d)
				order by seq_no;", $_SESSION['match']->tournament_id, $_SESSION['match']->match_number
				, $_SESSION['match']->team1, $_SESSION['match']->team2, $_SESSION['match']->team3);
	
	$matchTeamQ = mysql_query($sql, $link);
	if (!$matchTeamQ) {
		echo "DB Error, could not query match teams\n";
		echo 'MySQL Error: ' . mysql_error();
		exit;
	}

	while($row = mysql_fetch_assoc($matchTeamQ)) {
		?>
		<tr>
		<td><?php echo $row['team_number'] ?></td>
		<td><?php echo $row['has_ball'] ?></td>
		<td><?php echo $row['auto_goal'] ?></td>
		<td><?php echo $row['auto_goal_hot'] ?></td>
		<td><?php echo $row['auto_mobility'] ?></td>
		<td><?php echo $row['extra_goal_1'] ?></td>
		<td><?php echo $row['extra_goal_2'] ?></td>
		<td><?php echo $row['extra_goal_3'] ?></td>
		</tr>
	<?php
		$sql = sprintf("select mtc.team_number, mtc.cycle_number, mtc.offense_possession
				  , mtc.midfield_possession, mtc.defense_possession, mtc.truss, mtc.catch, mtc.goal
				from match_team_cycles mtc, match_teams mt
				where mtc.tournament_id = '%s' and mtc.match_number = %d
					and mtc.team_number = %d
					and mt.tournament_id = mtc.tournament_id
					and mt.match_number = mtc.match_number
					and mt.team_number = mtc.team_number
				order by mt.seq_no, mtc.cycle_number;", $_SESSION['match']->tournament_id, $_SESSION['match']->match_number, $row['team_number']);
		$matchTeamCycleQ = mysql_query($sql, $link);
		if (!$matchTeamCycleQ) {
			echo "DB Error, could not query match team cycles\n";
			echo 'MySQL Error: ' . mysql_error();
			exit;
		}
		?>
		<tr><td>&nbsp;</td><td colspan="7">
			<table class="cycleRecap">
			<tr><th>Cycle</th><th>Off</th><th>Mid</th><th>Def</th><th>Truss</th><th>Catch</th><th>Goal</th></tr>
		<?php
		while($row2 = mysql_fetch_assoc($matchTeamCycleQ)) {
		?>
			<tr>
			<td><?php echo $row2['cycle_number'] ?></td>
			<td><?php echo $row2['offense_possession'] ?></td>
			<td><?php echo $row2['midfield_possession'] ?></td>
			<td><?php echo $row2['defense_possession'] ?></td>
			<td><?php echo $row2['truss'] ?></td>
			<td><?php echo $row2['catch'] ?></td>
			<td><?php echo $row2['goal'] ?></td>
			</tr>
	<?php
		}
	?>
		</table></td></tr>
	<?php
	}
?>
		</table>
            <div style="clear:both;"></div>
            <div class="footer">
                <div id="Score" class="<?php echo strtolower($_SESSION['match']->alliance) ?>"></div>
                <div id="nav">
                    <input type="submit" name="btnNext" value="Next Match" />
                </div>
            </div>
		</form>
	</div>
</body>
</html>
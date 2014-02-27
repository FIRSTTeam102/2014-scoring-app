<?php

	set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

	session_start();
	
	$link = mysql_connect('team102.org:3306', 'team102_webuser', $_SESSION['password']);
	
	if (!mysql_select_db('team102_2014', $link)) {
    		echo sprintf('Could not select database, Err: %s', mysql_error());
    		exit;
	}
	$match_number  = $_SESSION['match']->match_number;
	if(!$match_number)
	{
		header("Location: index.php"); 	/* Redirect browser */
		exit();
	}
		
	$match = $_SESSION['match'];

	$numBalls = $_SESSION['numExtraBalls'];					
	
	if(isset($_POST['btnNext']))
	{
		// Save the current score in session.
		$_SESSION['score'] = $_POST['scoreFieldName'];
		// The user has submitted the page 
		for($ball = 1; $ball <= $numBalls; $ball++)
		{
			// rdoScoreBall1: Team-1-High-1
			// rdoScoreBall2: Team-2-Low-2
			// rdoScoreBall3: Team-3-High-3
			if($_POST['rdoScoreBall' . $ball] != null)
			{
				$parts = explode("-", $_POST['rdoScoreBall' . $ball]);
				$team = $parts[1];
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
				$sql = sprintf("update match_teams set extra_goal_" . $ball . " = '" . $parts[2][0]
									. "' where tournament_id = '%s' and match_number = %s
									and team_number = %s;"
									, $_SESSION['tournament']->ID
									, $_SESSION['match']->match_number
									, $teamNumber);
				$updateReturn = mysql_query($sql, $link);
				if(!$updateReturn)
					die("Error updating match_teams team: " . $_SESSION['match']->team1 . " Err: " . mysql_error());
			}
		}
		header("Location: teleop.php"); /* Redirect browser */
		exit();
	}
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><? echo $_SESSION['tournament']->Title; ?> Auto Extra</title>
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
		});

		// Function to calculate the score.
		function calcScore()
		{
			total = <?php echo $_SESSION["score"]; ?>;
			<?php
			for ($ball = 1; $ball <= $numBalls; $ball++) {
				for($team = 1; $team <= 3; $team++) {
			?>
					if(( $( "#rdoScoreHigh<?php echo $team ?>_<?php echo $ball ?>" ).prop( "checked" ) ))
					{
						total += 10;
					}
					if(( $( "#rdoScoreLow<?php echo $team ?>_<?php echo $ball ?>" ).prop( "checked" ) ))
					{
						total += 1;
					}
			
			<?php
				} 
			}?> 
			$("#scoreField").val(total);
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
            <div id="autonomous">Autonomous Extra Balls</div>
        </div>
        <form id="autoExtraForm" action="autoextra.php" method="POST">
			<table id="AutoExtraTable">
				<tr><th>Ball</th><th><?php echo$_SESSION['match']->team1 ?></th>
					<th><?php echo$_SESSION['match']->team2 ?></th>
					<th><?php echo$_SESSION['match']->team3 ?></th>
				</tr>
				<?php
				for ($ball = 1; $ball <= $numBalls; $ball++) {
				?>
					<tr><td style="padding: 10px 3px;"><?php echo $ball ?></td>
					<?php
					for ($team = 1; $team <= 3; $team++) {
						if($team == 1)
							$teamNumber = $_SESSION['match']->team1;
						else if($team == 2)
							$teamNumber = $_SESSION['match']->team2;
						else
							$teamNumber = $_SESSION['match']->team3;
					?>
					<td>                    
						<div id="Team<?php echo $team ?>ScoreHigh">
							<input type="radio" name="rdoScoreBall<?php echo $ball ?>" id="rdoScoreHigh<?php echo $team ?>_<?php echo $ball ?>"
								value="Team-<?php echo $team ?>-High-<?php echo $ball ?>"/>
							<label for="rdoScoreHigh<?php echo $team ?>_<?php echo $ball ?>">High</label>
						</div>
						<div id="Team<?php echo $team ?>ScoreLow">
							<input type="radio" name="rdoScoreBall<?php echo $ball ?>" id="rdoScoreLow<?php echo $team ?>_<?php echo $ball ?>" 
								value="Team-<?php echo $team ?>-Low-<?php echo $ball ?>"/>
							<label for="rdoScoreLow<?php echo $team ?>_<?php echo $ball ?>">Low</label>
						</div>
					</td>
					<?php				
					}
					?>
					</tr>
				<?php								
				}
				?>
			</table>
            <div style="clear:both;"></div>
            <div class="footer">
                <div id="Score" class="<?php echo strtolower($_SESSION['match']->alliance) ?>"></div><input type="hidden" name="scoreFieldName" id="scoreField" />
                <div id="nav">
                    <input type="submit" name="btnNext" value="Next" />
                </div>
            </div>
        </form>
    </div>
    <script src="js/modernizr.js"></script>
</body>
</html>
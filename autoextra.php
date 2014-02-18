<?php

	set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

	session_start();
	
	$link = mysql_connect('team102.org:3306', 'team102_webuser', $_SESSION['password']);
	
	if (!mysql_select_db('team102_2014', $link)) {
    		echo 'Could not select database';
    		exit;
	}
	
	$match_number  = $_SESSION['match']->match_number;
	if(!$match_number)
	{
		header("Location: scoringapp.php"); 	/* Redirect browser */
		exit();
	}
	$sql = sprintf("select mt1.match_number, m.start_time, mt1.team_number as team1, mt2.team_number as team2, mt3.team_number as team3
		from matches m, match_teams mt1, match_teams mt2, match_teams mt3, tournaments t
		where t.active = 'Y'
		and m.tournament_id = t.id
		and mt1.tournament_id = m.tournament_id
		and mt1.match_number = m.match_number
		and mt1.match_number = %s
		and mt1.alliance = '%s'
		and mt1.seq_no = 1
		and mt2.team_number != mt1.team_number
		and mt2.tournament_id = mt1.tournament_id
		and mt2.match_number = mt1.match_number
		and mt2.completed = mt1.completed
		and mt2.alliance = mt1.alliance
		and mt2.seq_no = 2
		and mt3.team_number != mt1.team_number
		and mt3.team_number != mt2.team_number
		and mt3.tournament_id = mt1.tournament_id
		and mt3.match_number = mt1.match_number
		and mt3.completed = mt1.completed
		and mt3.alliance = mt1.alliance
		and mt3.seq_no = 3", $match_number, $_SESSION['alliance']);
		
	$matches = mysql_query($sql, $link);
	
	$match =  mysql_fetch_object($matches);
	
	$_SESSION['match'] = $match;
	$numBalls = $_SESSION['numExtraBalls'];					
?>
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
</head>
<body class="no-js">
    <div id="page">
        <div class="header">
            <div id="competition"><? echo $_SESSION['tournament']->Title . ' ' . $_SESSION['initials']; ?></div>
            <div id="match">Match <? echo $_SESSION['match']->match_number . " - " . $_SESSION['match']->start_time . " - " . $_SESSION['alliance']; ?></div>
            <div id="autonomous">Autonomous Extra Balls</div>
        </div>
        <form id="autoExtraForm" action="teleop.html">
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
                <div id="Score" class="<?php echo strtolower($_SESSION['alliance']) ?>">Score: <?php echo $_SESSION['score']?></div>
                <div id="nav">
                    <button type="button" class="btnBack" onclick="history.back();">Back</button>
                    <input type="submit" name="btnNext" value="Next" />
                </div>
            </div>
        </form>
    </div>
    <script src="js/modernizr.js"></script>
</body>
</html>
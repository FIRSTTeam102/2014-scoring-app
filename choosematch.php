<?php
	set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

	session_start();
	
	// if we cannot get the password from session - redirect to the starting page.
	if(!$_SESSION['password'])
	{
		header("Location: scoringapp.php"); 	/* Redirect browser */
		exit();
	}

	$db = new mysqli("localhost", "team102_webuser", $_SESSION['password'], "team102_2014");
	if (mysqli_connect_errno()) {
		$_SESSION['error'] = sprintf("Database Connect failed: %s", mysqli_connect_error());
		header ("location: scoringapp.php");
		exit();
	}
	$sql    = 'SELECT * FROM tournaments WHERE active = "Y"';
	$result = $db->query($sql);
	
	$tournament = $result->fetch_assoc();
	$_SESSION['tournament'] = $tournament;

	$tournament_id = $tournament['ID'];

	$sqll = "select mt1.match_number, m.start_time, mt1.team_number as team1, mt2.team_number as team2, mt3.team_number as team3
		from matches m, match_teams mt1, match_teams mt2, match_teams mt3, tournaments t
		where t.active = 'Y'
		and m.tournament_id = t.id
		and mt1.tournament_id = m.tournament_id
		and mt1.match_number = m.match_number
		and mt1.completed = 'N'
		and mt1.alliance = ?
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
		and mt3.seq_no = 3
		order by m.match_number;";
		
	if ($matches = $db->prepare($sqll)) {
	    $matches->bind_param("s",  $_SESSION['alliance']);

	    /* execute query */
	    $matches->execute();
	
	    /* bind result variables */
	    $matches->bind_result($match_number, $start_time, $team1, $team2, $team3);
	    }
	else {
	    echo "DB Error, could not query the matches\n";
	    echo 'MySQL Error: ' . mysql_error();
	    exit;
	}
	?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo $tournament->Title; ?> Selection</title>
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
    <link rel="stylesheet" href="stylesheet.css" />
    <!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body class="no-js">
    <div id="page">
        <div class="header">
        	<div id="competition"><? echo $tournament->Title; ?></div>
            <div id="competition"></div>
            <div id="AllianceColor" class=<? echo $_SESSION['alliance']; ?>><?php echo $_SESSION['alliance']; ?> Alliance</div>
		</div>	               
		<form id="MatchForm" action="autonomous.php" method="POST">
			<div id="nav">
				<button type="button" class="btnBack" onclick="history.back();">Back</button>
				<input type="submit" name="btnOK" value="OK" />
			</div>
			<div id="Match">
				<div>Choose a Match</div>
				<div id="MatchList" style="margin-left:auto;margin-right:auto;width:100%;font-size:.8em;">
					<?php
					while($matches->fetch()) {
					?>
						<label for="rdoMatch<?php echo $match_number ?>"> 
							<div class="match_number">
								<input type="radio" name="rdoMatch" id="rdoMatch<?php echo $match_number ?>" 
									value="<?php echo $match_number ?>"/> 
								#<?php echo $match_number ?> @ <?php echo $start_time ?>
							</div>
							<div class="team_holder"><?php echo $team1?></div>
							<div class="team_holder"><?php echo $team2?></div>
							<div class="team_holder"><?php echo $team3?></div>
							<div style="clear:both;"></div>
						</label>
					<?php
					}
					?>
				</div>
			</div>
		</form>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/modernizr.js"></script>
</body>
</html>
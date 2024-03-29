<?php
	set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

	session_start();
	
	// if we cannot get the password from session - redirect to the starting page.
	if(!$_SESSION['password'])
	{
		header("Location: index.php");     /* Redirect browser */
		exit();
	}

	$link = mysql_connect('team102.org:3306', 'team102_webuser', $_SESSION['password']);
	
	if (!mysql_select_db('team102_2014', $link)) {
		echo sprintf('Could not select database, Err: %s', mysql_error());
		exit;
	}

	// if we don't have an alliance, go back to get one.
	if(!$_SESSION['alliance'])
	{
		$_SESSION['match_number'] = null;
		header("Location: scoringapp.php");     /* Redirect browser */
		exit();
	}
	
	// Get the match number.
	if(isset($_POST['btnNext']))
	{
		$match_number = $_POST['rdoMatch'];
		if($match_number != null)
		{
			$_SESSION['match_number'] = $match_number;
			header("Location: autonomous.php");     /* Redirect browser */		
		}
	}

	$tournament = $_SESSION['tournament'];
	$tournament_id = $tournament->ID;

	$sql = sprintf("select mt1.match_number, m.start_time, mt1.team_number as team1, mt2.team_number as team2, mt3.team_number as team3, mt1.initials
			from matches m, match_teams mt1, match_teams mt2, match_teams mt3, tournaments t
			where t.active = 'Y'
			and m.tournament_id = t.id
			and mt1.tournament_id = m.tournament_id
			and mt1.match_number = m.match_number
			and mt1.completed = 'N'
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
			and mt3.seq_no = 3
			order by m.match_number;", $_SESSION['alliance']);
			
			# ^^^^ mt1.alliance = #
			
	$matches = mysql_query($sql, $link);
	if(!$matches)
		die(sprintf("Error querying matches Err: %s", mysql_error()));
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo $tournament->Title; ?> Selection</title>
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
	<script type='text/javascript' src='jqueryui/js/jquery-1.10.2.js'></script>
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
                <form id="MatchForm" action="choosematch.php" method="POST">
                        <div id="nav">
                            <input type="submit" name="btnNext" value="Next" />
                        </div>
                        <div id="Match">
                                <div>Choose a Match</div>
                                <div id="MatchList" style="margin-left:auto;margin-right:auto;width:100%;font-size:.8em;">
                                        <?php
                                        while($row = mysql_fetch_assoc($matches)) {
                                        ?>
                                                <label for="rdoMatch<?php echo $row['match_number'] ?>"> 
                                                        <div class="match_number">
                                                                <input type="radio" name="rdoMatch" id="rdoMatch<?php echo $row['match_number'] ?>" 
                                                                        value="<?php echo $row['match_number'] ?>"/> 
                                                                #<?php echo $row['match_number'] ?> @ <?php echo $row['start_time'] ?>
                                                        </div>
                                                        <div class="team_holder"><?php echo $row['team1']?></div>
                                                        <div class="team_holder"><?php echo $row['team2']?></div>
                                                        <div class="team_holder"><?php echo $row['team3']?></div>
                                                        <div class="team_holder"><?php echo $row['initials']?></div>
                                                        <div style="clear:both;"></div>
                                                </label>
                                        <?php
                                        }
                                        ?>
                                </div>
                        </div>
                </form>
    </div>
</body>
</html>

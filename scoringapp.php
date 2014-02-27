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
	
	if((!$_SESSION['tournament']) || ($_SESSION['tournament'] == null))
	{
		$sql    = 'SELECT * FROM tournaments WHERE active = "Y"';
		$result = mysql_query($sql, $link);
		if(!$result)
			die(sprintf("Error querying active tournament Err: %s", mysql_error()));

		$tournament = mysql_fetch_object($result);
		if(!$tournament)
			die("No active tournament found.");
		$_SESSION['tournament'] = $tournament;
	}
	else
		 $tournament = $_SESSION['tournament'];
	
	if(isset($_POST['btnChooseMatch']))
	{
		if($_POST['rdoAlliance'] != null)
		{
			$_SESSION['alliance'] = $_POST['rdoAlliance'];
			header ("location: choosematch.php");
		}
	}
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>FRC 2014 Scoring App</title>
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
    <link rel="stylesheet" href="stylesheet.css" />
    <!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body class="no-js">
    <div id="page">
        <div class="header">
			<img src="favicon.ico" style="float: right; padding: 3px 15px 0px 10px;"/>
            <div id="team102" style="text-align: right">FIRST Team 102</div>
			<div style="text-align: right">The Gearheads</div>
			<div style="text-align: right">Somerville High School, NJ</div>
            <div id="competition" style="padding-top: 50px;padding-bottom: 20px;">FRC 2014 Scoring App</div>
            <form id="CompetitionForm" action="scoringapp.php" method="post">
				<div id="Tournament"><?php echo $tournament->Title; ?></div>
                <div id="Alliance">
                    <div>
                        Choose an Alliance</div>
                    <div id="AllianceList">
                        <label for="rdoAllianceRed" id="lblRed">
                            <input type="radio" name="rdoAlliance" id="rdoAllianceRed" value="Red" tabindex="2"/>Red</label>
                        <label for="rdoAllianceBlue" id="lblBlue">
                            <input type="radio" name="rdoAlliance" id="rdoAllianceBlue" value="Blue" tabindex="3"/>Blue</label>
                    </div>
                </div>
                <div id="nav">
                    <div style="padding-top: 10px;padding-bottom: 10px;"><input type="submit" name="btnChooseMatch" value="Choose Match" /></div>
				</div>
            </form>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/modernizr.js"></script>
</body>
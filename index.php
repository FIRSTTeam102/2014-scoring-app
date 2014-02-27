<?php

set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

session_start();

if(isset($_POST['btnScoringApp']) || isset($_POST['btnStandings']) || isset($_POST['btnSurvey']))
{
	$password = $_POST['txtPassword'];
	$initials = $_POST['txtInitials'];

	$link = @mysql_connect('team102.org:3306', 'team102_webuser', $password);
	if(!$link)
	{
		$error = mysql_error();
		if(strpos($error, 'Access denied for user') >= 0)
			$error = "Could not login to the database. Please try again.";
		else
			$error = sprintf('Could not connect to the database.\n Err: %s', htmlentities(mysql_error()));
	}
	else
	{
		if (!@mysql_select_db('team102_2014', $link)) {
			$error = sprintf('Could not connect to the database.\n Err: %s', htmlentities(mysql_error()));
		}
		else
		{
			$error = null;
			$_SESSION['tournament'] = null;
			
			if($password && $initials != "")
			{
				$_SESSION['initials'] = strtoupper($initials);
				$_SESSION['password'] = $password;
				if(isset($_POST['btnScoringApp']))
					header ("location: scoringapp.php");
				else if(isset($_POST['btnStandings']))
					header ("location: standings.php");
				else if(isset($_POST['btnSurvey']))
					header ("location: survey.php");
			}
		}
	}
	@mysql_close($link);
}
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>FRC 2014 Scoring App</title>
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
	<script type='text/javascript' src='jqueryui/js/jquery-1.10.2.js'></script>
    <link rel="stylesheet" href="stylesheet.css" />
    <!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<script type='text/javascript'>//<![CDATA[ 
		$(document).ready(function(){
		<?php 
			if($error)
			{
				echo 'alert("' . $error . '");';
			}
		?>
		});
	//]]>
	</script>
</head>
<body class="no-js">
    <div id="page">
        <div class="header">
			<img src="favicon.ico" style="float: right; padding: 3px 15px 0px 10px;"/>
			<form id="indexForm" action="index.php" method="POST">
				<div id="team102" style="text-align: right">FIRST Team 102</div>
				<div style="text-align: right">The Gearheads</div>
				<div style="text-align: right">Somerville High School, NJ</div>
				<div id="competition" style="padding-top: 50px;padding-bottom: 20px;">Team 102 FRC Index</div>
                <div id="Initials">
                    <label for="txtInitials">Your Initials:
                        <input type="text" maxLength="4" name="txtInitials" tabindex="1"/>
                    </label>
                </div>
                <div id="Password">
                    <label for="txtPassword">Password:
                        <input type="password" name="txtPassword" tabindex="4"/>
                    </label>
                </div>
                <div id="nav">
                    <div style="padding-top: 10px;padding-bottom: 10px;"><input type="submit" name="btnScoringApp" value="Team 102 Scoring App" /></div>
                    <div style="padding-top: 10px;padding-bottom: 10px;"><input type="submit" name="btnStandings" value="Team 102 Standings Page" /></div>
                    <div style="padding-top: 10px;padding-bottom: 10px;"><input type="submit" name="btnSurvey" value="Team 102 Scouting Survey" /></div>
                </div>
			</form>
        </div>
    </div>
</body>
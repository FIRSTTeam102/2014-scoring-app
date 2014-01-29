<?php
	set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

	session_start();
	
	$link = mysql_connect('team102.org:3306', 'team102_admin', $_SESSION['password']);
	
	if (!mysql_select_db('team102_2014', $link)) {
    		echo 'Could not select database';
    		exit;
	}
	
	$sql    = 'SELECT * FROM tournaments WHERE active = "Y"';
	$result = mysql_query($sql, $link);
	
	$tournament = mysql_fetch_object($result);

	$_SESSION['tournament'] = $tournament;

	$tournament_id = $tournament->ID;

	$sqll = sprintf("SELECT * FROM matches WHERE tournament_id = '%s'",mysql_real_escape_string($tournament_id));
	$matches = mysql_query($sqll, $link);


if (!$result || !$matches) {
    echo "DB Error, could not query the database\n";
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
            <form id="MatchForm" action="autonomous.php">
                <div id="Match">
                    <div>Choose a Match</div>
                    <div id="MatchList">
                    <?
                    	while($row = mysql_fetch_assoc($matches)) {
                    		echo '<label for="rdoMatch"><input type="radio" name="rdoMatch" id="rdoAlliance037" value=' . $row["match_number"] . '/>' . "#" . $row["match_number"] . " @ " . $row["start_time"] . '</label>';
		    	}
                    ?>
                    </div>
                </div>
                <div id="nav">
                    <button type="button" class="btnBack" onclick="history.back();">Back</button>
                    <input type="submit" name="btnOK" value="OK" />
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/modernizr.js"></script>
</body>
</html>
<?php

	set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

	session_start();
	
	$link = mysql_connect('team102.org:3306', 'team102_webuser', $_SESSION['password']);
	
	if (!mysql_select_db('team102_2014', $link)) {
    		echo 'Could not select database';
    		exit;
	}
	
	$match_number  = $_GET['rdoMatch'];
	
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
	<script type='text/javascript'>//<![CDATA[ 
		$(window).load(function(){
			<?php
			for ($i = 1; $i <= 3; $i++) {
			?>
				$("#chkTeam<?php echo $i ?>HasBall").click(function() {				
					$("#chkScoreHot<?php echo $i ?>").attr("checked", false); 
					$("#rdoScoreNone<?php echo $i ?>").attr("checked", true); 
					$("#rdoScoreHigh<?php echo $i ?>").attr("disabled", !this.checked); 
					$("[for='rdoScoreHigh<?php echo $i ?>']").css("color", !this.checked ? "grey" : "white"); 
					$("#rdoScoreLow<?php echo $i ?>").attr("disabled", !this.checked); 
					$("[for='rdoScoreLow<?php echo $i ?>']").css("color", !this.checked ? "grey" : "white"); 
					$("#rdoScoreNone<?php echo $i ?>").attr("disabled", !this.checked); 
					$("[for='rdoScoreNone<?php echo $i ?>']").css("color", !this.checked ? "grey" : "white"); 
					$("#chkScoreHot<?php echo $i ?>").attr("disabled", !this.checked); 
					$("[for='chkScoreHot<?php echo $i ?>']").css("color", !this.checked ? "grey" : "white"); 
				});
			<?php
			}
			?>
			});
			//]]>
	</script>

</head>
<body class="no-js">
    <div id="page">
        <div class="header">
            <div id="competition"><? echo $_SESSION['tournament']->Title . ' ' . $_SESSION['initials']; ?></div>
            <div id="match">Match <? echo $_SESSION['match']->match_number . " - " . $_SESSION['match']->start_time . " - " . $_SESSION['alliance']; ?></div>
            <div id="autonomous">Autonomous</div>
        </div>
        <form id="autonomousForm" action="autoextra.php">
		<?php
			for ($i = 1; $i <= 3; $i++) {
				if($i == 1)
					$teamNumber = $_SESSION['match']->team1;
				else if($i == 2)
					$teamNumber = $_SESSION['match']->team2;
				else
					$teamNumber = $_SESSION['match']->team3;
			?>
            <div id="Team<?php echo $i ?>" class="team">
                <div id="Team<?php echo $i ?>Number" class="teamNumber"><?php echo $teamNumber ?></div>
                <div id="Team<?php echo $i ?>AutoScore">
					<div id="Team<?php echo $i ?>HasBall">
						<input type="checkbox" name="chkTeam<?php echo $i ?>HasBallName" id="chkTeam<?php echo $i ?>HasBall" 
							value="Team-<?php echo $i ?>-HasBall"  checked/>
						<label for="chkTeam<?php echo $i ?>HasBall">Has Ball</label>
					</div>
                    <div id="Team<?php echo $i ?>ScoreHigh">
                        <input type="radio" name="rdoScore<?php echo $i ?>" id="rdoScoreHigh<?php echo $i ?>" value="Team-<?php echo $i ?>-High"/>
                        <label for="rdoScoreHigh<?php echo $i ?>">High</label>
                    </div>
                    <div id="Team<?php echo $i ?>ScoreLow">
                        <input type="radio" name="rdoScore<?php echo $i ?>" id="rdoScoreLow<?php echo $i ?>" value="Team-<?php echo $i ?>-Low"/>
                        <label for="rdoScoreLow<?php echo $i ?>">Low</label>
                    </div>
                    <div id="Team<?php echo $i ?>ScoreNone">
                        <input type="radio" name="rdoScore<?php echo $i ?>" id="rdoScoreNone<?php echo $i ?>" value="Team-<?php echo $i ?>-None" checked="true"/>
                        <label for="rdoScoreNone<?php echo $i ?>">None</label>
                    </div>
					<div id="Team<?php echo $i ?>Hot">
						<input type="checkbox" name="chkTeam<?php echo $i ?>HotName" id="chkScoreHot<?php echo $i ?>" value="Team-<?php echo $i ?>-Hot"/>
						<label for="chkScoreHot<?php echo $i ?>">Hot</label>
					</div>
					<div id="Team<?php echo $i ?>Mobility">
						<input type="checkbox" name="chkTeam<?php echo $i ?>MobilityName" id= "chkMobility<?php echo $i ?>" value="Team-<?php echo $i ?>-Mobility" />
						<label for="chkMobility<?php echo $i ?>">Mobility</label>
					</div>
                </div>
            </div>
		<?php
			}
		?>
            <div style="clear:both;"></div>
            <div class="footer">
                <div id="Score" class="<?php echo strtolower($_SESSION['alliance']) ?>">Score: 37</div>
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
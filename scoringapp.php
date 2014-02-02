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
            <form id="CompetitionForm" action="login.php" method="get">
                <div id="Initials">
                    <label for="txtInitials">Your Initials:
                        <input type="text" maxLength="4" name="txtInitials" tabindex="1"/>
                    </label>
                </div>
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
                <div id="Password">
                    <label for="txtPassword">Password:
                        <input type="password" name="txtPassword" tabindex="4"/>
                    </label>
                </div>
                <div id="nav">
                    <input type="submit" name="btnNext" tabindex="5"/>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/modernizr.js"></script>
</body>
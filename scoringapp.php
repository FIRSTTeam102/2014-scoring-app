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
      
            <div id="competition">FRC 2014 Scoring App</div>
            <form id="CompetitionForm" action="login.php" methon="get">
                <div id="Initials">
                    <label for="txtInitials">Your Initials:
                        <input type="text" maxLength="4" name="txtInitials" />
                    </label>
                </div>
                <div id="Alliance">
                    <div>
                        Choose an Alliance</div>
                    <div id="AllianceList">
                        <label for="rdoAllianceRed" id="lblRed">
                            <input type="radio" name="rdoAlliance" id="rdoAllianceRed" value="Red" />Red</label>
                        <label for="rdoAllianceBlue" id="lblBlue">
                            <input type="radio" name="rdoAlliance" id="rdoAllianceBlue" value="Blue" />Blue</label>
                    </div>
                </div>
                <div id="Password">
                    <label for="txtPassword">Password:
                        <input type="password" name="txtPassword" />
                    </label>
                </div>
                <div id="nav">
                    <input type="submit" name="btnNext" />
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/modernizr.js"></script>
</body>
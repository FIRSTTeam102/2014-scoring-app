<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>2014 Questionnaire</title>
    <meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,width=device-width,height=device-height,target-densitydpi=device-dpi,user-scalable=yes" />
    <link rel="stylesheet" href="stylesheet.css" />
    <!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body class="no-js">
    <div id="page">
        <div class="header">2014 Questionnaire taken by MJP</div>
        <form id="QuestionsForm" action="survey.php" method="POST">
			<label for="selectTeamID">Team: </label>			
			<select name="selectTeam" id="selectTeamID">
				<option value="" disabled="disabled" selected="selected">Please select a Team</option>
				<option value="102">102 - Somerville High School</option>
				<option value="303">303 - Bridgewater High School</option>
			</select>
			<div class="qSection">Drive System
				<div id="divDriveType">
					Drive Type: 
					<input type="radio" name="rdoDriveType" id="rdoTank" value="Tank" />
					<label for="rdoTank">Tank</label>
					<input type="radio" name="rdoDriveType" id="rdoMecanum" value="Mecanum" />
					<label for="rdoMecanum">Mecanum</label>
					<input type="radio" name="rdoDriveType" id="rdoOther" value="Other" />
					<label for="rdoMecanum">Other</label>
					<input type="text" name="txtOtherDriveTypeName" id="txtOtherDriveType" style="width: 10em;"/>
				</div>
				</div>
				<div>
				<label for="txtNumOfWheels">Number Of Wheels:</label>
				<input type="text" name="txtNumOfWheelsName" id="txtNumOfWheels" style="width: 5em;"/>
				</div>
				<div id="divTransmission">
					Power Transmission: 
					<input type="radio" name="rdoTransmission" id="rdoDirectDrive" value="Direct Drive" />
					<label for="rdoDirectDrive">Direct Drive</label>
					<input type="radio" name="rdoTransmission" id="rdoChain" value="Chain" />
					<label for="rdoChain">Chain</label>
					<input type="radio" name="rdoTransmission" id="rdoBelt" value="Belt" />
					<label for="rdoBelt">Belt</label>
				</div>
				<div>
				<label for="txtNumOfPWheels">Number Of Powered Wheels:</label>
				<input type="text" name="txtNumOfPWheelsName" id="txtNumOfPWheels" style="width: 5em;"/>
				</div>
				<div>
				<label for="txtMaxSpeed">Maximum Speed:</label>
				<input type="text" name="txtMaxSpeedName" id="txtMaxSpeed" style="width: 5em;"/> ft/sec
				</div>
				<div>
				<label for="txtMaxTorque">Maximum Torque:</label>
				<input type="text" name="txtMaxTorqueName" id="txtMaxTorque" style="width: 5em;"/> ft-lbs
				</div>
			</div>
			<div class="qSection">Autonomous
				<div id="divPrefStart">
					<label for="txtPreferredStartingPos">Preferred Starting Position:</label>
					<input type="text" name="txtPreferredStartingPosName" id="txtPreferredStartingPos" style="width: 15em;"/>
				</div>
				<div id="divHotGoalDetect">
					<input type="checkbox" name="chkHotGoalDetectName" value="HotGoalDetect" />
					<label for="chkHotGoalDetectName">Hot Goal Detect</label>
				</div>
				<div id="divCanScoreHigh">
					<input type="checkbox" name="chkCanScoreHighName" value="CanScoreHigh" />
					<label for="chkCanScoreHighName">Can  Score High</label>
				</div>
				<div id="divMobilityBonus">
					<input type="checkbox" name="chkMobilityBonusName" value="MobilityBonus" />
					<label for="chkMobilityBonusName">Mobility Bonus</label>
				</div>
				<div id="divGoalie">
					<input type="checkbox" name="chkGoalieName" value="Goalie" />
					<label for="chkGoalieName">Goalie</label>
				</div>
				<div id="divDescAutoFunction">
					<label for="txtDescAutoFunctionName">Briefly Describe Autonomous:</label>
					  <textarea cols="30" rows="2"
							name="txtDescAutoFunctionName"></textarea>
				</div>
			</div>
			<div class="qSection">Tele-Op
				<div id="divHighGoalTeleop">
					<input type="checkbox" name="chkHighGoalTeleopName" value="HighGoalTeleop" />
					<label for="chkHighGoalTeleopName">High Goal Scoring</label>
					<label for="txtPctAccHighGoalName">% Accuracy:</label>
					<input type="text" name="txtPctAccHighGoalName" id="txtPctAccHighGoal" style="width: 15em;"/>
				</div>
				<div id="divLowGoalTeleop">
					<input type="checkbox" name="chkLowGoalTeleopName" value="LowGoalTeleop" />
					<label for="chkLowGoalTeleopName">Low Goal Scoring</label>
					<label for="txtPctAccLowGoalName">% Accuracy:</label>
					<input type="text" name="txtPctAccLowGoalName" id="txtPctAccLowGoal" style="width: 15em;"/>
				</div>
				<div id="divTrussTeleop">
					<input type="checkbox" name="chkTrussTeleopName" value="TrussTeleop" />
					<label for="chkTrussTeleopName">Low Goal Scoring</label>
					<label for="txtPctAccTrussName">% Accuracy:</label>
					<input type="text" name="txtPctAccTrussName" id="txtPctAccTruss" style="width: 15em;"/>
				</div>
				<div id="divCatchTeleop">
					<input type="checkbox" name="chkCatchTeleopName" value="CatchTeleop" />
					<label for="chkCatchTeleopName">Low Goal Scoring</label>
					<label for="txtPctAccCatchName">% Accuracy:</label>
					<input type="text" name="txtPctAccCatchName" id="txtPctAccCatch" style="width: 15em;"/>
				</div>
				<div id="divPossession">
					Method of Possession: 
					<input type="radio" name="rdoPossession" id="rdoHerd" value="Herd" />
					<label for="rdoHerd">Herd</label>
					<input type="radio" name="rdoPossession" id="rdoCatch" value="Catch" />
					<label for="rdoCatch">Catch</label>
					<input type="radio" name="rdoPossession" id="rdoCarry" value="Carry" />
					<label for="rdoCarry">Carry</label>
					<input type="radio" name="rdoPossession" id="rdoLaunch" value="Launch" />
					<label for="rdoLaunch">Launch</label>
				</div>
				<div id="divDescPossession">
					<label for="txtDescPossessionName">Briefly Describe Possession Mechanism:</label>
					  <textarea cols="30" rows="2"
							name="txtDescPossessionName"></textarea>
				</div>
				<div id="divDescLoad">
					<label for="txtDescLoadName">How does the robot load a ball:</label>
					  <textarea cols="30" rows="2"
							name="txtDescLoadName"></textarea>
				</div>
				<div id="divStrategy">
					<label for="txtStrategyName">Desired Strategy:</label>
					  <textarea cols="30" rows="2"
							name="txtStrategyName"></textarea>
				</div>
			</div>
			<div class="qSection">Other
				<div id="divDescRobot">
					<label for="txtDescRobotName">Describe the Robot:</label>
					  <textarea cols="30" rows="2"
							name="txtDescRobotName"></textarea>
				</div>
			</div>
            <div style="clear:both;"></div>
		</form>
	</div>
</body>
</html>

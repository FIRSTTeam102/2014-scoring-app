<?php

set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

ob_start();

session_start();

$password = $_GET['txtPassword'];
$initials = $_GET['txtInitials'];
$alliance = $_GET['rdoAlliance'];

$db = new mysqli("localhost", "team102_webuser", $password, "team102_2014");
if (mysqli_connect_errno()) {
	$_SESSION['error'] = sprintf("Database Connect failed: %s", mysqli_connect_error());
	header ("location: scoringapp.php");
	exit();
}
else if($password && $initials && $alliance != ""){

	$_SESSION['initials'] = strtoupper($initials);
	$_SESSION['password'] = $password;
	$_SESSION['alliance'] = $alliance;
	
	header ("location: choosematch.php");
	$db->close();
	}

?>
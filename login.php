<?php

set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

ob_start();

	session_start();

/* $mysqli = mysqli_connect("team102.org:3306", "team102_admin", "Admin1023", "team102_2014");
$res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
$row = mysqli_fetch_assoc($res);
echo $row['_msg'];
*/

$password = $_GET['txtPassword'];
$initials = $_GET['txtInitials'];
$alliance = $_GET['rdoAlliance'];


$link = @mysql_connect('team102.org:3306', 'team102_admin', $password);



if (!$link) {
    header ("location: scoringapp.php");
    exit();
}else if($password && $initials && $alliance != ""){

	
	$_SESSION['initials'] = $initials;
	$_SESSION['password'] = $password;
	$_SESSION['alliance'] = $alliance;
	
	header ("location: choosematch.php");
}

?>
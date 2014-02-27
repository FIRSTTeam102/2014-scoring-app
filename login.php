<?php

set_include_path(get_include_path() . PATH_SEPARATOR . "../" . PATH_SEPARATOR . "../../" . PATH_SEPARATOR . "../../../");

session_start();

$alliance = $_GET['rdoAlliance'];

$_SESSION['alliance'] = $alliance;

header ("location: choosematch.php");
$db->close();
?>
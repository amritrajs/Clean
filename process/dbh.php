<?php

//$servername = "localhost";
//$dBUsername = "root";
//$dbPassword = "";
//$dBName = "ems";
//for remote
$servername = "remotemysql.com";
$dBUsername = "WqHtgwVRVp";
$dbPassword = "9iU4M8K3qQ";
$dBName = "WqHtgwVRVp";
$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>

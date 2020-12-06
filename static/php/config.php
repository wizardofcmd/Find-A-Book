<?php
	$host='zwgaqwfn759tj79r.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
	$user='fbwp5u68u9cijt3z';
	$pass='dbsauqmq7lts255i';
	$db='dzlgt6jdd573rkdc';
	
	$mysqli = new mysqli($host, $user, $pass, $db);
	if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ') '
		. $mysqli->connect_error);
	}
	else{
	echo"success      ";}
?>
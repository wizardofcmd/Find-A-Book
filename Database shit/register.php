<?php>
include 'config.php';


$bookName = $POST['bname'];
$userComment = $POST['uComment'];

$sql = "INSERT INTO usersreviews (`bookName`,`userComment`) VALUES ('$bookName', '$userComment')";
if(!$sql){
	die('query has failed');
	
}






?>
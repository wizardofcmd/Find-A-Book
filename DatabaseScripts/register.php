<?php
//dont forget to change the credentials below for the actual online database
$mysqli = new mysqli('localhost', 'root', '', 'reviews');


if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
else{
echo"success      ";}

//grabs the input from the form and stores them in 2 vars as below
$bookName = $_POST['bName'];
$userComment = $_POST['uComment'];
//the sql query to insert
$sql = "INSERT INTO `usersreviews` (`bookName`, `userComment`) VALUES ('$bookName', '$userComment')";

if($mysqli->query($sql)=== TRUE ){
	echo "
	
	data has been inputed succesfully";
}
else{
echo "failed to put in data";
}



 

?>
<?php
	include 'config.php';
	//grabs the input from the form and stores them in 2 vars as below
	if(isset($_POST['btn_save']))
{
	$bookName = mysqli_real_escape_string( $_POST['bName']);
	$userComment = mysqli_real_escape_string($_POST['uComment']);
	//the sql query to insert
	$sql = "INSERT INTO `usersreviews` (`book`, `review`) VALUES ('$bookName', '$userComment')";

	if(mysqli_query($mysqli,$sql)){
		echo "Inserted Successfully";
	}
}
?>

<?php
	include 'config.php';
	//grabs the input from the form and stores them in 2 vars as below
	$bookName = mysqli_real_escape_string($mysqli, $_POST['bName']);
	$userComment = mysqli_real_escape_string($mysqli, $_POST['uComment']);
	//the sql query to insert
	$sql = "INSERT INTO `usersreviews` (`book`, `review`) VALUES ('$bookName', '$userComment')";

	if($mysqli->query($sql) === TRUE ){
		echo "<script>console.log('Data has been entered successfully.')</script>";
	}
	else {
	echo "<script>console.log('Error in submitting data.')</script>";
	}
	
$page = '../index.html';
header('Location: '.$page, true, 303);
exit;
?>

<?php
	
	$selected_val = $_POST['bookdata'];
	
	$link = "https://www.googleapis.com/books/v1/volumes?q=".$selected_val;
	$book_json = file_get_contents($link);
	//$data = json_decode($book_json,true);
	
	echo $book_json;
?>
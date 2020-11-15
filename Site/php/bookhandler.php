<?php
	include 'api_key.php';
	
	
	$selected_val = $_POST['bookdata'];
	$titles = array("");
	$link = "https://www.googleapis.com/books/v1/volumes?q=subject:"
	.$selected_val."&key=".$api_key."&maxResults=20";
	$book_json = file_get_contents($link);
	$data = json_decode($book_json,true);
	
	for ($i=0;$i<count($data["items"]);$i++) {
		$titles[$i] = $data["items"][$i]["volumeInfo"];
		
	}
	//echo $book_json;
	echo json_encode($titles);
?>
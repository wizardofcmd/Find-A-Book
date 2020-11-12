<?php
	
	$selected_val = $_POST['bookdata'];
	$results = array("");
	$link = "https://www.googleapis.com/books/v1/volumes?q=subject:".$selected_val;
	$book_json = file_get_contents($link);
	$data = json_decode($book_json,true);
	for ($i=0;$i<count($data["items"]);$i++) {
		$results[$i] = $data["items"][$i]["volumeInfo"];
		
	}
	//echo $book_json;
	echo json_encode($results);
?>
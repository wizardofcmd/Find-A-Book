<?php
	$ran_val = $_POST['bookdata'];
	$titles = array("");
	$link = "https://www.googleapis.com/books/v1/volumes?q=subject:".$ran_val;
	$book_json = file_get_contents($link);
	$data = json_decode($book_json,true);
	
	for ($i=0;$i<count($data["items"]);$i++) {
		$titles[$i] = $data["items"][$i]["volumeInfo"];
		
			/*author=$('<h5 class="center-align white-text"> By:' + response.items[i].volumeInfo.authors + '</h5>');
           img = $('<img class="aligning card z-depth-5" id="dynamic"><br><a href=' + response.items[i].volumeInfo.infoLink + '><button id="imagebutton" class="btn red aligning">Read More</button></a>'); 	
           url= response.items[i].volumeInfo.imageLinks.thumbnail;
           img.attr('src', url);*/
	}
	//echo $book_json;
	echo json_encode($titles);
?>
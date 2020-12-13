<?php
include 'api_key.php';
$selected_val =urlencode($_POST['book']);
$titles = array("");
$link = "https://www.googleapis.com/books/v1/volumes?q=intitle:"
.$selected_val."&key=".$api_key."&maxResults=1";
$book_json = file_get_contents($link);
$data = json_decode($book_json,true);

for ($i=0;$i<count($data["items"]);$i++) {
  $titles[$i] = $data["items"][$i]["volumeInfo"];

}
//echo $book_json;
echo json_encode($titles);
?>

<?Php
require_once("config.php");
function get_book($mysqli , $term){
 $query = "SELECT * FROM usersreviews WHERE book LIKE '%".$term."%' ORDER BY book ASC";
 $result = mysqli_query($mysqli, $query);
 $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
 return $data;
}

if (isset($_GET['term'])) {
 $getBook = get_book($mysqli, $_GET['term']);
 $bookList = array();
 foreach($getBook as $book){
 $bookList[] = $book['book'];
 }
 echo json_encode($bookList);
}
?>

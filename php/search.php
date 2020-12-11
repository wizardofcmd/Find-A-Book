<?Php
/*header('Set-Cookie: cross-site-cookie=name; SameSite=None; Secure');
session_start();
error_reporting(0);// With this no error reporting will be there*/
require_ once("../api/config/database.php");
function get_book($conn , $term){
 $query = "SELECT * FROM usersreviews WHERE book LIKE '%".$term."%' ORDER BY book ASC";
 $result = mysqli_query($conn, $query);
 $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
 return $data;
}

if (isset($_GET['term'])) {
 $getBook = get_book($conn, $_GET['term']);
 $bookList = array();
 foreach($getBook as $book){
 $bookList[] = $book['book'];
 }
 echo json_encode($bookList);
}
?>

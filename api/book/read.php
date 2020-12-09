<?php
header("Access-Control-Allow_Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Including configuration file and object (book) file
include '../config/database.php';
include_once '../objects/book.php';

// Instantiate Database and Product object
$database = new Database();
$db = $database->getConnection();

// Initialize object
$book_obj = new Book($db);

// Query books
$statement = $book_obj->read();
$num = $statement->rowCount();

// Checks for existing records > 0
if($num>0){
    // Books array
    $books_arr=array();
    $books_arr["records"]=array();

    // Retrieving table contents
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $book_item=array(
            "book" => $book,
            "review" => $review
        );

        array_push($books_arr["records"], $book_item);
    }

    // Response code - 200 OK (Success)
    http_response_code(200);

    echo json_encode($books_arr);
} else{
    // Response code - 404 Not Found (Failure)
    http_response_code(404);

    // No books founds
    echo json_encode(
        array("message" => "No products found.")
    );
}
?>

<?php
class Book{
    // Connecting to database & Setting table name
    private $conn;
    private $table_name = "usersreviews";

    // Object properties
    public $book;
    public $review;

    // Constructor
    public function __construct($db){
        // Database connection set to $db
        $this->conn = $db;
    }

    function read(){
        // Select all query
        $query = "SELECT *
        FROM " .$this->table_name;

        // Query statement
        $statement = $this->conn->prepare($query);

        // Execute query
        $statement->execute();

        return $statement;
    }
}
?>

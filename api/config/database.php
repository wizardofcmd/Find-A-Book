<?php
class Database{

    // JawsDB Credentials
    private $host = "zwgaqwfn759tj79r.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
    private $db_name = "dzlgt6jdd573rkdc";
    private $username = "fbwp5u68u9cijt3z";
    private $password = "dbsauqmq7lts255i";
    public $conn;

    // Return connection success or failure
    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>

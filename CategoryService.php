<?php

include_once("Database.php");


//include_once("/product/ProductService.php");
//require "/product/ProductService.php";

class CategoryService {

    private $database;
    private $dbConnection;

    public function __construct() {
        $this->database = new Database();
        $this->dbConnection = $this->database->getConnection();
    }

    public function getAll() {
        $response = array();

        $sql = "select * from course";

        $results = mysqli_query($this->dbConnection,$sql);        

        return mysqli_fetch_assoc($results);

    }


    


}


?>
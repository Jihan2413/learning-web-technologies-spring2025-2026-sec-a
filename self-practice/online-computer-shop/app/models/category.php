<?php

require_once "../app/config/database.php";

class category {

    private $conn;

    public function __construct() {

        $database = new database();
        $this->conn = $database->connect();
    }

    public function getCategories() {

        $query = "SELECT * FROM categories
                  WHERE parent_id IS NULL";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
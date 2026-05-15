<?php

require_once "../app/config/database.php";

class product {

    private $conn;

    public function __construct() {

        $database = new database();
        $this->conn = $database->connect();
    }

    public function featuredProducts() {

        $query = "SELECT * FROM products
                  ORDER BY created_at DESC
                  LIMIT 6";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
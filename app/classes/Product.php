<?php

use LDAP\Result;

    class Product {
        protected $conn;
    
        public function __construct() {
            global $conn;
            $this->conn = $conn;
        }

        public function fetch_all() {
            $sql = "SELECT * FROM products";
            $result = $this->conn->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function read($product_id) {
            $stmt = $this->conn->prepare("SELECT * FROM products WHERE product_id=?");
            $stmt->bind_param("i", $product_id);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }
    }

?>
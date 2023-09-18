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

    }

?>
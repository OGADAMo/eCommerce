<?php
class Order {
    protected $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }
    public function create_order()  {
        
    }
    
}

?>
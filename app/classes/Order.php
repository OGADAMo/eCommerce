<?php
class Order {
    protected $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }
    public function create($cart_items)  {
        var_dump($cart_items);
    }
    
}

?>
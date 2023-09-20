<?php
class Cart {
    protected $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function add_to_cart($user_id, $product_id){
        $sql = "INSERT INTO cart (user_id, product_id) VALUES (?, ?)";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ii", $user_id, $product_id);
            
        $stmt->execute();
        


    }

    public function get_cart_items(){
        $sql = "SELECT p.product_id, p.name, p.price, p.size, p.image
                FROM cart c
                INNER JOIN products p
                ON c.product_id = p.product_id
                WHERE c.user_id = ?";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $_SESSION['user_id']);
            
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

?>
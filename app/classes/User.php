<?php
class User {
    protected $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function create($name, $username, $email, $password)  {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        
        $stmt->bind_param("ssss", $name, $username, $email, $hashed_password);
    
        $result = $stmt->execute();

        if ($result) {
            $_SESSION['user_id'] = $result->insert_id;
            return true;
        } else {
            return false;
        }
    
    }
}

?>
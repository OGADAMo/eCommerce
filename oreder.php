<?php
require_once 'inc/header.php';
require_once 'app/classes/Cart.php';

if(!$user->is_logged()){
    header("location: login.php");
    exit();
}

$cart = new Cart();
$cart_item = $cart->get_cart_items();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $product["product_id"];
    $user_id = $_SESSION['user_id'];

    $cart = new Cart();
    $cart->add_to_cart($user_id, $product_id);


        $_SESSION['message']['type'] = 'success';          
        $_SESSION['message']['text'] = 'Dodano u kosaricu';
        header("location: cart.php");
        exit();
} 
?>


<?php
require_once 'inc/footer.php';

?>
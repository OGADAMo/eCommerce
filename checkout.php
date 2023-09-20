<?php
require_once 'inc/header.php';
require_once 'app/classes/Cart.php';

if(!$user->is_logged()){
    header("location: login.php");
    exit();
}

$cart = new Cart();
$cart_item = $cart->get_cart_items();
?>


<?php
require_once 'inc/footer.php';

?>
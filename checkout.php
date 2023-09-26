<?php
require_once 'inc/header.php';
require_once 'app/classes/Cart.php';
require_once 'app/classes/Order.php';

if(!$user->is_logged()){
    header("location: login.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order = new Order();
    $order = $order->create();

    if($order){

    }
} 


?>
<form action="" method="POST">
    <div class="form-group mb-3">
        <label for="country">Country</label>
        <input type="text" class="form-control" id="country" name="country" required>
    </div>
    <div class="form-group mb-3">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" name="city" required>
    </div>
    <div class="form-group mb-3">
        <label for="zip">Zip Code</label>
        <input type="text" class="form-control" id="zip" name="zip" required>
    </div>
    <div class="form-group mb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" required>
    </div>
        <button type="submit" class="btn btn-primary">Order</button>
</form>

<?php
require_once 'inc/footer.php';

?>
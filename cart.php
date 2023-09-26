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
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Size</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cart_item as $item) : ?>
            <tr>
                <td><?php echo htmlspecialchars($item['name'])?></td>
                <td><?php echo htmlspecialchars($item['size'])?></td>
                <td>$<?php echo htmlspecialchars($item['price'])?></td>
                <td><?php echo htmlspecialchars($item['quantity'])?></td>
                <td><img src="<?php echo htmlspecialchars($item['image'])?>" height="50"></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="checkout.php" class="btn btn-success">Checkout</a>

<?php
require_once 'inc/footer.php';

?>
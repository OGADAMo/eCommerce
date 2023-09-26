<?php
require_once 'inc/header.php';
require_once 'app/classes/Product.php';
require_once 'app/classes/Cart.php';

$product = new  Product();
$product= $product->read($_GET['product_id']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $product["product_id"];
    $user_id = $_SESSION['user_id'];
    $quantity = $_POST['quantity'];

    $cart = new Cart();
    $cart->add_to_cart($user_id, $product_id, $quantity);


    $_SESSION['message']['type'] = 'success';          
    $_SESSION['message']['text'] = 'Dodano u kosaricu';
    header("location: cart.php");
    exit();
} 

?>

<div class="row">
    <div class="col-lg-6">
        <img src="<?php echo $product['image']; ?>" alt="img-fluid" class="product-image">
    </div>

    <div class="col-lg-6">
        <h2><?php echo $product['name']; ?></h2>
        <p>Price: $<?php echo number_format($product['price'], 2); ?></p>
        <p>Size: <?php echo $product['size']; ?></p>
        <form action="" method="POST">
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1">
            </div>
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>
    </div>
</div>



<?php require_once 'inc/footer.php'; ?>
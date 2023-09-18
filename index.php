<?php

require_once 'inc/header.php';
require_once 'app/classes/Product.php';

$products = new Product();
$products = $products->fetch_all();

?>

<div class="row">
    <?php foreach ($products as $product): ?>
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['name']; ?></h5>
                    <p class="card-text">
                        Price: $<?php echo number_format($product['price'], 2); ?><br>
                        Size: <?php echo $product['size']; ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>



<?php require_once 'inc/footer.php' ?>
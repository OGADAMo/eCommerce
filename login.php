<?php require_once 'inc/header.php' ?>

<div class="row justify-content-center">
        <div class="col-lg-6">
            <h3 class="text-center py-5">Login</h3>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>

            <a href="register.php">Register</a>
        </div>
</div>

<?php require_once 'inc/footer.php' ?>
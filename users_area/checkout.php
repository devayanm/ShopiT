<?php
include('../includes/connect.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Checkout Page</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
</head>

<body>
    <div class="fixed-top">
        <div class="upper-nav primary-bg p-2 px-3 text-center text-break">
            <span>Summer Sale On All Products Exclusively And Free Express Delivery - OFF 50%! <a>Shop Now</a></span>
        </div>

        <div class="landing">
            <div class="container">
                <div class="row m-0">
                    <?php
                    if (!isset($_SESSION['username'])) {
                        include('user_login.php');
                    } else {
                        include('payment.php');
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="divider"></div>
        </div>


        <div class="upper-nav primary-bg p-2 px-3 text-center text-break fixed-bottom">
            <span>&copy; 2024 My eCommerce. All rights reserved.</span>
        </div>

        <script src="./assets/js/bootstrap.bundle.js"></script>
</body>

</html>
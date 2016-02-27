<?php
    include_once("products.inc.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <style>
        img {
            width:100px;
        }
    </style>
</head>
<body>
    <?php foreach( $products as $key => $p ): ?>
        <h1><?php echo $p["name"] . " € " . $p["price"] ?></h1>
        <img src="<?php echo $p["image"] ?>" alt="product">
        <a href="productdetails.php?product=<?php echo $key; ?>">More info</a>
        <?php endforeach; ?>

    <?php
    include_once("cart.inc.php");
    ?>
</body>
</html>
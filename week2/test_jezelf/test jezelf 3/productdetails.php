<?php
    include_once("products.inc.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');
        $id = $_GET["product"];
        $product = $products[$id];
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Productdetails: <?php echo $product["name"] ?></title>
    <style>
        img {
            width:100px;
        }
    </style>
</head>
<body>
    <a href="products.php">Back to store</a>
    <p><?php echo $product["name"] . " € " . $product["price"] ?></p>
    <img src='<?php echo $product["image"] ?>' alt="product">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <input type="text" name="product" hidden value="<?php echo $id ?>">
        <input type="number" name="itemKey" hidden value="<?php echo $id ?>">
        <input type="submit" value="Buy item">
    </form>

    <?php
        include_once("cart.inc.php");
    ?>
</body>
</html>
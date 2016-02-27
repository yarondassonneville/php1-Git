<?php
    include_once("products.inc.php");
    session_start();
/*error_reporting(E_ALL);
ini_set('display_errors', '1');*/
if (isset($_GET['itemKey']) /*&& !empty($_GET["itemKey"]) NUL WORDT AANZIEN ALS EMPTY?*/) {
    /*if(is_array($_SESSION["cart"]) == false){
        $_SESSION["cart"] = array($_GET["itemKey"]);
        //array_push($_SESSION['cart'], $_GET["itemKey"]);
        }
    else {
        array_push($_SESSION["cart"], $_GET["itemKey"]);
    }*/

    if(!empty($_SESSION["cart"])){
        array_push($_SESSION["cart"], $_GET["itemKey"]);
    }
    else {
        $_SESSION["cart"] = array($_GET["itemKey"]);
    }
    /*$arrCart = array();
    array_push($arrCart, $_GET['itemKey']);*/
    //$_SESSION["cart"] = $arrCart;
    /*$_SESSION["cart"] .= "[" . $_GET["itemKey"] . "]," ;*/
    //echo $arrCart;
    //var_dump($_SESSION['cart']);
    //LOOP
    //var_dump($_SESSION["cart"]);
}
else {

}
?><h1><?php
    if(empty($_SESSION["cart"])){
        echo 'Your cart is empty';
    }
    else {
        echo 'Products in your cart:';
    }
    ?></h1><ul>
<?php if(!empty($_SESSION["cart"])){
    foreach($_SESSION["cart"] as $item): ?>
        <li>Product: <?php echo $products[$item]['name'] . " € " . $products[$item]['price'] ?></li>
    <?php endforeach;
}?>
    </ul>

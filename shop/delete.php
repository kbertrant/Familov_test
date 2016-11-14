<?php
include ('food_admin/inc/dbConnect.inc.php');
if ($_GET['category_id']) {
    $category_id = $_GET['category_id'];
    $sql = "delete from categories where category_id='$category_id'";
    mysql_query($sql);
	header("Location:view_categories.php");
}


if ($_GET['product_id']) {
    $product_id = $_GET['product_id'];
    $sql = "delete from products where product_id='$product_id'";
    mysql_query($sql);
	header("Location:view_products.php");
}



if ($_GET['order_id']) {
    $order_id = $_GET['order_id'];
    $sql = "delete from orders where order_id IN ($order_id)";
    mysql_query($sql);
	header("Location:view_cart.php");
}



?>
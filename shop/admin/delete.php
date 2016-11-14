<?php
include ('inc/dbConnect.inc.php');
if ($_GET['country_id']) {
    $country_id = $_GET['country_id'];
    $sql = "delete from country where country_id='$country_id'";
    mysql_query($sql);
	header("Location:country.php");
}

if ($_GET['city_id']) {
    $city_id = $_GET['city_id'];
    $sql = "delete from city where city_id='$city_id'";
    mysql_query($sql);
	header("Location:city.php");
}

if ($_GET['shop_id']) {
    $shop_id = $_GET['shop_id'];
    $sql = "delete from shops where shop_id='$shop_id'";
    mysql_query($sql);
	header("Location:shop.php");
}

if ($_GET['category_id']) {
    $category_id = $_GET['category_id'];
    $sql = "delete from categories where category_id='$category_id'";
    mysql_query($sql);
	header("Location:category.php");
}

if ($_GET['product_id']) {
    $product_id = $_GET['product_id'];
    $sql = "delete from products where product_id='$product_id'";
    mysql_query($sql);
	header("Location:products.php");
}



if ($_GET['delete_product_image']) {
    $delete_product_image = $_GET['delete_product_image'];
    $sql = "UPDATE products SET product_image='' where product_id='$delete_product_image'";
    mysql_query($sql);
	header("Location:products.php?product_id=$delete_product_image");
}





if ($_GET['delete_shop_logo']) {
    $delete_shop_logo = $_GET['delete_shop_logo'];
    $sql = "UPDATE shops SET shop_logo='' where shop_id='$delete_shop_logo'";
    mysql_query($sql);
	header("Location:shop.php?shop_id=$delete_shop_logo");
}





if ($_GET['delete_shop_banner']) {
    $delete_shop_banner = $_GET['delete_shop_banner'];
    $sql = "UPDATE shops SET shop_banner='' where shop_id='$delete_shop_banner'";
    mysql_query($sql);
	header("Location:shop.php?shop_id=$delete_shop_banner");
}


if ($_GET['customer_id']) {
    $customer_id = $_GET['customer_id'];
    $sql = "delete from customers where customer_id='$customer_id'";
    mysql_query($sql);
	header("Location:customers.php");
}
if ($_POST['qry']) {
    $sql =$_POST['qry'];
    mysql_query($sql);
	//header("Location:customers.php");
}

?>
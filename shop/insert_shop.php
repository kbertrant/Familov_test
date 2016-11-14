<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_SESSION['customer_id'];
$shop_name = $_POST['shop_name'];
$shop_address = $_POST['shop_address'];
$shop_logo = $_POST['shop_logo'];
$shop_banner = $_POST['shop_banner'];
	

if($shop_logo != "" && $shop_logo != "undefined"){
	$insertintotable = ("UPDATE customers SET shop_logo='$shop_logo' where customer_id = '$customer_id'");	
	if (mysql_query($insertintotable)) { }
}
	
if($shop_banner != "" && $shop_banner != "undefined"){
	$insertintotable = ("UPDATE customers SET shop_banner='$shop_banner' where customer_id = '$customer_id'");	
	if (mysql_query($insertintotable)) { }
}

$insertintotable = ("UPDATE customers SET shop_name='$shop_name', shop_address='$shop_address', country_id='$country_id', city_id='$city_id'  where customer_id = '$customer_id'");	
if (mysql_query($insertintotable)) { }
	
	
		
?>
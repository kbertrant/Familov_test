<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_SESSION['customer_id'];
$ip_address = $_SERVER['REMOTE_ADDR']; 

$product_id = $_POST['product_id'];


$sql = "delete from orders where ip_address='$ip_address' and product_id='$product_id' and generate_code = '' and random_rick != 'expire' limit 1";
mysql_query($sql);
	
/*
$insertintotable = "insert into orders(customer_id,ip_address,product_id,quantity,random_rick) values('$customer_id','$ip_address','$product_id','$quantity','$random_rick')";
mysql_query($insertintotable);
*/
?>
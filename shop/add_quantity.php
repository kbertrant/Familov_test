<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_SESSION['customer_id'];
$ip_address = $_SERVER['REMOTE_ADDR']; 

$product_id = $_POST['product_id'];
$quantity = "1";

	

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$random_rick = generateRandomString();


$insertintotable = "insert into orders(customer_id,ip_address,product_id,quantity,random_rick) values('$customer_id','$ip_address','$product_id','$quantity','$random_rick')";
mysql_query($insertintotable);
?>
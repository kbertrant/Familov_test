<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_SESSION['customer_id'];
$username = $_POST['username'];
$lastame = $_POST['lastname'];
$sender_number = $_POST['sender_number'];
$home_address = $_POST['home_address'];		


$insertintotable = ("UPDATE customers SET username='$username',lastname='$lastname', sender_phone='$sender_number', home_address='$home_address'    where customer_id = '$customer_id'");	
if (mysql_query($insertintotable)) { }
	
	
		
?>
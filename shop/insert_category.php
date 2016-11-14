<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_SESSION['customer_id'];
$category_name = $_POST['category_name'];
$category_id = $_POST['category_id'];

if($category_id != "" && $category_id != 0){
	
	$insertintotable = ("UPDATE categories SET category_name='$category_name' where category_id = '$category_id' and customer_id = '$customer_id'");	
	if (mysql_query($insertintotable)) { }
	
}else{
	
	$insertintotable = "insert into categories(customer_id,category_name) values('$customer_id','$category_name')";
if (mysql_query($insertintotable)) { }
	
}


?>
<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_SESSION['customer_id'];
$ip_address = $_SERVER['REMOTE_ADDR']; 

$product_id = $_POST['product_id'];




$count_dishmenue1 = mysql_query("SELECT * from orders where ip_address='$ip_address' and generate_code = '' and random_rick != 'expire'");
$num_dishmenusw = mysql_num_rows($count_dishmenue1);	

if($num_dishmenusw == 0){
	echo $num_dishmenusw1  = '0';
}else{
	echo $num_dishmenusw1  = $num_dishmenusw;
}


	
/*
$insertintotable = "insert into orders(customer_id,ip_address,product_id,quantity,random_rick) values('$customer_id','$ip_address','$product_id','$quantity','$random_rick')";
mysql_query($insertintotable);
*/
?>
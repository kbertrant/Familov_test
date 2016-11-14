<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_SESSION['customer_id'];


$product_name = $_POST['product_name'];
$product_id = $_POST['product_id'];
$category_id = $_POST['category_id'];
$product_price_currency_id = $_POST['product_price_currency_id'];
$product_prices = $_POST['product_prices'];
$product_image = $_POST['product_image'];
$product_short_desc = $_POST['product_short_desc'];
$product_desc = $_POST['product_desc'];


if($product_id != "" && $product_id != 0){
	
	
	if($product_image != "" && $product_image != "undefined"){
		
			$insertintotable = ("UPDATE products SET product_name='$product_name',category_id='$category_id',product_price_currency_id='$product_price_currency_id',product_prices='$product_prices',product_image='$product_image',product_short_desc='$product_short_desc',product_desc='$product_desc',customer_id='$customer_id' where product_id = '$product_id'");	
	if (mysql_query($insertintotable)) { }
		
		
		
	}else{
		
			$insertintotable = ("UPDATE products SET product_name='$product_name',category_id='$category_id',product_price_currency_id='$product_price_currency_id',product_prices='$product_prices',product_short_desc='$product_short_desc',product_desc='$product_desc',customer_id='$customer_id' where product_id = '$product_id'");	
		if (mysql_query($insertintotable)) { }
		
		
	}
	

	
	
	
	
}else if($product_image != "" && $product_image != "undefined"){
	
	$insertintotable = "insert into products(product_name,category_id,product_price_currency_id,product_prices,product_image,product_short_desc,product_desc,customer_id) values('$product_name','$category_id','$product_price_currency_id','$product_prices','$product_image','$product_short_desc','$product_desc','$customer_id')";
	if (mysql_query($insertintotable)) { }
	
}else{
	
	$insertintotable = "insert into products(product_name,category_id,product_price_currency_id,product_prices,product_short_desc,product_desc,customer_id) values('$product_name','$category_id','$product_price_currency_id','$product_prices','$product_short_desc','$product_desc','$customer_id')";
	if (mysql_query($insertintotable)) { }
	
}


?>
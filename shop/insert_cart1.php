<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_SESSION['customer_id'];
$ip_address = $_SERVER['REMOTE_ADDR']; 
$product_id = $_POST['product_id'];
$quantity = "1";
$shop_id = $_POST['shop_id'];
$country_id = $_POST['country_id'];
$city_id = $_POST['city_id'];




	

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

	
	
	
	$sqler = "SELECT * from products where product_id = '$product_id'";
    $querey = mysql_query($sqler) or die(mysql_error());
    while ($reseult = mysql_fetch_array($querey)) {
	    $product_name = $reseult['product_name'];
	}	


	

$insertintotable = "insert into orders(customer_id,ip_address,product_id,quantity,random_rick,country_id,city_id,shop_id) values('$customer_id','$ip_address','$product_id','$quantity','$random_rick','$country_id','$city_id','$shop_id')";
if (mysql_query($insertintotable)) { 
?>

<div style="border: 1px dotted green;padding: 10px;">
<strong><?php echo $product_name; ?></strong>, has been added to your cart.
</div>
<br />


<?php

}

?>
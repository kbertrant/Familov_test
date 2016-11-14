<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_SESSION['customer_id'];
$phone_number = $_POST['phone_number'];
$home_address = $_POST['home_address'];	
$order_id = $_POST['order_id'];	
$ip_address = $_SERVER['REMOTE_ADDR']; 



function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$generate_code = generateRandomString();

	
	




$insertintotable = ("UPDATE customers SET phone_number='$phone_number', home_address='$home_address' where customer_id = '$customer_id'");	
if (mysql_query($insertintotable)) { }


$insertintotable1 = ("UPDATE orders SET random_rick='expire', customer_id='$customer_id', delivery_charges = '2', generate_code='$generate_code', order_status = 'Wait' where order_id IN($order_id) and ip_address = '$ip_address'");	
if (mysql_query($insertintotable1)) { 



	$result8ed = mysql_query("SELECT * from customers where customer_id  = '$customer_id'");
		while ($main_s9es = mysql_fetch_array($result8ed)) {
			$email_address = $main_s9es['email_address'];
			$username = $main_s9es['username'];
		}
		

			$EmailTo = "scopun@gmail.com";
		$EmailFrom = "scopun@gmail.com";
		$to = $email_address;
        $Subject = "ORDER";
		

		
$Body = "";
$Body .= "Name: ";
$Body .= $username;
$Body .= "\n";
$Body .= "CODE: ";
$Body .= $generate_code;
$Body .= "\n";

		mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");		 



}


	
	
		
?>
<?php
session_start();
include ('food_admin/inc/dbConnect.inc.php');
$message = array();
if (isset($_POST['email_address']) && !empty($_POST['email_address'])) {
    $email_address = mysql_real_escape_string($_POST['email_address']);
} else {
    $message[] = 'Please enter username';
}

if (isset($_POST['password']) && !empty($_POST['password'])) {
    $password = mysql_real_escape_string($_POST['password']);
} else {
    $message[] = 'Please enter Password';
}

$countError = count($message);

if ($countError > 0) {
    for ($i = 0; $i < $countError; $i++) {
        echo ucwords($message[$i]) . '<br/>';
    }
} else {
    $query = "select * from customers where email_address='$email_address' and password='$password'";

    $res = mysql_query($query);
    $checkUser = mysql_num_rows($res);
    $result = mysql_fetch_array($res);
    if ($checkUser > 0) {
        if($result['status']=='active'){
        $_SESSION['LOGIN_STATUSs1'] = true;
        $_SESSION['email_address'] = $email_address;
		
		
		
	$sql = "select * from customers where email_address='$email_address' and password='$password'";
    $queryfatch = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($queryfatch)) {
        $customer_id = $result['customer_id'];
		
		}
		
		 $_SESSION['customer_id'] = $customer_id;
		 
		 
		 
        echo 'correct';
        }
        else{
          echo ucwords('You cannot use this service now , please contact us for more infos : hello@familov.com');  
        }
    } else {
        echo ucwords('please enter correct user details');
    }
}
?>

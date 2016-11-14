<?php
session_start();
include_once ('inc/dbConnect.inc.php');
$generate_code = $_POST['generate_code'];
$order_status = $_POST['order_status'];
echo $order_status;
$insertintotable = ("UPDATE orders SET order_status='$order_status' WHERE generate_code='$generate_code'");
mysql_query($insertintotable);

if($order_status=='Delivered'){
$result_customer1d = mysql_query("SELECT customer_id from orders where generate_code='$generate_code'");
if ($customer_1d=mysql_fetch_array($result_customer1d)) { 
	$c1d=$customer_1d['customer_id'];
$result8ed = mysql_query("SELECT * from customers where customer_id  = '$c1d'");
		while ($main_s9es = mysql_fetch_array($result8ed)) {
			$email_address = $main_s9es['email_address'];
			$username = $main_s9es['username'];
			$sender_phone = $main_s9es['sender_phone'];
			$receipent_phone = $main_s9es['phone_number'];
			$recp_name = $main_s9es['recp_name'];
			$shop_name = $main_s9es[' 	shop_name'];
		}

		/*Message sending by message bird*/
require_once(__DIR__ . '/../messageapi/autoload.php');

$MessageBird = new \MessageBird\Client('live_oZ0VmyK80wtEcg8BNJvdq6fdz'); // Set your own API access key here.

$Message             = new \MessageBird\Objects\Message();
$Message->originator = 'familov.com';
$Message->recipients = array($sender_phone);
$Message->body       = 'Hello '.$username.' , your Packet was successfully deleivred to '.$recp_name.'. Thank you for using our Service. Familov';

try {
    $MessageResult = $MessageBird->messages->create($Message);
   // var_dump($MessageResult);

} catch (\MessageBird\Exceptions\AuthenticateException $e) {
    // That means that your accessKey is unknown
    echo 'wrong login';

} catch (\MessageBird\Exceptions\BalanceException $e) {
    // That means that you are out of credits, so do something about it.
    echo 'no balance';

} catch (\Exception $e) {
    echo $e->getMessage();
}

	}
}
else if($order_status=='Buy'){
$result_customer1d = mysql_query("SELECT customer_id from orders where generate_code='$generate_code'");
if ($customer_1d=mysql_fetch_array($result_customer1d)) { 
	$c1d=$customer_1d['customer_id'];
$result8ed = mysql_query("SELECT * from customers where customer_id  = '$c1d'");
		while ($main_s9es = mysql_fetch_array($result8ed)) {
			$email_address = $main_s9es['email_address'];
			$username = $main_s9es['username'];
			$sender_phone = $main_s9es['sender_phone'];
			$receipent_phone = $main_s9es['phone_number'];
			$recp_name = $main_s9es['recp_name'];
			$shop_name = $main_s9es[' 	shop_name'];
		}

		/*Message sending by message bird*/
require_once(__DIR__ . '/../messageapi/autoload.php');

$MessageBird = new \MessageBird\Client('live_oZ0VmyK80wtEcg8BNJvdq6fdz'); // Set your own API access key here.

$Message             = new \MessageBird\Objects\Message();
$Message->originator = 'familov.com';
$Message->recipients = array($receipent_phone);
$Message->body       = 'Hello '.$recp_name.',you got a packet from '.$username.', withdrawal : '.$shop_name.', Tel: (+49)1629142190, CODE- '.$generate_code;

try {
    $MessageResult = $MessageBird->messages->create($Message);
   // var_dump($MessageResult);

} catch (\MessageBird\Exceptions\AuthenticateException $e) {
    // That means that your accessKey is unknown
    echo 'wrong login';

} catch (\MessageBird\Exceptions\BalanceException $e) {
    // That means that you are out of credits, so do something about it.
    echo 'no balance';

} catch (\Exception $e) {
    echo $e->getMessage();
}

	}
}
?>

<?php
session_start();
include_once ('inc/dbConnect.inc.php');
$generate_code = $_POST['generate_code'];
$order_status = $_POST['order_status'];
$insertintotable = ("UPDATE orders SET order_status='$order_status' WHERE generate_code='$generate_code'");
mysql_query($insertintotable);

?>

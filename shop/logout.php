<?php
session_start();
include ('food_admin/inc/dbConnect.inc.php');
$ip_address = $_SERVER['REMOTE_ADDR'];
$sql = "delete from orders where ip_address = '$ip_address' and generate_code = '' and random_rick != 'expire'";
mysql_query($sql);
session_destroy();
header('location:login.php');
?>

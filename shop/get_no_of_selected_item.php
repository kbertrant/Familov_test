<?php
include ('food_admin/inc/dbConnect.inc.php');
$ip_address=$_POST['ipaddress'];
$resultcount = mysql_query("SELECT sum(quantity) as quantity  from orders where ip_address = '$ip_address' and random_rick != 'expire'");
$datacunt=mysql_fetch_assoc($resultcount);
$view_count = $datacunt['quantity'];

if($view_count != "" || $view_count != 0){ 
echo $view_count;
}else{
	echo "0";
}
?>
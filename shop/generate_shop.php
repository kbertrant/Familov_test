<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$country_id = $_POST['country_id'];
$city_id = $_POST['city_id'];

$query78e = mysql_query("SELECT * from shops where country_id = '$country_id' and city_id = '$city_id' order by shop_name asc");
echo "<option value='' selected='selected'>SHOP</option>";
while($row45e = mysql_fetch_array($query78e)) {
$shop_id = $row45e[shop_id];
$shop_name = $row45e[shop_name];
	echo "<option value='$shop_id'>$shop_name</option>";

}

?>

		
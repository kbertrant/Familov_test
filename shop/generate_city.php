<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_SESSION['customer_id'];
$country_id = $_POST['country_id'];






if($_POST['country_id'] != ""){
$country_id = $_POST['country_id'];

$query78e = mysql_query("SELECT * from city where country_id = '$country_id' order by city_name asc");
echo "<option value='' selected='selected'>CITY</option>";
while($row45e = mysql_fetch_array($query78e)) {
$city_id = $row45e[city_id];
$city_name = $row45e[city_name];

	echo "<option value='$row45e[city_id]'>$row45e[city_name]</option>";

}
}

?>

		
<?php
include ('inc/dbConnect.inc.php');
if ($_GET['country_id']) {
    $country_id = $_GET['country_id'];
    $sql = "delete from country where country_id='$country_id'";
    mysql_query($sql);
	header("Location:country.php");
}

if ($_GET['city_id']) {
    $city_id = $_GET['city_id'];
    $sql = "delete from city where city_id='$city_id'";
    mysql_query($sql);
	header("Location:city.php");
}



?>
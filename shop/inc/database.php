<?php

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
class database {

	var $SQL;
	var $lastquery;
	var $count=0;
	function database($database='familov_com', $server='familov.com.mysql', $username='familov_com', $password='KMURhMvW'){

		$this->SQL = mysqli_connect($server, $username, $password) or die('Error: '.mysqli_error());
		mysqli_select_db( $this->SQL,$database);
	}
function dbconnect()
{
$user_name = "rupaboron";
$password = "duet@cse11";
$database = "rupaboron";
$server = "localhost";

$db_handle = mysqli_connect($server, $user_name, $password);

$db_found = mysqli_select_db($db_handle,$database);

if ($db_found) {

print "Database Found ";
mysqli_close($db_handle);

}
else {

print "Database NOT Found ";

}
}
	function query($query, $return='true'){
		$this->lastquery = $query;
		$this->count++;
		$result = mysqli_query($this->SQL,$query) or die('Error with Query('.$query.'): '.mysqli_error($this->SQL));
		if ($return)
			return $result;
	}

	function num_rows(&$result){
		return @mysqli_num_rows($result);
	}

	function fetch_array(&$result){
		return @mysqli_fetch_array($result);
	}

	function fetch_assoc(&$result){
		return @mysqli_fetch_assoc($result);
	}

	function insert_id(){
		return @mysqli_insert_id();
	}

	function disconnect(){
		mysqli_close($this->SQL);
	}

	function escape(&$string){
		return mysqli_real_escape_string($string);
	}

	function result($query, $column, $id=0){
		return mysqli_result($query, $id, $column);
	}
}
?>




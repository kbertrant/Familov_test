<?php
session_start();
include_once ('inc/dbConnect.inc.php');
$message = array();
if (isset($_POST['uname']) && !empty($_POST['uname'])) {
    $uname = mysql_real_escape_string($_POST['uname']);
} else {
    $message[] = 'Please enter username';
}

if (isset($_POST['password']) && !empty($_POST['password'])) {
    $password = mysql_real_escape_string($_POST['password']);
} else {
    $message[] = 'Please enter password';
}

$countError = count($message);

if ($countError > 0) {
    for ($i = 0; $i < $countError; $i++) {
        echo ucwords($message[$i]) . '<br/>';
    }
} else {
    $query = "select * from admin where uname='$uname' and password='$password'";

    $res = mysql_query($query);
    $checkUser = mysql_num_rows($res);
    if ($checkUser > 0) {
        $_SESSION['LOGIN_STATUSs'] = true;
        $_SESSION['UNAME'] = $uname;
		
		
		
	$sql = "select * from admin where uname='$uname' and password='$password'";
    $queryfatch = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($queryfatch)) {
        $idss = $result['id'];
		
		}
		
		 $_SESSION['IDss'] = $idss;
		 
		 
		 
        echo 'correct';
    } else {
        echo ucwords('please enter correct user details');
    }
}
?>

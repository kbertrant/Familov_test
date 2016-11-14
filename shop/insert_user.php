<?php
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');

$username = $_POST['username'];
$lastname = $_POST['lastname'];
$email_address = $_POST['email_address'];
$mobile_number = $_POST['mobile_number'];
$password = $_POST['password'];



	$resultcheckingr2 = mysql_query("select email_address from customers where email_address = '$email_address'");
	  {
		if (mysql_num_rows($resultcheckingr2) == 1){
		echo 1;
		}else{

		$insertintotable = "insert into customers(username,lastname,email_address,password,sender_phone) values('$username','$lastname','$email_address','$password','$mobile_number')";

		
		if (mysql_query($insertintotable)) {


		$result8ed = mysql_query("SELECT * from customers where email_address  = '$email_address'");
		while ($main_s9es = mysql_fetch_array($result8ed)) {
		$reg_unique_code = $main_s9es['email_address'];
		}
		
		
		
		
		
$to = $email_address;
$subject = "Welcome To Familov ";
$message = '<h1>Hello ' . $username . " \r\n".'</h1>
            <br/><i>Welcome to Familov , now you can use our services to share happiness with your Family. <br/></i><br/><img src="http://familov.com/shop/images/flat7.png" style="display: block;">';

$header  = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
 
$header .= "From:Familov <hello@familov.com>\r\n";
$header .= "Reply-To:hello@familov.com\r\n";
// $header .= "Cc: $cc\r\n";  // falls an CC gesendet werden soll
$header .= "X-Mailer: PHP ". phpversion();



mail($to, $subject, $message, $header);
		 
		}
}

}
?>
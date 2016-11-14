<?php include("header.php");

//taking submitted parameters
	$command=$_GET['command'];
	if($command=='passwordresetrequest'){
	$psw_reset_requested_email=$_POST['requested_email'];
	// $mobile=$_POST['mobile'];
    $validation_info='<h3 style="color:Gray">OOps!! Unknown issue occured!</h3>';
    $query_result=$db->query("SELECT * FROM  customers where email_address='$psw_reset_requested_email'");
    //if the user exist
  if($db->num_rows($query_result)>0){
	  //if password reset request send

    	
    	//generating password reset code
		$generate_code = uniqid('reset',true);
		//Email sending code
		$to = $psw_reset_requested_email;
		$subject = "Familov password reset request";

		$header  = "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
 
		$header .= "From:Familov <hello@familov.com>\r\n";
		$header .= "Reply-To:hello@familov.com\r\n";
		// $header .= "Cc: $cc\r\n";  // falls an CC gesendet werden soll
		$header .= "X-Mailer: PHP ". phpversion();
		$Subject = "Searchdoor Password Reset!";  
		$Body ="<html><body>";
		$Body .='<h1>Hello ' . $username . " \r\n".'</h1>';
		$Body .= "<p>You previous password already expire!, So please read the below instructions<p>";
		$Body .= "<a href='http://familov.com/shop/reset_password.php?command=resetpassword&email=".$psw_reset_requested_email."&code=".$generate_code."'>Please click the link for reseting your password.</a>";
		$Body .='<br/><img src="http://familov.com/shop/images/flat7.png" style="display: block;">';
		$Body .="</body></html>";


		mail($to, $subject,$Body, $header);

		$db->query("update  customers set password='$generate_code' where email_address='$psw_reset_requested_email'");
 		$validation_info='<h3 style="color:Gray">Password reset link sent to your email, Please check</h3>';
	}
	else{
	$validation_info='<h3 style="color:Gray">OOps!! Email doesn\'t Exist!!</h3>';	
	}
}
	//if password change confirmation comes from customer email
	else if($command=='resetpassword'){
		 $code=$_GET['code'];
  		$request_email=$_GET['email'];
  		$psw=$_POST['psw'];
    	$confirmpsw=$_POST['confirmpsw'];
  		$query_result=$db->query("SELECT * FROM  customers where email_address='$request_email' and  password='$code'");
		//compare password and confirm password
		if($psw==""){
       $validation_info='<h3 style="color:Gray">OOps!! New password cann\'t empty!</h3>';
    }
   else if($psw!=$confirmpsw){
       $validation_info='<h3 style="color:Gray">OOps!! Password does not matched!</h3>';
    }
	
 else if($db->num_rows($query_result)>0)
  {
    $db->query("update  customers set password='$psw' where email_address='$request_email' and  password='$code'");
    $validation_info='<h3 style="color:Gray">Congratulation!! Password Changed successfully.</h3>';
    die("<script>location.href ='login.php'</script>");
    }
   else{
    $validation_info='<h3 style="color:ORANGE">Sorry! your password reset link expire!';
   }
	

    }
    else{    	
    	$validation_info='<h3 style="color:Gray">OOps!! You are trying to make illegal operations!</h3>';	
    	die("<script>location.href ='logout.php?command=exist'</script>");
    }
?>
<div class="container-fluid" style="height:100vh;width:100%">
<div class="row" style="height:100vh">
<div class="col-lg-12 col-md-12" style="width:100%;text-align:center;margin-top:150px;">
<?php
echo $validation_info;
?>
</div>
</div>
</div>
<?php include("footer.php"); ?>	
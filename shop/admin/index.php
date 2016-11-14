<?php
session_start();
if (isset($_SESSION['LOGIN_STATUSs']) && !empty($_SESSION['LOGIN_STATUSs'])) {
    header('location:dashboard.php');
}
?>	
<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Familov - delivering grocery for your family</title>

	<meta name="description" content="">
	<meta name="author" content="Akshay Kumar">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" /> 

    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Base Styling  -->
    <link rel="stylesheet" href="assets/css/app/app.v1.css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>	
    

<script type="text/javascript">
function checkLoginEnter(e) {
    evt = e || window.event;
    var keyPressed = evt.which || evt.keyCode;
    if (keyPressed == 13) //ENTER IS PRESSED
        validLogin();
};



function validLogin(){
      var uname=jQuery('#uname').val();
      var password=jQuery('#password').val();
      var dataString = 'uname='+ uname + '&password='+ password;
      jQuery.ajax({
      type: "POST",
      url: "processed.php",
      data: dataString,
      cache: false,
      success: function(result){
               var result=trim(result);
               if(result=='correct'){
                     window.location='dashboard.php';
               }else{
                     jQuery("#errorMessage").html(result);
					 jQuery('#errorMessage').css('display','block');
               }
      }
      });
}

function trim(str){
     var str=str.replace(/^\s+|\s+$/,'');
     return str;
}
</script>


 <div class="container">
    	<div class="row">
    	<div class="col-lg-4 col-lg-offset-4">
        	<h3 class="text-center">Familov</h3>
            <p class="text-center">Delivering grocery for your family - Admin Panel</p>
            <hr class="clean">
        	<form role="form">
			<div id="errorMessage" style="color:red; margin-bottom:2px;"></div>
              <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
				<input class="form-control" placeholder="Username" name="uname" id="uname" type="text" autofocus>
              </div>
              <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-key"></i></span>
				<input class="form-control"  onkeypress='checkLoginEnter(event)' placeholder="Password" id="password" name="password" type="password" value="">
              </div>
			  <input type="button" name="submit" value="Sign in" class="btn btn-purple btn-block" onclick="validLogin()">
            </form>
        </div>
        </div>
    </div>
	

   
    
    <!-- JQuery v1.9.1 -->
	<script src="assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Globalize -->
    <script src="assets/js/globalize/globalize.min.js"></script>
    
    <!-- NanoScroll -->
    <script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    
	
    
    
    <!-- Custom JQuery -->
	<script src="assets/js/app/custom.js" type="text/javascript"></script>
</body>
</html>

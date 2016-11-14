<?php include("header.php");
if($_GET){
	$code=$_GET['code'];
  		$request_email=$_GET['email'];
}
 ?>
<div class="container-fluid" style="height:100vh;width:100%">
<div class="row" style="height:100vh">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-2"></div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-8" style="text-align:center;margin-top:150px;">
<form id="password_resetform" action="password_reset_status.php?command=resetpassword&code=<?php echo $code; ?>&email=<?php echo $request_email;?>" method="post">

  <label for="psw">Enter New Password:</label>
 
  <input type="password" class="form-control" name="psw" id="psw" required="">
<br>
  <label for="confpsw">Confirm Password:</label>
 
  <input type="password" class="form-control" name="confirmpsw" id="confirmpsw" required="">
  <br>
  <div class="error_message"><strong id="password_error"></strong></div>
 <input type="submit" class="btn btn-info" value="Submit">
</form>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-2"></div>
</div>
</div>
<?php include("footer.php"); ?>	
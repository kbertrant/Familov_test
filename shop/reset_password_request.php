<?php include("header.php"); ?>
<div class="container-fluid" style="height:100vh;width:100%">
<div class="row" style="height:100vh">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-2"></div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-8" style="text-align:center;margin-top:150px;">
<form id="pswreset_requestform" action="password_reset_status.php?command=passwordresetrequest" method="post">

 <label for="usr">Enter Your Registered Email:</label>
 
  <input type="email" class="form-control" name="requested_email" id="email-input" required="">
  <div class="error_message"><strong id="email_error"></strong></div>
  <br>
  <br>
 <input type="submit" class="btn btn-info" value="Submit">
</form>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-2"></div>
</div>
</div>
<?php include("footer.php"); ?>	
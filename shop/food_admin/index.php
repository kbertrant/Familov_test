<?php
session_start();
if (isset($_SESSION['LOGIN_STATUSs']) && !empty($_SESSION['LOGIN_STATUSs'])) {
    header('location:dashboard.php');
}
?>	
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Familov - Sharing happiness</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>


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

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">LOGIN</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
						 <div id="errorMessage" style="color:red; margin-bottom:2px;"></div>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="uname" id="uname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  onkeypress='checkLoginEnter(event)' placeholder="Password" id="password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
								<input type="button" name="submit" value="Login" class="btn btn-lg btn-success btn-block" onclick="validLogin()">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>

</html>

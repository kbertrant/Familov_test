<?php 
session_start();
include ('food_admin/inc/dbConnect.inc.php');
$ip_address = $_SERVER['REMOTE_ADDR'];
if (!isset($_SESSION['LOGIN_STATUSs1'])) {	
}	
$customer_id = $_SESSION['customer_id'];

	$sql78sdss = "SELECT * from customers where customer_id = '$customer_id'";
    $queryessss = mysql_query($sql78sdss) or die(mysql_error());
    while ($resusltddss = mysql_fetch_array($queryessss)) {
		$username = $resusltddss['username'];
		$if_vendor = $resusltddss['if_vendor'];
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE OF SITE -->
    <title>Familov - Sharing happiness</title>

    <meta name="description" content="Multipurpose Landing Page with Page Builder - Consulting/Agent/Marketer Landing Page" />
    <meta name="keywords" content="getleads, html theme, consulting landing page, consulting theme, consulting template, agent theme, marketer theme, html landing page, one page, responsive landing page" />
    <meta name="author" content="Themedept">

    <!-- FAVICON  -->
    <!-- Place your favicon.ico in the images directory -->
    <link rel="shortcut icon" href="images/oDB1XbHN.png" type="image/png">
    <link rel="icon" href="images/oDB1XbHN.png" type="image/png">
    
    <!-- =========================
       STYLESHEETS 
    ============================== -->
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="css/icons/iconfont.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    
    <!-- PLUGINS STYLESHEET -->
    <link rel="stylesheet" href="css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="css/plugins/loaders.css">
    <link rel="stylesheet" href="css/plugins/animate.css">
    <link rel="stylesheet" href="css/plugins/pickadate-default.css">
    <link rel="stylesheet" href="css/plugins/pickadate-default.date.css">
    
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="css/style.css">

    <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	
	<script src="email_box/ckeditor.js"></script>
	
	
</head>




<script language="JavaScript">
function confirmation(){
    var sure = confirm("Are you sure you want to delete this record ?");
    if(!sure)
            return false;
    else
        return true;
}
</script>


<body data-spy="scroll" data-target="#main-navbar">

    <!-- Preloader -->
	
	<!--
    <div class="loader bg-orange">
        <div class="loader-inner ball-scale-ripple-multiple vh-center">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> 
-->

    <div class="main-container" id="page">

        
        <!-- =========================
             HEADER 
        ============================== -->
        <header id="nav1-3">
            <nav class="navbar navbar-fixed-top" id="main-navbar">
            
                <div class="container">
                    
                    <div class="navbar-header">
                        <!-- Menu Button for Mobile Devices -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <!-- Image Logo -->
                        <!-- 
                        recommended sizes
                            width: 150px;
                            height: 35px;
                        -->
                        <a href="index.php" class="navbar-brand smooth-scroll"><img src="images/CO3kD4iU8AAnIAC.png" alt="logo" /></a>
                        <!-- Image Logo For Background Transparent -->
                        <!--
                            <a href="#" class="navbar-brand logo-black smooth-scroll"><img src="images/logo-black.png" alt="logo" /></a>
                            <a href="#" class="navbar-brand logo-white smooth-scroll"><img src="images/logo-white.png" alt="logo" /></a> 
                        -->
                    </div><!-- /End Navbar Header -->

                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <!-- Menu Links -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="why.php" class="smooth-scroll">WHY?</a></li>
                            <li><a href="how.php" class="smooth-scroll">HOW IT WORKS</a></li>

							
							
							
                            <?php if($customer_id == ""){ ?><li><a href="signup.php" class="smooth-scroll">SIGN UP</a></li>
							 <li><a href="#" class="smooth-scroll">or</a></li>
                            <li><a href="login.php" class="btn-nav btn-orange smooth-scroll">LOGIN</a></li><?php }else{ ?>
							
								<li class="dropdown">
								 <a id="dLabel" data-toggle="dropdown" data-target="#" href="#" style="text-transform: uppercase;">Welcome: <?php echo $username; ?><?php if($if_vendor != 0){ echo " [Vendor]"; } else{ echo " [User]"; } ?> <span class="caret"></span></a>
                                   <ul class="dropdown-menu multi-level" role="menu">
									  <?php if($if_vendor != 0){ ?><li><a href="product.php">MY SHOP</a></li><?php } ?>
									  <?php if($if_vendor != 0){ ?><li><a href="view_categories.php">MY CATEGORIES</a></li><?php } ?>
									  <?php if($if_vendor != 0){ ?><li><a href="add_category.php">ADD NEW CATEGORY</a></li><?php } ?>
									  <?php if($if_vendor != 0){ ?><li class="divider"></li><?php } ?>
                                      <?php if($if_vendor != 0){ ?><li><a href="view_products.php">MY PRODUCTS</a></li><?php } ?>
									  <?php if($if_vendor != 0){ ?><li><a href="add_product.php">ADD NEW PRODUCT</a></li><?php } ?>
									  <?php if($if_vendor != 0){ ?><li class="divider"></li><?php } ?>
                                      <?php if($if_vendor != 0){ ?><li><a href="">ORDERS</a></li><?php } ?>
                                      <?php if($if_vendor != 0){ ?><li><a href="shop_settings.php">SHOP INFORMATION</a></li><?php } ?>
                                      <li><a href="account_config.php">ACCOUNT CONFIGURATION</a></li>
									   <li class="divider"></li>
                                      <li><a href="logout.php">LOGOUT</a></li>
                                    </ul>
                                  </li>
								  
								  
								  
				
		
					
							<?php } ?>
<div style=" display: inline-block;margin-left: 10px;margin-top: 5px;"><a href="view_cart.php" class="smooth-scroll"><img src="images/cart.png"></a><span style="  background-color: red;
    border-radius: 50%;
    color: #fff;
    font-size: 13px;
    padding: 3px;
    vertical-align: super;">
	
	
	
<?php
$resultcount = mysql_query("SELECT sum(quantity) as quantity  from orders where ip_address = '$ip_address' and random_rick != 'expire'");
$datacunt=mysql_fetch_assoc($resultcount);
$view_count = $datacunt['quantity'];

if($view_count != "" || $view_count != 0){ 
echo $view_count;
}else{
	echo "0";
}
?>
	
	
	
	
	
	</span></div>

							
							
							
                        </ul><!-- /End Menu Links -->
                    </div><!-- /End Navbar Collapse -->

                </div><!-- /End Container -->
            </nav><!-- /End Navbar -->
        </header>
        <!-- /End Header Section -->

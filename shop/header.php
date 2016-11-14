<?php
session_start();
include ('food_admin/inc/dbConnect.inc.php');   

$ip_address = $_SERVER['REMOTE_ADDR'];
//when already seesion exist
if (!isset($_SESSION['LOGIN_STATUSs1'])) {  
}  
$customer_id = $_SESSION['customer_id'];

    $sql78sdss = "SELECT * from customers where customer_id = '$customer_id'";
    $queryessss = mysql_query($sql78sdss) or die(mysql_error());
    while ($resusltddss = mysql_fetch_array($queryessss)) {
        $username = $resusltddss['username'];
    }

include ('food_admin/inc/database.php');
$db = new database();
?>

<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE OF SITE -->
    <title> FAMILOV | Food and groceries instead of money transfert</title>

    <meta name="description" content="groceries dele instead of money transfert" />
    <meta name="keywords" content="groceries, africa, delivered,family,startup,loved, money />
    <meta name="Familov" content="Themedept">

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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    
    <!-- PLUGINS STYLESHEET -->
    <link rel="stylesheet" href="css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="css/plugins/loaders.css">
    <link rel="stylesheet" href="css/plugins/animate.css">
    <link rel="stylesheet" href="css/plugins/pickadate-default.css">
    <link rel="stylesheet" href="css/plugins/pickadate-default.date.css">    
	<link rel="stylesheet" href="css/intlTelInput.css">
	<link rel="stylesheet" href="css/demo.css">
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
                        <a href="index.php" class="navbar-brand smooth-scroll"><img src="images/CO3kD4iU8AAnIAC_beta.png" alt="logo" /></a>
                        <!-- Image Logo For Background Transparent -->
                        <!--
                            <a href="#" class="navbar-brand logo-black smooth-scroll"><img src="images/logo-black.png" alt="logo" /></a>
                            <a href="#" class="navbar-brand logo-white smooth-scroll"><img src="images/logo-white.png" alt="logo" /></a> 
                        -->
                    </div><!-- /End Navbar Header -->

                    <div class="collapse navbar-collapse" id="navbar-collapse">
                    
                     <ul class="nav navbar-nav navbar-left" >
                        
                        

                            
                            
                            
                        </ul><!-- /End Menu Links -->
                        <!-- Menu Links -->
                        <ul class="nav navbar-nav navbar-right">
                           <!--  <li><a href="why.php" class="smooth-scroll">Why us?</a></li>-->
                            <li><a href="how.php" class="smooth-scroll">How it works </a></li>
                           <!-- <li><a href="fees.php" class="smooth-scroll">Fees </a></li>-->
                           <li><a href="faq.php" class="smooth-scroll"> Help ?</a></li>
                         
                            
    <!--                        
 <li><div class="btn-group translate">
    <a class=" dropdown-toggle" data-toggle="dropdown" href="#">
       <img src="images/flag/en-0e04cd30fe3fc62c64c74b7030bac905.svg" />
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="#"><img src="images/flag/fr-0c32dd66a5fc1b858deb251c34b59851.svg" /></a></li>
        <li><a href="#"><img src="images/flag/de-cd9a6f023a38abd56e1940d3f12e1bd5.svg" /></a></li>
    
    </ul>
</div></li>
-->




                          <?php if($customer_id == ""){ ?>

                            <li><a href="signup.php" class="btn-nav btn-green smooth-scroll">Sign up</a></li>
                            <li><a href="login.php" class="btn-nav btn-dark smooth-scroll">Log in</a></li>
                            
                          <?php }else{ ?>
                            
                                <li class="dropdown">
                                 <a id="dLabel" data-toggle="dropdown" data-target="#" href="#" style="text-transform: capitalize;">Welcome: <?php echo $username; ?> <span class="caret"></span></a>
                                   <ul class="dropdown-menu multi-level" role="menu">
                                      <li><a href="view_orders.php">Orders</a></li>
                                      <li><a href="account_config.php">My Account</a></li>
                                      <li><a href="index.php">Go To New Shop</a></li>
                                      <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                  </li>
                            <?php } ?>
                            
                            
                            
                            
               
                            <li><div style=" display: inline-block;margin-left: 10px;margin-top: 5px;"><a href="view_cart.php" class="smooth-scroll"> 
                            <img src="images/cart01.png" style="margin: 0px -8px -9px 0px;">
                            <span id="no_of_selected_item_in_cart" class="cart"></span></a> </div></li>
                            <li><div style=" display: inline-block;margin-left: 10px;margin-top: 5px;"><a href="view_cart.php" class="smooth-scroll">
                                              
                        
<?php
    $sqler = "SELECT GROUP_CONCAT(order_id SEPARATOR ', ') as order_id, sum(quantity) as quantity, customer_id, ip_address, product_id, date_time, random_rick FROM orders where random_rick != 'expire' and ip_address  = '$ip_address' GROUP BY product_id";
    $queryee = mysql_query($sqler) or die(mysql_error());
    while ($resulterr = mysql_fetch_array($queryee)) {
            $order_id = $resulterr[order_id];
            $product_idrt = $resulterr[product_id];
            $quantitywsss = $resulterr[quantity];
            $random_rick = $resulterr[random_rick];
            $date_time = $resulterr[date_time];

    $sqlerersingprty = "SELECT product_id, product_name,product_image,product_price_currency_id,product_prices from products where product_id = '$product_idrt'  GROUP BY product_id";
    $quereyeraignphj = mysql_query($sqlerersingprty) or die(mysql_error());
    while ($reseultersingptyy = mysql_fetch_array($quereyeraignphj)) {
        $product_idd = $reseultersingptyy['product_id'];
         $product_name = $reseultersingptyy['product_name'];
          $product_image = $reseultersingptyy['product_image'];
           $product_price_currency_id = $reseultersingptyy['product_price_currency_id'];
            $product_pricesee = $reseultersingptyy['product_prices'];
    }

$view_pricessws += $product_pricesee * $quantitywsss; 
$view_pricessws_value=$view_pricessws;
if($view_pricessws != "")
    $view_pricessws_value=$view_pricessws ;
else
    $view_pricessws_value="0";

}
?>  
<span>My cart <br/><span style="font-size:12px;"><?php $view_pricessws_value?>€</span></span> 
</a>
</div>
</li>
                           
                        </ul><!-- /End Menu Links -->
                    </div><!-- /End Navbar Collapse -->

                </div><!-- /End Container -->
            </nav><!-- /End Navbar -->
        </header>
        <!-- /End Header Section -->
        

   <script language="JavaScript">
function confirmation(){
    var sure = confirm("Are you sure you want to delete this record ?");
    if(!sure)
            return false;
    else
        return true;
}

var myVar = setInterval(function(){ cartupdate() }, 500);

function cartupdate() {
   var ipdata= "<?php echo $ip_address; ?>";
$.ajax({
url: 'get_no_of_selected_item.php',
type: "POST",
data: { ipaddress:ipdata},
cache: false,
success: function(data){ 
$('#no_of_selected_item_in_cart').text(data);
},
error: function(){ }             
});
}

</script>     
        
        

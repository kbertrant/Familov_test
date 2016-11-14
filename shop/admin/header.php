<?php 
include ('inc/dbConnect.inc.php');


	$sql78dss = "SELECT * from admin where id = 1";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
		$website_title = $resultddss['website_title'];
		$meta_keywards = $resultddss['meta_keywards'];
		$meta_desc = $resultddss['meta_desc'];
    }
	
	
	
	
	
	 function resizeImage($sourceImage, $targetImage, $maxWidth, $maxHeight, $quality = 80)
{
    // Obtain image from given source file.
    if (!$image = @imagecreatefromjpeg($sourceImage))
    {
        return false;
    }

    // Get dimensions of source image.
    list($origWidth, $origHeight) = getimagesize($sourceImage);

    if ($maxWidth == 0)
    {
        $maxWidth  = $origWidth;
    }

    if ($maxHeight == 0)
    {
        $maxHeight = $origHeight;
    }

    // Calculate ratio of desired maximum sizes and original sizes.
    $widthRatio = $maxWidth / $origWidth;
    $heightRatio = $maxHeight / $origHeight;

    // Ratio used for calculating new image dimensions.
    $ratio = min($widthRatio, $heightRatio);

    // Calculate new image dimensions.
    $newWidth  = (int)$origWidth  * $ratio;
    $newHeight = (int)$origHeight * $ratio;

    // Create final image with new dimensions.
    $newImage = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight);
    imagejpeg($newImage, $targetImage, $quality);

    // Free up the memory.
    imagedestroy($image);
    imagedestroy($newImage);

    return true;
}


function compress_image($source_url, $destination_url, $quality)
{
    $info = getimagesize($source_url);

    if ($info['mime'] == 'image/jpeg')
        $image = imagecreatefromjpeg($source_url);
    elseif ($info['mime'] == 'image/gif')
        $image = imagecreatefromgif($source_url);
    elseif ($info['mime'] == 'image/png')
        $image = imagecreatefrompng($source_url);

    imagejpeg($image, $destination_url, $quality);


    return $destination_url;
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

	<!-- Typeahead Styling  -->
    <link rel="stylesheet" href="assets/css/plugins/typeahead/typeahead.css" />
    
    <!-- TagsInput Styling  -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" />
    
    <!-- Chosen Select  -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-chosen/chosen.css" />
    
    <!-- DateTime Picker  -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css" />
    
    <!-- Switch Buttons  -->
    <link rel="stylesheet" href="assets/css/switch-buttons/switch-buttons.css" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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



<body>

	<aside class="left-panel">
    		
            <div class="user text-center">
                  <img src="assets/images/avtar/user.png" class="img-circle" alt="...">
                  <h4 class="user-name">Admin</h4>	 
				  
				    <div class="dropdown user-login">
                  <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-circle status-icon available"></i> Available <i class="fa fa-angle-down"></i>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" href="logout.php"><i class="fa fa-circle status-icon signout"></i> Sign out</a></li>
                  </ul>
                  </div>	 
				  
				  
            </div>
            
            
            
            <nav class="navigation">
            	<ul class="list-unstyled">
                	<li><a href="dashboard.php"><i class="fa fa-bookmark-o"></i><span class="nav-label">Dashboard</span></a></li>
					<li><a href="country.php"><i class="fa fa-file-text-o"></i><span class="nav-label">Country</span></a></li>
					<li><a href="city.php"><i class="fa fa-file-text-o"></i><span class="nav-label">City</span></a></li>
				
					
					
					<li><a href="shop.php"><i class="fa fa-file-text-o"></i> <span class="nav-label">Shops</span></a></li>
						<li><a href="category.php"><i class="fa fa-file-text-o"></i> <span class="nav-label">Categories</span></a></li>

					<li><a href="products.php"><i class="fa fa-file-text-o"></i> <span class="nav-label">Products</span></a></li>
					
					<li><a href="customers.php"><i class="fa fa-file-text-o"></i><span class="nav-label">Customers</span></a></li>
					<li><a href="orders.php"><i class="fa fa-file-text-o"></i><span class="nav-label">Orders</span></a></li>
					
						<li><a href="configuration.php"><i class="fa fa-file-text-o"></i><span class="nav-label">Configuration</span></a></li>

                </ul>
            </nav>
            
    </aside>
    
    <section class="content">
    	
        <header class="top-head container-fluid">
            <button type="button" class="navbar-toggle pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
		
           <!-- <form role="search" class="navbar-left app-search pull-left hidden-xs">
              <input type="text" placeholder="Search" class="form-control form-control-circle">
         	</form>-->
			
            
            <nav class=" navbar-default hidden-xs" role="navigation">
                <ul class="nav navbar-nav">
                <li><a href="#"><b style="color:#fff">FAMILOV ADMIN PANEL</b></a></li>
                <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Action <span class="caret"></span></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
		
            <ul class="nav-toolbar">
			
			
<?php		
$count_dishmenue1 = mysql_query("SELECT order_id from orders where random_rick = 'expire' and order_view = '0' group by generate_code limit 0, 3");
$num_dishmenusw = mysql_num_rows($count_dishmenue1);	

if($num_dishmenusw == 0){
	$num_dishmenusw1  = '0';
}else{
	$num_dishmenusw1  = $num_dishmenusw;
}
?>	
			
			
			
			
			
				<li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="badge bg-warning"><?php echo $num_dishmenusw1; ?></span></a>
                	<div class="dropdown-menu md arrow pull-right panel panel-default arrow-top-right messages-dropdown">
                        <div class="panel-heading">
                      	Orders
                        </div>
                        
                        <div class="list-group">
                            
						
	
<?php
	$sqlwer = "SELECT *, sum(quantity) as quantity, GROUP_CONCAT(product_id SEPARATOR ',') as product_id from orders where random_rick = 'expire' and order_view = '0' group by generate_code order by order_id desc limit 0, 3";
    $querysss = mysql_query($sqlwer) or die(mysql_error());
    while ($resultss = mysql_fetch_array($querysss)) {
	    $order_id = $resultss['order_id'];
		$customer_id = $resultss['customer_id'];	
$product_id = $resultss['product_id'];
$quantity = $resultss['quantity'];
$date_time = $resultss['date_time'];	
$date = date("F d, Y",strtotime($date_time));
$time = date("H:i:s A",strtotime($date_time));
$generate_code = $resultss['generate_code'];
$order_status = $resultss['order_status'];			
?>	
							
										


	
							
							
							
                            <a class="list-group-item">
                            <div class="media">
                              <div class="media-body">
							  
							  
	<?php
	$sqlss1 = "SELECT * from customers where customer_id = '$customer_id'";
    $quessry1 = mysql_query($sqlss1) or die(mysql_error());
    while ($sss = mysql_fetch_array($quessry1)) {
		$username = $sss['username'];	
$home_address = $sss['home_address'];			
$phone_number = $sss['phone_number'];			
		
?>								
					
	 <h5 class="media-heading">
	  <strong>ORDER CODE:  </strong>
	 <span style="color:#ee3682;"><?php echo $generate_code; ?></span><br />
	 <br />
	 <strong>Recipient Name:</strong> <?php echo $username; ?><br /><strong>Phone Number:</strong> <?php echo $phone_number; ?>	</h5>	
										
										
	<?php } ?>							  
							  
							  

                                <small class="text-muted"><?php echo $date; ?>, <?php echo $time; ?></small>
                              </div>
                            </div>
                            </a>
							
	<?php } ?>				
							
                            <a href="orders.php" class="btn btn-info btn-flat btn-block">View All Orders</a>

                        </div>
                        
                    </div>
                </li>
			<!--
                <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="badge">3</span></a>
                	<div class="dropdown-menu arrow pull-right md panel panel-default arrow-top-right notifications">
                        <div class="panel-heading">
                      	Notification
                        </div>
                        
                        <div class="list-group">
                            
                            <a href="#" class="list-group-item">
                            <p>Installing App v1.2.1<small class="pull-right text-muted">45% Done</small></p>
                            <div class="progress progress-xs no-margn progress-striped active">
                              <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                <span class="sr-only">45% Complete</span>
                              </div>
                            </div>
                            </a>
                            
                            <a href="#" class="list-group-item">
                            Fusce dapibus molestie tincidunt. Quisque facilisis libero eget justo iaculis
                            </a>
                            
                            <a href="#" class="list-group-item">
                            <p>Server Status</p>
                            <div class="progress progress-xs no-margn">
                              <div class="progress-bar progress-bar-success" style="width: 35%">
                                <span class="sr-only">35% Complete (success)</span>
                              </div>
                              <div class="progress-bar progress-bar-warning" style="width: 20%">
                                <span class="sr-only">20% Complete (warning)</span>
                              </div>
                              <div class="progress-bar progress-bar-danger" style="width: 10%">
                                <span class="sr-only">10% Complete (danger)</span>
                              </div>
                            </div>
                            </a>
                            
                            
                            
                            <a href="#" class="list-group-item">
                            <div class="media">
                              <span class="label label-danger media-object img-circle pull-left">Danger</span>
                              <div class="media-body">
                                <h5 class="media-heading">Lorem ipsum dolor sit consect..</h5>
                              </div>
                            </div>
                            </a>
                            
                            
                            <a href="#" class="list-group-item">
                            <p>Server Status</p>
                            <div class="progress progress-xs no-margn">
                              <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-info">
                                <span class="sr-only">60% Complete (warning)</span>
                              </div>
                            </div>
    						</a>
                            

                        </div>
                        
                    </div>
                </li>
				
                <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                	<div class="dropdown-menu lg pull-right arrow panel panel-default arrow-top-right">
                    	<div class="panel-heading">
                        	More Apps
                        </div>
                        <div class="panel-body text-center">
                        	<div class="row">
                            	<div class="col-xs-6 col-sm-4"><a href="#" class="text-green"><span class="h2"><i class="fa fa-envelope-o"></i></span><p class="text-gray no-margn">Messages</p></a></div>
                                <div class="col-xs-6 col-sm-4"><a href="#" class="text-purple"><span class="h2"><i class="fa fa-calendar-o"></i></span><p class="text-gray no-margn">Events</p></a></div>
                                
                                <div class="col-xs-12 visible-xs-block"><hr></div>
                                
                                <div class="col-xs-6 col-sm-4"><a href="#" class="text-red"><span class="h2"><i class="fa fa-comments-o"></i></span><p class="text-gray no-margn">Chatting</p></a></div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12  hidden-xs"><hr></div>
                            
                            	<div class="col-xs-6 col-sm-4"><a href="#" class="text-yellow"><span class="h2"><i class="fa fa-folder-open-o"></i></span><p class="text-gray">Folders</p></a></div>
                                
                                <div class="col-xs-12 visible-xs-block"><hr></div>
                                
                                <div class="col-xs-6 col-sm-4"><a href="#" class="text-primary"><span class="h2"><i class="fa fa-flag-o"></i></span><p class="text-gray">Task</p></a></div>
                                <div class="col-xs-6 col-sm-4"><a href="#" class="text-info"><span class="h2"><i class="fa fa-star-o"></i></span><p class="text-gray">Favorites</p></a></div>
                            </div>
                        </div>
                    </div>
                </li>
				-->
            </ul>
        </header>
        <!-- Header Ends -->
<?php 
include ('inc/dbConnect.inc.php');


	$sql78dss = "SELECT * from admin where id = 1";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
		$website_title = $resultddss['website_title'];
		$meta_keywards = $resultddss['meta_keywards'];
		$meta_desc = $resultddss['meta_desc'];
    }
	

	?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $website_title; ?></title>
<meta name="description" content="<?php echo $meta_desc; ?>">
<meta name="keywords" content="<?php echo $meta_keywards; ?>">

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="css/plugins/timeline/timeline.css" rel="stylesheet">
	 <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
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

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php"><?php echo $website_title; ?> [ Admin Panel ]</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php"><i class="fa fa-files-o fa-fw"></i> Dashboard</a>
                        </li>
                     
					 


						 <li>
                            <a href="country.php"><i class="fa fa-files-o fa-fw"></i> Country List</a>
                        </li>

						 <li>
                            <a href="city.php"><i class="fa fa-files-o fa-fw"></i> City List</a>
                        </li>
						
			
						
						
						
				<!--		
						 <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Pages<span class="fa arrow"></span></a>
							
							
							
							  <ul class="nav nav-second-level">

							  
							  
								  <li>
                                    <a href="home_page.php">Home</a>
                                </li>
								
								
								 <li>
                                    <a href="career.php">Career</a>
                                </li>

								
                            </ul>
							
							
							
                        </li>
						

								<li>
                                    <a href="availability.php"><i class="fa fa-files-o fa-fw"></i> Availability</a>
                                </li>
		
		
	
						 <li>
                            <a href="whychooseus.php"><i class="fa fa-files-o fa-fw"></i> Why choose us?</a>
                        </li>
						
						
						 <li>
                            <a href="about_us.php"><i class="fa fa-files-o fa-fw"></i> About Us</a>
                        </li>
						
						
						 <li>
                            <a href="faqs.php"><i class="fa fa-files-o fa-fw"></i> Faq's</a>
                        </li>
						

						

						
						
						  <li>
                            <a href="orders.php"><i class="fa fa-files-o fa-fw"></i> Orders</a>
                        </li>
						
						-->
						
						  <li>
                            <a href="configuration.php"><i class="fa fa-files-o fa-fw"></i> Configuration</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
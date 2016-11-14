<?php include("header.php"); ?>


<?php



$country_id = $_GET['country_id'];
$city_id = $_GET['city_id'];
$shop_id = $_GET['shop_id'];

?>


<?php

if($country_id != "" && $city_id != "" && $shop_id != ""){
	$sqler = "SELECT * from shops where shop_id = '$shop_id' and country_id='$country_id' and city_id='$city_id'";
}else{
	$sqler = "SELECT * from shops where shop_id = '$shop_id' and country_id='$country_id' and city_id='$city_id'";
}
	
	
    $querey = mysql_query($sqler) or die(mysql_error());
    while ($reseult = mysql_fetch_array($querey)) {
	    $shop_name = $reseult['shop_name'];
		$shop_address = $reseult['shop_address'];		
		$shop_logo = $reseult['shop_logo'];	
		$shop_banner = $reseult['shop_banner'];	
	}		
?>	





        <!-- =========================
            PAGE HEADER
        ============================== -->
				<?php if($shop_banner != "") { ?>
                        <section class="page-head bg-img p-y-md" style="background-image:url('admin/shop_images/<?php echo $shop_banner; ?>')">
				 <?php }else{ ?>
						 <section class="page-head bg-img p-y-md" style="background-image:url('images/default-banner.png')">
				 <?php } ?>
				 
				 
				 
       
            <!-- <div class="overlay"></div> -->
            <div class="container">
                <div class="row c2 h-bg">
				 <div class="col-sm-4">
				 
				 
				 
				 <?php if($shop_logo != "") { ?>
                        <img src="admin/shop_images/<?php echo $shop_logo; ?>" style="width:60%;"/>
				 <?php }else{ ?>
						<img src="images/default-logo.png" style="width:60%;"/>
				 <?php } ?>
                    </div>
					
                    <div class="col-sm-4">
                       <center> <h1 class="h3 f-w-900 m-b-0" style="text-transform:uppercase; text-decoration: underline;"><?php echo $shop_name; ?></h1>
					   <br />
						 <p class="small" style="font-weight: bold; width:50%;"><?php echo $shop_address; ?></p></center>
                    </div>
					
					 <div class="col-sm-4">
                        
                    </div>
					
					
                </div>
            </div>
        </section>
        <!-- /End Page Header -->


        <!-- =========================
           BLOG SECTION
        ============================== -->
        <section class="p-y-md">
            <div class="container">
                <div class="row">
				
				
				
				
				


		
				
                    <div class="col-md-3">


                        <!--comments widget-->
                        <div class="widget">
                            <div class="w-title">
                                <h5>Categories</h5>
                            </div>
                            <ul class="w-comments">
							
	

<?php if($country_id != "" && $city_id != "" && $shop_id != ""){ ?>
<li><a href="product.php?country_id=<?php echo $country_id; ?>&city_id=<?php echo $city_id; ?>&shop_id=<?php echo $shop_id; ?>">All</a></li>	
<?php }else{ ?>
<li><a href="product.php">All</a></li>
<?php } ?>

	
							
<?php	

	$sql78categ = "SELECT distinct ep.category_id, ep.category_name FROM categories ep 
left JOIN products u
ON ep.category_id=u.category_id
where u.shop_id = '$shop_id'
order by ep.category_name asc
";


    $queryecateg = mysql_query($sql78categ) or die(mysql_error());
    while ($resusltdcateg = mysql_fetch_array($queryecateg)) {
		$category_name = $resusltdcateg['category_name'];
		$category_id = $resusltdcateg['category_id'];
  

?>					








<?php

$result=mysql_query("SELECT count(*) as total  from products where category_id = '$category_id' and shop_id = '$shop_id'");
$data=mysql_fetch_assoc($result);

?>

                                <li><span id="view_categ_<?php echo $category_id; ?>" style="cursor:pointer;"><?php echo $category_name; ?></span> (<?php echo $data['total']; ?>)</li>
				
	<?php } ?>								
								
								
                            </ul>
                        </div>
                        <!--comments widget-->
                        
                        <img src="images/flat5.png" width="100px" alt="">

                    </div>
					
					
					
					
                    <div class="col-md-9">
					<div id="view_cart_text123" style="color:#4D9500;"></div>
					<center><div id="preview24"></div></center>
					<div id="view_products_total"></div>
					
					
				

                    </div>

                    


                </div>
            </div>
        </section>
        <!-- /End Blog Section -->

    		<?php include("footer.php"); ?>	
			
			
			


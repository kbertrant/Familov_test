<?php include("header.php");
require_once "../localization.php"?>


<?php

$country_id = $_GET['country_id'];
$city_id = $_GET['city_id'];
$shop_id = $_GET['shop_id'];

?>


<?php


	$sqler = "SELECT * from shops where shop_id = '$shop_id'";
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
						 <p class="small" style="font-weight: bold;"><?php echo $shop_address; ?></p></center>
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

 <li><a href="product.php?country_id=<?php echo $country_id; ?>&city_id=<?php echo $city_id; ?>&shop_id=<?php echo $shop_id; ?>&category_id=<?php echo $category_id; ?>"><span id="view_categ_<?php echo $category_id; ?>" style="cursor:pointer;"><?php echo $category_name; ?></span></a> (<?php echo $data['total']; ?>)</li>
				
	<?php } ?>								
								
								
                            </ul>
                        </div>
                        <!--comments widget-->

                    </div>
					
					





	
	

                    <div class="col-md-9">
					
										
				
<?php 
$product = $_GET['product']; 
?>							
<?php	
	$sqlerer = "SELECT * from products where md5(product_id) = '$product'";
    $quereyer = mysql_query($sqlerer) or die(mysql_error());
    while ($reseulter = mysql_fetch_array($quereyer)) {
	    $category_id = $reseulter['category_id'];
		 $product_id = $reseulter['product_id'];
		$product_name = $reseulter['product_name'];		
		$product_image = $reseulter['product_image'];	
		$product_price_currency_id = $reseulter['product_price_currency_id'];	
		$product_prices = $reseulter['product_prices'];	
		$product_short_desc = $reseulter['product_short_desc'];	
		$product_desc = $reseulter['product_desc'];	
	}
?>						
	
<?php	
	$sql78categ = "SELECT * from categories where category_id = '$category_id'";
    $queryecateg = mysql_query($sql78categ) or die(mysql_error());
    while ($resusltdcateg = mysql_fetch_array($queryecateg)) {
		$category_name = $resusltdcateg['category_name'];
	}
?>	







	
		 <h5 style="text-transform:uppercase;"><a href="product.php?country_id=<?php echo $country_id; ?>&city_id=<?php echo $city_id; ?>&shop_id=<?php echo $shop_id; ?>"><span style="color:#ee3682;text-decoration: underline;">BACK</span></a> - <?php echo $category_name; ?> - <?php echo $product_name; ?></h5>
					

			
			<br /><br />
					
					
					  <div class="col-md-5">
                        <div class="widget">
						    <div style="background-image:url('admin/product_images/<?php echo $product_image; ?>'); background-size: cover; height:350px;"></div>
                        </div>
                    </div>
					
					
					
					 <div class="col-md-7">
                        <div class="widget">
						
						
						<div id="view_cart_text_<?php echo $product_id; ?>" style="color:green;"></div>
						
						
						
						
						  <p><?php echo $product_short_desc; ?></p>
							   <p style="font-weight:bold;">Price:   <?php echo str_replace('.', ',',number_format($product_prices,2)); ?>€</p>
							   
			
			
		<div>				   
		<span id="minus" style="cursor:pointer;"><i class="fa fa-minus"></i></span>
		<input type="text" id="quantity" name="quantity" disabled class="form-control view_quty_<?php echo $product_id; ?>" value="1" style="width: 15%; text-align:center; display:inline-block;"/>
		<span id="plus" style="cursor:pointer;"><i class="fa fa-plus"></i></span>
		</div>					   
							   
							   
							   
							   <span class="btn btn-orange m-t" id="add_cart_<?php echo $product_id; ?>"> Add to cart</span>
							   
							   
							   <div id="preview245_<?php echo $product_id; ?>"></div>
							
                        </div>
                    </div>
					
					
					
					  <div class="col-md-12">
					
					<?php echo $product_desc; ?>
					
					</div>
					

                    </div>

                    


                </div>
            </div>
        </section>
        <!-- /End Blog Section -->

    		<?php include("footer.php"); ?>	
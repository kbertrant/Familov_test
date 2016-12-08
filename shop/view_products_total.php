<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
require_once "../localization.php";
$shop_id = isset($_SESSION['shop_id']);

$category_id = isset($_POST['category_id']);


$shop_id = $_POST['shop_id'];
$country_id = $_POST['country_id'];
$city_id = $_POST['city_id'];


if($country_id != "" && $city_id != "" && $shop_id != "" && $country_id != "undefined" && $city_id != "undefined" && $shop_id != "undefined"){
	$shop_id = $_POST['shop_id'];
}

?>



	  <div class="row">
					 <div class="col-md-12">
<?php

if($category_id != ""){

if($country_id != "" && $city_id != "" && $shop_id != "" && $country_id != "undefined" && $city_id != "undefined" && $shop_id != "undefined"){
	$result1=mysql_query("SELECT count(*) as total  from products where shop_id = '$shop_id' and category_id = '$category_id'");
}else{
	$result1=mysql_query("SELECT count(*) as total  from products where shop_id = '$shop_id' and category_id = '$category_id'");
}


$data1=mysql_fetch_assoc($result1);
echo $data1['total'] . " Products"; 
}else{
	
if($country_id != "" && $city_id != "" && $shop_id != "" && $country_id != "undefined" && $city_id != "undefined" && $shop_id != "undefined"){
	$result1=mysql_query("SELECT count(*) as total  from products where shop_id = '$shop_id'");
}else{
	$result1=mysql_query("SELECT count(*) as total  from products where shop_id = '$shop_id'");
}
$data1=mysql_fetch_assoc($result1);
echo $data1['total'] . " Products"; 
}
?>					

					</div>
					</div>
					<br />
					
<?php if( $data1['total'] != 0){ ?>		

<?php
if($category_id != ""){ 

if($country_id != "" && $city_id != "" && $shop_id != "" && $country_id != "undefined" && $city_id != "undefined" && $shop_id != "undefined"){
	$sqlerer = "SELECT * from products where shop_id = '$shop_id' and category_id = '$category_id' order by product_id desc";
}else{
	$sqlerer = "SELECT * from products where shop_id = '$shop_id' and category_id = '$category_id' order by product_id desc";
}
    $quereyer = mysql_query($sqlerer) or die(mysql_error());
}else{

if($country_id != "" && $city_id != "" && $shop_id != "" && $country_id != "undefined" && $city_id != "undefined" && $shop_id != "undefined"){
	$sqlerer = "SELECT * from products where shop_id = '$shop_id' order by product_id desc";
}else{
	$sqlerer = "SELECT * from products where shop_id = '$shop_id' order by product_id desc";
}
    $quereyer = mysql_query($sqlerer) or die(mysql_error());
}
	
    while ($reseulter = mysql_fetch_array($quereyer)) {
	    $product_id = $reseulter['product_id'];
		$product_name = $reseulter['product_name'];		
		$product_image = $reseulter['product_image'];	
		$product_price_currency_id = $reseulter['product_price_currency_id'];	
		$product_prices = $reseulter['product_prices'];			
?>		


		

					  <div class="col-md-4">
                        <div class="widget">
						
						<?php if($country_id != "" && $city_id != "" && $shop_id != "" && $country_id != "undefined" && $city_id != "undefined" && $shop_id != "undefined"){ ?>
                           <a href="product_detail.php?product=<?php echo md5($product_id); ?>&country_id=<?php echo $country_id; ?>&city_id=<?php echo $city_id; ?>&shop_id=<?php echo $shop_id; ?>">
						<?php }else{ ?>
							 <a href="product_detail.php?product=<?php echo md5($product_id); ?>">
						<?php } ?>
						   
						   <div style="background-image:url('admin/product_images/<?php echo $product_image; ?>'); background-size: cover; height:250px;"></div>
						   
						   </a>
						   <br />
						   <div style="text-align:center;">
							   <p>
							   
							 	<?php if($country_id != "" && $city_id != "" && $shop_id != "" && $country_id != "undefined" && $city_id != "undefined" && $shop_id != "undefined"){ ?>
                           <a href="product_detail.php?product=<?php echo md5($product_id); ?>&country_id=<?php echo $country_id; ?>&city_id=<?php echo $city_id; ?>&shop_id=<?php echo $shop_id; ?>">
						<?php }else{ ?>
							 <a href="product_detail.php?product=<?php echo md5($product_id); ?>">
						<?php } ?>
						
							   <?php echo $product_name; ?></a><br /><?php echo gettext("Actual Price:");?> <?php echo $product_prices; ?>€</p>
					
							   <span class="btn btn-orange m-t" id="add_cart123_<?php echo $product_id; ?>"><?php echo gettext(" Add to cart");?></span>
							   
							   
							    <div id="preview245_<?php echo $product_id; ?>"></div>
							   
							   
							 </div>	
                        </div>
                    </div>
		






<input type="hidden" id="product_id_<?php echo $product_id; ?>" name="product_id_<?php echo $product_id; ?>" value="<?php echo $product_id; ?>">	

<script type="text/javascript">
jQuery(document).ready(function()
{

jQuery('#add_cart123_<?php echo $product_id; ?>').click(function(){
jQuery("#preview245_<?php echo $product_id; ?>").html('<img src="loading.gif" alt="Uploading...."/>');
var product_id=jQuery('#product_id_<?php echo $product_id; ?>').val();
			var userdata= "product_id="+product_id;
		var shop_id="<?php echo	$shop_id; ?>";
		var country_id="<?php echo	$country_id; ?>";
		var city_id="<?php echo	$city_id; ?>";
			jQuery.ajax({
				type:"post",
				data:{ product_id:product_id, shop_id:shop_id, country_id:country_id, city_id:city_id},
				url:"insert_cart1.php",
				cache:false,
				success:function(msg){
						jQuery('#view_cart_text123').html(msg);	
						jQuery("#preview245_<?php echo $product_id; ?>").html('');
				}
	});	

});
});
</script>


	
	<?php } ?>
	
	
	
<?php }else{ ?>


<center><?php echo gettext("No products were found matching your selection.");?></center>
	
<?php } ?>
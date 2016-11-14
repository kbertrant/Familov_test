<?php include("header.php"); ?>

        <!-- =========================
            LOGIN SECTION
        ============================== -->
        <section id="login" class=" p-y-lg bg-color">
           <div class="container" style="background: rgba(255,255,255,0.80);">
                <div class="row">
					<div class="col-md-1">&nbsp;</div>
                   <div class="col-md-10">
                        <h3 class="m-t-lg m-b-0 text-left center-md">My cart</h3>
						<br />
						
						
						
						
<?php
$count_dishmenue1 = mysql_query("SELECT GROUP_CONCAT(order_id SEPARATOR ', ') as order_id, sum(quantity) as quantity, customer_id, ip_address, product_id, date_time, random_rick FROM orders where random_rick != 'expire' and ip_address  = '$ip_address' GROUP BY product_id");
$num_dishmenusw = mysql_num_rows($count_dishmenue1);	

if($num_dishmenusw != 0){ ?>



						<div class="table-responsive">
                        <table class="table">
						
						<tr>
						<td><strong>Image</strong></td>
						<td><strong>Product</strong></td>
						<td><strong><center>Price</center></strong></td>
						<td><strong><center>Quantity</center></strong></td>
						<td><strong><center>Total</center></strong></td>
						<td><strong><center>Action</center></strong></td>
						</tr>
		

		
<?php
	$sql = "SELECT GROUP_CONCAT(order_id SEPARATOR ', ') as order_id, sum(quantity) as quantity, customer_id, ip_address, product_id, date_time, random_rick FROM orders where random_rick != 'expire' and ip_address  = '$ip_address' GROUP BY product_id";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
			$order_id = $result[order_id];
			$product_id = $result[product_id];
			$quantity = $result[quantity];
			$random_rick = $result[random_rick];
			$date_time = $result[date_time];
?>						
		
<?php $view_quantity += $quantity; ?>
		
				<?php
	$sqlerersingp = "SELECT product_id, product_name,product_image,product_price_currency_id,product_prices from products where product_id = '$product_id'  GROUP BY product_id";
    $quereyeraignp = mysql_query($sqlerersingp) or die(mysql_error());
    while ($reseultersingp = mysql_fetch_array($quereyeraignp)) {
	    $product_idd = $reseultersingp['product_id'];
		 $product_name = $reseultersingp['product_name'];
		  $product_image = $reseultersingp['product_image'];
		   $product_price_currency_id = $reseultersingp['product_price_currency_id'];
		    $product_prices = str_replace(',', '.', $reseultersingp['product_prices']);
	}
?>	


<?php $view_prices += $product_prices * $quantity; ?>




				
		<?php
	$sqlerersingcateg = "SELECT * from categories where category_id = '$category_id'";
    $quereyeraigncet = mysql_query($sqlerersingcateg) or die(mysql_error());
    while ($reseultersingcar = mysql_fetch_array($quereyeraigncet)) {
	    $category_name = $reseultersingcar['category_name'];
	}
?>	


		
						
						<tr>
						<td><div style="background-image:url('admin/product_images/<?php echo $product_image; ?>'); background-size: cover; height:100px; width:100px;"></div></td>
						<td><?php echo $product_name; ?></td>						
						<td><?php echo $product_prices; ?>€</td>
						<td>

						<center>					
						
		<span id="minus1_<?php echo $product_id; ?>" style="cursor:pointer;"><i class="fa fa-minus"></i></span>
		<input type="text" id="cart_quantity_<?php echo $product_id; ?>" name="cart_quantity_<?php echo $product_id; ?>" disabled class="form-control" value="<?php echo $quantity; ?>" style="width: 20%; text-align:center; display:inline-block;"/>
		<span id="plus1_<?php echo $product_id; ?>" style="cursor:pointer;"><i class="fa fa-plus"></i></span>
						
						
			</center>	
						
						
						</td>
						<td><center>  <?php echo str_replace('.', ',',number_format($product_prices * $quantity,2)); ?>€</center></td>
						<td><center><a onclick="return confirmation()" href="delete.php?order_id=<?php echo $order_id; ?>"><i class="fa fa-trash-o"></a></center></td>
						</tr>
						
						
						
<?php } ?>						
						
						
						<tr>
						<td>Sub-Total:</td>
						<td></td>
						<td></td>
						<td><center><b><?php  echo $view_quantity; ?></b></center></td>
						<td><center><?php echo str_replace('.', ',',number_format($view_prices,2)); ?>€</center></td>
						<td></td>

						</tr>
						
						
						<tr>
						<td colspan="3">Service charges:</td>
						<td></td>
						<td><center><?php  echo str_replace('.', ',',number_format((2.95),2)); ?>€</center></td>
						<td></td>
						</tr>
						
						<tr>
						<td><b> TOTAL: </b></td>
						<td></td>
						<td></td>
						<td></td>
						<td><center><strong id="grandprice" style="color:#000;"><?php  echo str_replace('.', ',',number_format($view_prices + (2.95),2)); ?>€</strong></center></td>
						<td></td>
						</tr>
						
						
						
						
<?php
$sqlere = "SELECT GROUP_CONCAT(order_id SEPARATOR ', ') as order_id, sum(quantity) as quantity, customer_id, ip_address, product_id, date_time, random_rick,country_id,city_id,shop_id FROM orders where random_rick != 'expire' and ip_address  = '$ip_address' GROUP BY product_id";
$subjects_namet = mysql_query($sqlere);
$num_rows = mysql_num_rows($subjects_namet);
if($num_rows != 0){ 
	$orderResults = mysql_fetch_array($subjects_namet);
	$country_id=$orderResults['country_id'];
	$city_id=$orderResults['city_id'];
	$shop_id=$orderResults['shop_id'];
	$conShopLink='product.php?country_id='.$country_id.'&city_id='.$city_id.'&shop_id='.$shop_id;
?>	
						
						
						<tr>
						<td></td>
						<td></td>
						<td></td>
						<td style="width:300px"><center><br /><a id="checkout_conShop" href="<?php echo $conShopLink; ?>" class="btn btn-green">Continue to shopping</a></center></td>
						<td><center><br/><a id="checkout" href="checkout.php" class="btn btn-green">Checkout</a></center></td>
						<td></td>
						</tr>
<?php } ?>				
						
						</table>
						</div>
						
						
<?php }else{ ?>					
	<div style=" font-size: 30px;
    font-weight: lighter;">Your cart is actually empty</div><br /><br />
	<a class="checkout_btn" href="index.php">Continue to shopping</a>
<?php } ?>	
						
                    </div>
					<div class="col-md-1">&nbsp;</div>
                </div>
            </div>
        </section>
        <!-- /End Login Section -->

  		<?php include("footer.php"); ?>	
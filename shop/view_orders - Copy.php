<?php include("header.php"); ?>

        <!-- =========================
            LOGIN SECTION
        ============================== -->
        <section id="login" class="login p-y-lg bg-color">
            <div class="container">
                <div class="row">
					<div class="col-md-1">&nbsp;</div>
                   <div class="col-md-10">
                        <h4 class="m-t-lg m-b-0 text-left center-md">Orders</h4>
						<br />
						
						<div class="table-responsive">
                        <table class="table">
						
						<tr>
						
						<td><strong>Order Code</strong></td>
						<td><strong>Product</strong></td>
						<td><strong><center>Price</center></strong></td>
						<td><strong><center>Quantity</center></strong></td>
						<td><strong><center>Total</center></strong></td>
						<td><strong><center>Date Time</center></strong></td>
						<td><strong><center>Status</center></strong></td>
						</tr>
		

							
							<?php
	$sql = "SELECT *, sum(quantity) as quantity, GROUP_CONCAT(product_id SEPARATOR ',') as product_id from orders where random_rick = 'expire' and customer_id = '$customer_id' and ip_address = '$ip_address' group by generate_code order by order_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	    $order_id = $result['order_id'];
		$customer_id = $result['customer_id'];	
$product_id = $result['product_id'];
$quantity = $result['quantity'];
$date_time = $result['date_time'];	
$date = date("F d, Y",strtotime($date_time));
$time = date("H:i:s",strtotime($date_time));
$generate_code = $result['generate_code'];
$order_status = $result['order_status'];			
?>	

						
 <tr>
<td><span style="color:#ee3682;"><?php echo $generate_code; ?></span></td>	
<td>	
<?php
	$sql1 = "SELECT * from products where product_id IN($product_id)";
    $query1 = mysql_query($sql1) or die(mysql_error());
    while ($result1 = mysql_fetch_array($query1)) {
		$product_name = $result1['product_name'] . "<br />";	
		$product_prices = $result1['product_prices'];				
?>	

 <?php echo $product_name; ?>

<?php } ?>	


</td>	


<td>


<?php
	$sql12 = "SELECT product_prices from products where product_id IN($product_id)";
    $query12 = mysql_query($sql12) or die(mysql_error());
    while ($result12 = mysql_fetch_array($query12)) {
$product_prices1 = $result12['product_prices'] . "<br />";		
	
?>	

<center><?php echo number_format($product_prices1); ?>€</center>

<?php } ?>	



<?php
	$sql1212 = "SELECT sum(product_prices) as product_prices_each_total from products where product_id IN($product_id)";
    $query12ss = mysql_query($sql1212) or die(mysql_error());
    while ($result12s = mysql_fetch_array($query12ss)) {	
	$product_prices_each_total = $result12s['product_prices_each_total'];
	}	
?>	

Total: <span style="color:#ee3682;text-decoration: underline;"><?php echo number_format($product_prices_each_total, 2, '.', ','); ?>€</span>

</td>							
										
<?php 		$my_view = $product_prices * $quantity; ?>						
										
									
										<td><!--<center><?php echo $quantity; ?></center>-->
										
										
								
	<?php
	$sql1or = "SELECT sum(quantity) as quantity from orders where random_rick = 'expire' and customer_id = '$customer_id' and ip_address = '$ip_address'and product_id IN($product_id) and  generate_code = '$generate_code' group by product_id";
    $query1or = mysql_query($sql1or) or die(mysql_error());
    while ($result1or = mysql_fetch_array($query1or)) {
		$quantity = $result1or['quantity'] . "<br />";
?>



<center><?php echo $quantity; ?></center>

<?php		
	}		
?>										
		
		
	<?php
	$sql1212r = "SELECT sum(quantity) as quantity_each_total from orders where random_rick = 'expire' and customer_id = '$customer_id' and ip_address = '$ip_address'and product_id IN($product_id) and  generate_code = '$generate_code'";
    $query12ssr = mysql_query($sql1212r) or die(mysql_error());
    while ($result12sr = mysql_fetch_array($query12ssr)) {	
	$quantity_each_total = $result12sr['quantity_each_total'];
	}	
?>	

Total: <span style="color:#ee3682;text-decoration: underline;"><?php echo $quantity_each_total; ?></span>
									
										
<?php $my_totalling = $product_prices_each_total * 	$quantity_each_total; ?>
										
										
										
										</td>
										
										<td><center><?php echo number_format($my_totalling, 2, '.', ','); ?>€</center></td>
										<td><center><?php echo $date_time; ?></center></td>
										<td><center>
										
										<?php if($order_status == 'Wait'){ ?>
										<span style="color:orange; font-weight:bold;"><?php echo $order_status; ?></span>
										<?php } ?>
										<?php if($order_status == 'Buy'){ ?>
										<span style="color:green; font-weight:bold;"><?php echo $order_status; ?></span>
										<?php } ?>
										<?php if($order_status == 'Deliveret'){ ?>
										<span style="color:black; font-weight:bold;"><?php echo $order_status; ?></span>
										<?php } ?>
										
										
										</center></td>
											 
                                        </tr>
										
										
	<?php } ?>
			
						
						</table>
						</div>
                    </div>
					<div class="col-md-1">&nbsp;</div>
                </div>
            </div>
        </section>
        <!-- /End Login Section -->

  		<?php include("footer.php"); ?>	
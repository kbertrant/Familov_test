<?php include("header.php");
require_once "../localization.php"?>

 <section id="hero12" class="hero hero-countdown bg-img" ">
                    <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 text-center">
                                    <h1 class="text-white"><?php echo gettext("Order History");?></h1>
                                   
                                    
                                    <!--<a href="#pricing6-1" class="btn btn-shadow btn-green btn-lg smooth-scroll m-b-md">RESERVE YOUR SEAT</a>-->
                                </div>
                                <div class="col-md-6 col-md-offset-3 text-white text-center">
                                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae alias perspiciatis nisi expedita reprehenderi. Sariatur asperiores adipisci et, sint incidunt.</p>-->
                                </div>
                        </div> 
                    </div> 
        </section>

        <!-- =========================
            LOGIN SECTION
        ============================== -->
        <section id="login" class=" p-y-lg bg-color">
            <div class="container">
                <div class="row">
					<div class="col-md-1">&nbsp;</div>
                   <div class="col-md-10">
                        <h4 class="m-t-lg m-b-0 text-left center-md"><?php echo gettext("Orders");?></h4>
						<br />
						
						<div class="table-responsive">
                        <table class="table">
						
						<tr>
						
						<td><strong><?php echo gettext("Order Code");?></strong></td>
						<td><strong><?php echo gettext("Product");?></strong></td>
						<td><strong><center><?php echo gettext("Price");?></center></strong></td>
						<td><strong><center>Total</center></strong></td>
						<td><strong><center>Grand Total</center></strong></td>
						<td><strong><center><?php echo gettext("Date Time");?></center></strong></td>
						<td><strong><center>Status</center></strong></td>
						</tr>
		

							
							<?php
	$sql = "SELECT *, sum(quantity) as quantity, GROUP_CONCAT(product_id SEPARATOR ',') as product_id from orders where random_rick = 'expire' and customer_id = '$customer_id'  group by generate_code order by order_id desc";
	/*$sql = "SELECT *, sum(quantity) as quantity, GROUP_CONCAT(product_id SEPARATOR ',') as product_id from orders where random_rick = 'expire' and customer_id = '$customer_id' and ip_address = '$ip_address' group by generate_code order by order_id desc";*/
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	    $order_id = $result['order_id'];
		$customer_id = $result['customer_id'];	
$product_id = $result['product_id'];
$quantity = $result['quantity'];
$date_time = $result['date_time'];	
$date = date("F d, Y",strtotime($date_time));
$time = date("H:i:s A",strtotime($date_time));
$generate_code = $result['generate_code'];
$order_status = $result['order_status'];
$recp_name = $result1['recp_name'];
?>	

						
 <tr>
<td>	<span style="color:#ee3682;"> <b>Code</b> : <?php echo $generate_code; ?></span>	<br />		
								</td>	
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
	$sql12 = "SELECT product_prices,product_id from products where product_id IN($product_id)";
	
    $query12 = mysql_query($sql12) or die(mysql_error());
    while ($result12 = mysql_fetch_array($query12)) {
$product_prices1 = $result12['product_prices'];		
$product_ids = $result12['product_id'];			
?>	

								
	<?php
	$sql1or = "SELECT sum(quantity) as quantity from orders where product_id = '$product_ids' and  generate_code = '$generate_code' group by product_id";
	
    $query1or = mysql_query($sql1or) or die(mysql_error());
    while ($result1or = mysql_fetch_array($query1or)) {
		$quantity = $result1or['quantity'];
?>


<center><?php echo number_format($product_prices1); ?>€ X <?php echo $quantity; ?><br /></center>

<?php } ?>	

<?php } ?>	



</td>							




<td>


<?php
	$sql12er = "SELECT product_prices,product_id from products where product_id IN($product_id)";
	
    $query1ss2 = mysql_query($sql12er) or die(mysql_error());
    while ($resultss12 = mysql_fetch_array($query1ss2)) {
$product_prices1er = $resultss12['product_prices'];		
$product_idss = $resultss12['product_id'];			
?>	

								
	<?php
	$sql1oraa = "SELECT sum(quantity) as quantity from orders where product_id = '$product_idss' and  generate_code = '$generate_code' group by product_id";
	
    $query1ssor = mysql_query($sql1oraa) or die(mysql_error());
    while ($result1ossr = mysql_fetch_array($query1ssor)) {
		$quantitys = $result1ossr['quantity'];
?>


<center><?php echo number_format($product_prices1er * $quantitys); ?>€<br /></center>

<?php } ?>	

<?php } ?>	



</td>	


<td>
										
										
	


								
	<?php
	$sql1oaaraa = "SELECT sum(quantity * p.product_prices) as product_prices  from orders ord inner JOIN products p 
ON ord.product_id=p.product_id where ord.product_id IN($product_id) and ord.generate_code = '$generate_code'";

    $querssy1ssor = mysql_query($sql1oaaraa) or die(mysql_error());
    while ($result1bbossr = mysql_fetch_array($querssy1ssor)) {
	$product_pricesdd = $result1bbossr['product_prices'];
?>
<?php } ?>	

<?php $my_totalling = $product_pricesdd + 3; ?>
Subtotal: <span ><?php echo number_format($product_pricesdd, 2, '.', ','); ?>€</span><br />
<?php echo gettext("Fees: ");?><span>3€</span><br />
<span style="font-weight:bold;">Total: <?php echo number_format($my_totalling, 2, '.', ','); ?>€</span>


									
										
										
										
										
										
										
										
										
										
										
										
										
										
								<!--		
										
										<center><?php echo number_format($my_totalling, 2, '.', ','); ?>€ + 3€
										<br />
										<?php echo number_format($my_totalling + 2, 2, '.', ','); ?>€
										</center>
									-->	
										
										
										
										</td>
										<td><center><?php echo $date; ?><br /><?php echo $time; ?></center></td>
										<td><center>
										
										<?php if($order_status == 'Wait'){ ?>
										<span style="color:orange; font-weight:bold;"><?php echo $order_status; ?></span>
										<?php } ?>
										<?php if($order_status == 'Buy'){ ?>
										<span style="color:green; font-weight:bold;"><?php echo $order_status; ?></span>
										<?php } ?>
										<?php if($order_status == 'Delivered'){ ?>
										<span style="color:black; font-weight:bold;"><?php echo $order_status; ?></span>
										<?php } ?>
										<?php if($order_status == 'Cancel'){ ?>
										<span style="color:red; font-weight:bold;"><?php echo $order_status; ?></span>
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
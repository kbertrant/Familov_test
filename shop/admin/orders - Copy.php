<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

?>

		  <div class="warper container-fluid">
        	
            <div class="page-header"><h3>Orders <small>Information</small></h3></div>
			
			
			
			
			        <div class="panel panel-default">
                    <div class="panel-heading">Orders</div>
                    <div class="panel-body">
                    
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th>Username</th>
									 <th>Product</th>
									  <th>Price</th>
									  <th>Quantity</th>
									   <th>Total</th>
									   <th>Date Time</th>
                                </tr>
                            </thead>
                            <tbody>
							
							<?php
	$sql = "SELECT *, sum(quantity) as quantity, GROUP_CONCAT(product_id SEPARATOR ',') as product_id from orders where random_rick = 'expire' group by generate_code order by order_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	    $order_id = $result['order_id'];
		$customer_id = $result['customer_id'];	
$product_id = $result['product_id'];
$quantity = $result['quantity'];
$date_time = $result['date_time'];		
?>	

 <tr class="odd gradeX">
										<td>
										
										
										
										
<?php
	$sql1 = "SELECT * from customers where customer_id = '$customer_id'";
    $query1 = mysql_query($sql1) or die(mysql_error());
    while ($result1 = mysql_fetch_array($query1)) {
		$username = $result1['username'];			
?>								
										
							<?php echo $username; ?>			
										
										
	<?php } ?>									
										
										
										
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
€<?php echo $product_prices; ?>
</td>							
										
<?php 		$my_view = $product_prices * $quantity; ?>						
										
									
										<td><?php echo $quantity; ?></td>
										
										<td>€<?php echo $my_view; ?></td>
										<td><?php echo $date_time; ?></td>
											
											 
                                        </tr>
										
										
	<?php } ?>
	

                            </tbody>
                        </table>

                    </div>
                </div>
				
				
            </div>

<?php include ('footer.php'); ?>
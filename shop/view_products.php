<?php include("header.php"); ?>

        <!-- =========================
            LOGIN SECTION
        ============================== -->
        <section id="login" class="login p-y-lg bg-color">
            <div class="container">
                <div class="row">
					<div class="col-md-1">&nbsp;</div>
                   <div class="col-md-10">
                        <h4 class="m-t-lg m-b-0 text-left center-md">My Products</h4>
						<br />
						
						<div class="table-responsive">
                        <table class="table">
						
						<tr>
						<td><strong>Image</strong></td>
						<td><strong>Product</strong></td>
						<td><strong>Category</strong></td>
						<td><strong>Price</strong></td>
						<td><strong>Action</strong></td>
						</tr>
						
<?php
	$sql = "SELECT * FROM products where customer_id  = '$customer_id' ORDER BY product_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
			$product_id = $result[product_id];
			$category_id = $result[category_id];
			$product_name = $result[product_name];
			$product_short_desc = $result[product_short_desc];
			$product_image = $result[product_image];
			$product_price_currency_id = $result[product_price_currency_id];
			$product_prices = $result[product_prices];
?>						
		

				
		<?php
	$sqlerersing = "SELECT * from product_price_currency where product_price_currency_id = '$product_price_currency_id'";
    $quereyeraign = mysql_query($sqlerersing) or die(mysql_error());
    while ($reseultersing = mysql_fetch_array($quereyeraign)) {
	    $product_price_currency_sign = $reseultersing['product_price_currency_sign'];
	}
?>	


				
		<?php
	$sqlerersingcateg = "SELECT * from categories where category_id = '$category_id'";
    $quereyeraigncet = mysql_query($sqlerersingcateg) or die(mysql_error());
    while ($reseultersingcar = mysql_fetch_array($quereyeraigncet)) {
	    $category_name = $reseultersingcar['category_name'];
	}
?>	


		
						
						<tr>
						<td><div style="background-image:url('products/<?php echo $product_image; ?>'); background-size: cover; height:200px; width:200px;"></div></td>
						<td><?php echo $product_name; ?></td>
						<td><?php echo $category_name; ?></td>
						<td><?php echo $product_price_currency_sign; ?><?php echo $product_prices; ?></td>
						<td><a href="add_product.php?product_id=<?php echo $product_id; ?>">Edit</a> - <a onclick="return confirmation()" href="delete.php?product_id=<?php echo $product_id; ?>">Delete</a></td>
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
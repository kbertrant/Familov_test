<?php include("header.php"); ?>



<?php
/*
	$sql_shop = "SELECT * from customers where customer_id = '$customer_id'";
    $query_shop = mysql_query($sql_shop) or die(mysql_error());
    while ($resuslt_shop = mysql_fetch_array($query_shop)) {
		$shop_name = $resuslt_shop['shop_name'];
		$shop_address = $resuslt_shop['shop_address'];
		$shop_logo = $resuslt_shop['shop_logo'];
		$shop_banner = $resuslt_shop['shop_banner'];
    }
*/
	
?>



        <!-- =========================
            LOGIN SECTION
        ============================== -->
        <section id="login" class="login p-y-lg bg-color">
            <div class="container">
                <div class="row">
					<div class="col-md-1">&nbsp;</div>
                   <div class="col-md-10">
                        <h4 class="m-t-lg m-b-0 text-left center-md">My Categories</h4>
						<br />
						
						<div class="table-responsive">
                        <table class="table">
						
						<tr>
						<td><strong>Category</strong></td>
						<td><strong>Action</strong></td>
						</tr>
						
<?php
	$sql = "SELECT * FROM categories where customer_id  = '$customer_id' ORDER BY category_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
			$category_id = $result[category_id];
			$category_name = $result[category_name];
	
?>						
						
						
						<tr>
						<td><?php echo $category_name; ?></td>
						<td><a href="add_category.php?category_id=<?php echo $category_id; ?>">Edit</a> - <a onclick="return confirmation()" href="delete.php?category_id=<?php echo $category_id; ?>">Delete</a></td>
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
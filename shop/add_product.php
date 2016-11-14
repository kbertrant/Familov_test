<?php include("header.php"); ?>



<?php
$product_id = $_GET['product_id'];
if($product_id != ""){ 
	$sql_rt = "SELECT * from products where product_id = '$product_id'";
    $query_er = mysql_query($sql_rt) or die(mysql_error());
    while ($resuslt_et = mysql_fetch_array($query_er)) {
		$category_id = $resuslt_et['category_id'];
		$product_name = $resuslt_et['product_name'];
		$product_short_desc = $resuslt_et['product_short_desc'];
		$product_desc = $resuslt_et['product_desc'];
		$product_image = $resuslt_et['product_image'];
		$product_price_currency_id = $resuslt_et['product_price_currency_id'];
		$product_prices = $resuslt_et['product_prices'];
    }
}
	
?>



        <!-- =========================
            LOGIN SECTION
        ============================== -->
        <section id="login" class="login p-y-lg bg-color">
            <div class="container">
			
			  <div class="row">
                   <div class="col-md-12">
                        <h4 class="m-t-lg m-b-0 text-left center-md">Add New Product</h4>
						<br />
					</div>	
				</div>	
			
                <div class="row">
                   <div class="col-md-6">
    
                        <div class="form-horizontal" role="form">
						<input type="hidden" id="product_id" name="product_id" value="<?php echo $product_id; ?>">
                            <div class="form-group">
                                <label for="sfEmail">Product Name</label>
                                <input type="email" class="form-control" id="product_name" name="product_name" value="<?php echo $product_name; ?>" placeholder="Enter your new product name" required>
                            </div>
							
							
							 <div class="form-group">
                                <label for="sfEmail">Product Category</label>
<select name="category_id" id="category_id" class="form-control" required>
<option style="padding:4px;" value="" selected="selected">Select a Category</option>
<?php
$query_disp="SELECT * FROM categories where customer_id = '$customer_id' ORDER BY category_name asc";
$result_disp = mysql_query($query_disp);
while($query_data = mysql_fetch_array($result_disp))
{
?>
<option style="padding:4px;" value="<?php echo $query_data["category_id"]; ?>"<?php if ($query_data["category_id"]==$category_id) {?> selected="selected"<?php } ?>><?php echo $query_data["category_name"]; ?></option>
<?php } ?>
</select>
                            </div>
							
							
				

							 <div class="form-group">
							  <div class="row">
							 <div class="col-md-4">
							 
                                <label for="sfEmail">Currency Type</label>
<select name="product_price_currency_id" id="product_price_currency_id" class="form-control" required>
<option style="padding:4px;" value="" selected="selected">Select</option>
<?php
$query_disp="SELECT * FROM product_price_currency";
$result_disp = mysql_query($query_disp);
while($query_data = mysql_fetch_array($result_disp))
{
?>
<option style="padding:4px;" value="<?php echo $query_data["product_price_currency_id"]; ?>"<?php if ($query_data["product_price_currency_id"]==$product_price_currency_id) {?> selected="selected"<?php } ?>><?php echo $query_data["product_price_currency_sign"]; ?></option>
<?php } ?>
</select>

</div>


 <div class="col-md-8">
							 
<label for="sfEmail">Price</label>

 <input type="email" class="form-control" id="product_prices" name="product_prices" value="<?php echo $product_prices; ?>" placeholder="Enter your product price" required>
</div>



 </div>
                            </div>
							


							
				

       
							<div class="form-group">
                                <label for="sfPassword">Product Image</label>
<form id="imageform2" method="post" enctype="multipart/form-data" action='product_image.php'>
<input type="file" class="form-control" name="product_image_temp" id="product_image_temp" />
</form>

<div id='preview2'></div>




                            </div>
							
							
							
							

  <div class="form-group">
                                <label for="sfPassword">Product Short Description</label>
                                 <textarea type="email" class="form-control" id="product_short_desc" name="product_short_desc" placeholder="Enter your Product Short Description" required><?php echo $product_short_desc; ?></textarea>
                            </div>
					
					
							
							
							
                         
                        </div>
                    </div>
					
					<div class="col-md-6">
					
					
					    
					
					
					 
             <div class="form-group">
                               <label for="sfPassword">Product Description</label>
                                 <textarea type="email" class="form-control" id="product_desc" name="product_desc" rows="10" placeholder="Enter your Product Description" required><?php echo $product_desc; ?></textarea>
                            </div>



<script>
CKEDITOR.config.height = 380;			
CKEDITOR.replace( 'product_desc', {
	toolbar: [
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Source', '-',  'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
		{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
		{ name: 'colors', items: [ 'TextColor', 'BGColor' ] }
	]
});
		</script>	
					
					
					
					
					
					</div>
                </div>
				
				
				
				
				  <div class="row">
                   <div class="col-md-12">
                          <div class="form-group">
								<button type="submit"  onclick="add_product()" class="btn btn-blue">ADD</button>
                            </div>
					</div>	
				</div>	
				
				
				
				
            </div>
        </section>
        <!-- /End Login Section -->

  		<?php include("footer.php"); ?>	
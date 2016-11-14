<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$product_id = $_GET['product_id'];
if($product_id != ""){
	$sql78dss = "SELECT * from products where product_id = $product_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $product_id = $resultddss['product_id'];
		$category_id = $resultddss['category_id'];
		$product_name = $resultddss['product_name'];
		  $product_short_desc = $resultddss['product_short_desc'];
		$product_desc = $resultddss['product_desc'];
		$product_image = $resultddss['product_image'];
		  $product_prices = $resultddss['product_prices'];
		   $shop_id = $resultddss['shop_id'];

		
    }
	
}

?>




    <?php
		 if($_POST['submit']) {
    $product_id = trim($_POST['product_id']);
	$category_id = trim($_POST['category_id']);
	$product_name = trim($_POST['product_name']);
	$product_short_desc = trim($_POST['product_short_desc']);
	$product_desc = trim($_POST['product_desc']);
	$product_image = trim($_POST['product_image']);
	$product_prices = trim($_POST['product_prices']);
	$shop_id = trim($_POST['shop_id']);
	
	
	
	
		$path = "product_images/";
        $filename = $_FILES['product_image']['tmp_name'];
        $name = $_FILES['product_image']['name'];
        $size = $_FILES['product_image']['size'];



            list($txt, $ext) = explode(".", $name);
                    $actual_image_name = str_replace(" ", "_", $txt) . "_" . time() . "." . $ext;
                    $tmp = $_FILES['product_image']['tmp_name'];
					
					
						
				if (move_uploaded_file($tmp, $path . $actual_image_name)) {
                        move_uploaded_file($tmp, $path . $actual_image_name);
                        $source_photo = $path . $actual_image_name;
                        $dest_photo = "product_images/" . $actual_image_name;
						resizeImage("product_images/".$actual_image_name, "product_images/".$actual_image_name, 0, 0);
					}
					
					
					
					
					
					
	
  $resultchecking = mysql_query("select product_id from products where product_id = '$product_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

		
		
		
		

	
	
	if($filename != ""){
	
	$insertintotable = ("UPDATE products SET category_id='$category_id',product_name='$product_name',product_short_desc='$product_short_desc',product_desc='$product_desc',product_image='$actual_image_name',product_prices='$product_prices',shop_id='$shop_id' WHERE product_id='$product_id'");
	
	
}else{
	
	$insertintotable = ("UPDATE products SET category_id='$category_id',product_name='$product_name',product_short_desc='$product_short_desc',product_desc='$product_desc',product_prices='$product_prices',shop_id='$shop_id' WHERE product_id='$product_id'");
	
}

	
	
	
	
	
	
		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Update Successfully </div>';
    } else {
    }
	
	
	
	
	
	
		}else{


$insertintotable = "insert into products(category_id,product_name,product_short_desc,product_desc,product_image,product_prices,shop_id) values('$category_id','$product_name','$product_short_desc','$product_desc','$actual_image_name','$product_prices','$shop_id')";
if (mysql_query($insertintotable)) {
$message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Insert Successfully </div>';
}

		
		}
		}

	
	}
		?>
		
		
		
	










	
		
		
		
		  <div class="warper container-fluid">
        	
            <div class="page-header"><h3>Product <small>Information</small></h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
				<?php echo $message; ?>	
                 	<div class="panel panel-default">
                        <div class="panel-body">
                        	

							
							
							
							
							 		<form class="form-horizontal" role="form" name="contact" action="products.php" method="post"  enctype="multipart/form-data">
                            
														<input type="hidden" id="product_id" name="product_id" value="<?php echo $product_id; ?>">	
                            
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Product Name</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-flat"  id="product_name" name="product_name" value="<?php echo $product_name; ?>" placeholder="Enter your product name" required>
                                    </div>
                                  </div>
                                  
								  
								  
								  
								    <hr class="dotted">
								   
								   
								   
								     <div class="form-group">
                                    <label class="col-sm-2 control-label">Category</label>
                                    <div class="col-sm-7">
                                     <select class="form-control chosen-select" name="category_id" id="category_id" data-placeholder="Choose a Category">
                                      	  <option></option>
                                      <?php
$query_disp="SELECT * FROM categories ORDER BY category_name asc";
$result_disp = mysql_query($query_disp);
while($query_data = mysql_fetch_array($result_disp))
{
?>
<option style="padding:4px;" value="<?php echo $query_data["category_id"]; ?>"<?php if ($query_data["category_id"]==$category_id) {?> selected="selected"<?php } ?>><?php echo $query_data["category_name"]; ?></option>
<?php } ?>
                                      </select>
                                    </div>
                                  </div>
								  
								  
								  
								  
								     <hr class="dotted">
								    <div class="form-group">
                                    <label class="col-sm-2 control-label">Product Short Description</label>
                                    <div class="col-sm-7">
									<textarea class="form-control form-control-flat"  id="product_short_desc" name="product_short_desc" placeholder="Enter your product short description" rows="5" cols="10" required><?php echo $product_short_desc; ?></textarea>
                                    </div>
                                  </div>

								  
								    <hr class="dotted">
								    <div class="form-group">
                                    <label class="col-sm-2 control-label">Product Description</label>
                                    <div class="col-sm-7">
									<textarea class="form-control form-control-flat"  id="product_desc" name="product_desc" placeholder="Enter your product description" rows="10" cols="10" required><?php echo $product_desc; ?></textarea>
                                    </div>
                                  </div>
								  
																	  <script>
CKEDITOR.config.height = 300;			
CKEDITOR.replace( 'product_desc', {
	toolbar: [
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Source', '-',  'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'Undo', 'Redo' ] },
		{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
		{ name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
		{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
		{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
		{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] }
	]
});
		</script>		  
								  	  
								  <hr class="dotted">
								    <div class="form-group">
                                    <label class="col-sm-2 control-label">Product Image</label>
                                    <div class="col-sm-7">
									
									
																					
										<?php if($product_image != ""){ ?>
										
										<img src="product_images/<?php echo $product_image; ?>" width="150"/><br />
										<a href="delete.php?delete_product_image=<?php echo $product_id; ?>">DELETE</a>
										<br /><br />
										
										<?php }else{ ?>
											 <input type="file" id="product_image" name="product_image" class="form-control form-control-flat" required>
										<?php } ?>

                                    </div>
                                  </div>
								  
								  
								  
								  
								  
								     <div class="form-group">
                                    <label class="col-sm-2 control-label">Product Price</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-flat"  id="product_prices" name="product_prices" value="<?php echo $product_prices; ?>" placeholder="Enter your product price" required>
                                    </div>
                                  </div>
                                  
								  
								  
								   <hr class="dotted">
								   
								   
								   
								     <div class="form-group">
                                    <label class="col-sm-2 control-label">Shop</label>
                                    <div class="col-sm-7">
                                     <select class="form-control chosen-select" name="shop_id" id="shop_id" data-placeholder="Choose a Shop">
                                      	  <option></option>
                                      <?php
$query_disp="SELECT * FROM shops ORDER BY shop_name asc";
$result_disp = mysql_query($query_disp);
while($query_data = mysql_fetch_array($result_disp))
{
?>
<option style="padding:4px;" value="<?php echo $query_data["shop_id"]; ?>"<?php if ($query_data["shop_id"]==$shop_id) {?> selected="selected"<?php } ?>><?php echo $query_data["shop_name"]; ?></option>
<?php } ?>
                                      </select>
                                    </div>
                                  </div>
								  
								  
								
								  	  <hr class="dotted">
								    <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-7">
                                      <input type="submit" name="submit" class="btn btn-default" value="Submit"/>	
                                    </div>
                                  </div>
								  
								  

                                  </div>
  
                     
                              
                        	</form>
				
                        </div>
                    </div>
                 </div>
            
			
			
			
			
			
			
			
			
			
			
			        <div class="panel panel-default">
                    <div class="panel-heading">Products</div>
                    <div class="panel-body">
                    
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                            <thead>
                                <tr>
											<th>Image</th>
											<th>Name</th>
											<th>Category</th>
											<th>Price</th>
											<th>Shop</th>
                                            <th>Edit / Delete</th>
                                </tr>
                            </thead>
							
							
							
							
							    <tbody>
									
<?php
	$sql = "SELECT * from products order by product_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
         $product_id = $result['product_id'];
		$category_id = $result['category_id'];
		$product_name = $result['product_name'];
		  $product_short_desc = $result['product_short_desc'];
		$product_desc = $result['product_desc'];
		$product_image = $result['product_image'];
		  $product_prices = $result['product_prices'];
		   $shop_id = $result['shop_id'];
		  
		  
		  
		  
?>									

                                        <tr class="odd gradeX">
										<td><?php if($product_image != ""){ ?><img src="product_images/<?php echo $product_image; ?>" width="100"/><?php }else { echo "No Image"; }?></td>
										<td><?php echo $product_name; ?></td>
									<td>
										
										
										
										
<?php
	$sql1 = "SELECT * from categories where category_id = '$category_id'";
    $query1 = mysql_query($sql1) or die(mysql_error());
    while ($result1 = mysql_fetch_array($query1)) {
		$category_name = $result1['category_name'];			
?>								
										
							<?php echo $category_name; ?>			
										
										
	<?php } ?>									
										
										
										
										</td>
										<td>€<?php echo $product_prices; ?></td>

										<td><?php
	$sql12 = "SELECT * from shops where shop_id = '$shop_id'";
    $query12 = mysql_query($sql12) or die(mysql_error());
    while ($result12 = mysql_fetch_array($query12)) {
		$shop_name = $result12['shop_name'];			
?>								
										
							<?php echo $shop_name; ?>			
										
										
	<?php } ?>	</td>
			
                                            <td><a href="products.php?product_id=<?php echo $product_id; ?>">Edit</a> / <a onclick="return confirmation()" href="delete.php?product_id=<?php echo $product_id; ?>">Delete</a></td>
											
											 
                                        </tr>
										
										
	<?php } ?>
                                    </tbody>
									
									
									
									
									
									

                        </table>

                    </div>
                </div>
				
				
            </div>






<?php include ('footer.php'); ?>
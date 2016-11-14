<?php include("header.php"); ?>



<?php
$category_id = $_GET['category_id'];
if($category_id != ""){ 
	$sql_rt = "SELECT * from categories where category_id = '$category_id'";
    $query_er = mysql_query($sql_rt) or die(mysql_error());
    while ($resuslt_et = mysql_fetch_array($query_er)) {
		$category_name = $resuslt_et['category_name'];
    }
}
	
?>



        <!-- =========================
            LOGIN SECTION
        ============================== -->
        <section id="login" class="login p-y-lg bg-color">
            <div class="container">
                <div class="row">
					<div class="col-md-3">&nbsp;</div>
                   <div class="col-md-6">
                        <h4 class="m-t-lg m-b-0 text-left center-md">Add New Category</h4>
						<br />
                        <div class="form-horizontal" role="form">
						<input type="hidden" id="category_id" name="category_id" value="<?php echo $category_id; ?>">
                            <div class="form-group">
                                <label for="sfEmail">Category Name</label>
                                <input type="email" class="form-control" id="category_name" name="category_name" value="<?php echo $category_name; ?>" placeholder="Enter your new category name" required>
                            </div>
							
                            <div class="form-group">
								<button type="submit"  onclick="add_Category()" class="btn btn-blue">ADD</button>
                            </div>
                        </div>
                    </div>
					<div class="col-md-3">&nbsp;</div>
                </div>
            </div>
        </section>
        <!-- /End Login Section -->

  		<?php include("footer.php"); ?>	
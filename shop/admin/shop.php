<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$shop_id = $_GET['shop_id'];
if($shop_id != ""){
	$sql78dss = "SELECT * from shops where shop_id = $shop_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $shop_id = $resultddss['shop_id'];
		$shop_name = $resultddss['shop_name'];
		$shop_address = $resultddss['shop_address'];
		  $shop_logo = $resultddss['shop_logo'];
		$shop_banner = $resultddss['shop_banner'];
		$city_id = $resultddss['city_id'];
		  $country_id = $resultddss['country_id'];

		
    }
	
}

?>




    <?php
		 if($_POST['submit']) {
    $shop_id = trim($_POST['shop_id']);
	$shop_name = trim($_POST['shop_name']);
	$shop_address = trim($_POST['shop_address']);
	  $shop_logo = trim($_POST['shop_logo']);
	$shop_banner = trim($_POST['shop_banner']);
	$city_id = trim($_POST['city_id']);
	$country_id = trim($_POST['country_id']);


	
		$path = "shop_images/";
        $filename = $_FILES['shop_logo']['tmp_name'];
		$filename1 = $_FILES['shop_banner']['tmp_name'];
		
	


	if($filename != ""){
	  $name = $_FILES['shop_logo']['name'];
        $size = $_FILES['shop_logo']['size'];
            list($txt, $ext) = explode(".", $name);
                    $actual_image_name = str_replace(" ", "_", $txt) . "_" . time() . "." . $ext;
                    $tmp = $_FILES['shop_logo']['tmp_name'];
				if (move_uploaded_file($tmp, $path . $actual_image_name)) {
                        move_uploaded_file($tmp, $path . $actual_image_name);
                        $source_photo = $path . $actual_image_name;
                        $dest_photo = "shop_images/" . $actual_image_name;
						resizeImage("shop_images/".$actual_image_name, "shop_images/".$actual_image_name, 0, 0);
					}
		}
	
	
	
	
	

	if($filename1 != ""){
	$name = $_FILES['shop_banner']['name'];
        $size = $_FILES['shop_banner']['size'];
            list($txt, $ext) = explode(".", $name);
                    $actual_image_name1 = str_replace(" ", "_", $txt) . "_" . time() . "." . $ext;
                    $tmp = $_FILES['shop_banner']['tmp_name'];
				if (move_uploaded_file($tmp, $path . $actual_image_name1)) {
                        move_uploaded_file($tmp, $path . $actual_image_name1);
                        $source_photo = $path . $actual_image_name1;
                        $dest_photo = "shop_images/" . $actual_image_name1;
						resizeImage("shop_images/".$actual_image_name1, "shop_images/".$actual_image_name1, 0, 0);
					}
	}
	
		
      
					
					
	


					
					
					
					
					
  $resultchecking = mysql_query("select shop_id from shops where shop_id = '$shop_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

		
		
		
		
		
if($filename != ""){
	
	$insertintotable = ("UPDATE shops SET shop_name='$shop_name',shop_address='$shop_address',shop_logo='$actual_image_name',city_id='$city_id',country_id='$country_id' WHERE shop_id='$shop_id'");
	
	
}else if($filename1 != ""){
	
	$insertintotable = ("UPDATE shops SET shop_name='$shop_name',shop_address='$shop_address',shop_banner='$actual_image_name1',city_id='$city_id',country_id='$country_id' WHERE shop_id='$shop_id'");
	
}if($filename != "" && $filename1 != ""){
	
	$insertintotable = ("UPDATE shops SET shop_name='$shop_name',shop_address='$shop_address',shop_logo='$actual_image_name',shop_banner='$actual_image_name1',city_id='$city_id',country_id='$country_id' WHERE shop_id='$shop_id'");
	
}else{
	
	$insertintotable = ("UPDATE shops SET shop_name='$shop_name',shop_address='$shop_address',city_id='$city_id',country_id='$country_id' WHERE shop_id='$shop_id'");
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


$insertintotable = "insert into shops(shop_name,shop_address,shop_logo,shop_banner,city_id,country_id) values('$shop_name','$shop_address','$actual_image_name','$actual_image_name1','$city_id','$country_id')";
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
        	
            <div class="page-header"><h3>Shop <small>Information</small></h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
				<?php echo $message; ?>	
                 	<div class="panel panel-default">
                        <div class="panel-body">
                        	

							
							
							
							
							 		<form class="form-horizontal" role="form" name="contact" action="shop.php" method="post"  enctype="multipart/form-data">
                            
														<input type="hidden" id="shop_id" name="shop_id" value="<?php echo $shop_id; ?>">	
                            
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Shop Name</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control form-control-flat"  id="shop_name" name="shop_name" value="<?php echo $shop_name; ?>" placeholder="Enter your shop name" required>
                                    </div>
                                  </div>
                                  
								  
								     <hr class="dotted">
								    <div class="form-group">
                                    <label class="col-sm-2 control-label">Shop Address</label>
                                    <div class="col-sm-7">
									<textarea class="form-control form-control-flat"  id="shop_address" name="shop_address" placeholder="Enter your shop address" rows="5" cols="10" required><?php echo $shop_address; ?></textarea>
                                    </div>
                                  </div>

								  
								   <hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Country</label>
                                    <div class="col-sm-7">
                                     <select class="form-control chosen-select" name="country_id" id="country_id" data-placeholder="Choose a Country">
                                      	  <option></option>
                                      <?php
$query_disp="SELECT * FROM country ORDER BY country_name asc";
$result_disp = mysql_query($query_disp);
while($query_data = mysql_fetch_array($result_disp))
{
?>
<option style="padding:4px;" value="<?php echo $query_data["country_id"]; ?>"<?php if ($query_data["country_id"]==$country_id) {?> selected="selected"<?php } ?>><?php echo $query_data["country_name"]; ?></option>
<?php } ?>
                                      </select>
                                    </div>
                                  </div>
								  
								
								<hr class="dotted">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">City</label>
                                    <div class="col-sm-7">
                                        <select class="form-control chosen-select" name="city_id" id="city_id" data-placeholder="Choose a City">
                                      	  <option></option>
                                      <?php
$query_disp="SELECT * FROM city ORDER BY city_name asc";
$result_disp = mysql_query($query_disp);
while($query_data = mysql_fetch_array($result_disp))
{
?>
<option style="padding:4px;" value="<?php echo $query_data["city_id"]; ?>"<?php if ($query_data["city_id"]==$city_id) {?> selected="selected"<?php } ?>><?php echo $query_data["city_name"]; ?></option>
<?php } ?>
                                      </select>
                                    </div>
                                  </div>								
								  
								  
								  
								  
							<hr class="dotted">
								    <div class="form-group">
                                    <label class="col-sm-2 control-label">Shop Logo</label>
                                    <div class="col-sm-7">
									
									
																					
										<?php if($shop_logo != ""){ ?>
										
										<img src="shop_images/<?php echo $shop_logo; ?>" width="250"/><br />
										<a href="delete.php?delete_shop_logo=<?php echo $shop_id; ?>">DELETE</a>
										<br /><br />
										
										<?php }else{ ?>
											 <input type="file" id="shop_logo" name="shop_logo" class="form-control form-control-flat" required>
										<?php } ?>

                                    </div>
                                  </div>
								  
								  
								  
								  
								  
							<hr class="dotted">
								    <div class="form-group">
                                    <label class="col-sm-2 control-label">Shop Banner</label>
                                    <div class="col-sm-7">
									
									
																					
										<?php if($shop_banner != ""){ ?>
										
										<img src="shop_images/<?php echo $shop_banner; ?>" width="800"/><br />
										<a href="delete.php?delete_shop_banner=<?php echo $shop_id; ?>">DELETE</a>
										<br /><br />
										
										<?php }else{ ?>
											 <input type="file" id="shop_banner" name="shop_banner" class="form-control form-control-flat" required>
										<?php } ?>

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
                    <div class="panel-heading">Shops</div>
                    <div class="panel-body">
                    
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                            <thead>
                                <tr>
											<th>Logo/Banner</th>
											<th>Name</th>
											<th>Country</th>
											<th>City</th>
											<th>Address</th>
                                            <th>Edit / Delete</th>
                                </tr>
                            </thead>
							
							
							
							
							    <tbody>
									
<?php
	$sql = "SELECT * from shops order by shop_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
        $shop_id = $result['shop_id'];
		$shop_name = $result['shop_name'];
		$shop_address = $result['shop_address'];
		$city_id = $result['city_id'];
		$country_id = $result['country_id'];	

		$shop_logo = $result['shop_logo'];
		$shop_banner = $result['shop_banner'];

		
?>									

                                        <tr class="odd gradeX">
	<td>
	
	<?php if($shop_logo != ""){ ?><img src="shop_images/<?php echo $shop_logo; ?>" width="100"/><?php }else { echo "No Logo Image"; }?>
	
	<br />
	
	<?php if($shop_banner != ""){ ?><img src="shop_images/<?php echo $shop_banner; ?>" width="100"/><?php }else { echo "No Banner Image"; }?>
	
	</td>
	
	
	

										
										<td><?php echo $shop_name; ?></td>
										<td>
										
										
										
										
<?php
	$sql1 = "SELECT * from country where country_id = '$country_id'";
    $query1 = mysql_query($sql1) or die(mysql_error());
    while ($result1 = mysql_fetch_array($query1)) {
		$country_name = $result1['country_name'];			
?>								
										
							<?php echo $country_name; ?>			
										
										
	<?php } ?>									
										
										
										
										</td>
										<td><?php
	$sql12 = "SELECT * from city where city_id = '$city_id'";
    $query12 = mysql_query($sql12) or die(mysql_error());
    while ($result12 = mysql_fetch_array($query12)) {
		$city_name = $result12['city_name'];			
?>								
										
							<?php echo $city_name; ?>			
										
										
	<?php } ?>	</td>
										<td><?php echo $shop_address; ?></td>
                                            <td><a href="shop.php?shop_id=<?php echo $shop_id; ?>">Edit</a> / <a onclick="return confirmation()" href="delete.php?shop_id=<?php echo $shop_id; ?>">Delete</a></td>
											
											 
                                        </tr>
										
										
	<?php } ?>
                                    </tbody>
									
									
									
									
									
									

                        </table>

                    </div>
                </div>
				
				
            </div>






<?php include ('footer.php'); ?>
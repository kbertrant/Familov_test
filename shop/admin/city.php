<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$city_id = $_GET['city_id'];
if($city_id != ""){
	$sql78dss = "SELECT * from city where city_id = $city_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $city_id = $resultddss['city_id'];
		$country_id = $resultddss['country_id'];
		$city_name = $resultddss['city_name'];
		
    }
	
}

?>




    <?php
		 if($_POST['submit']) {
    $city_id = trim($_POST['city_id']);
	$city_name = trim($_POST['city_name']);
	$country_id = trim($_POST['country_id']);

  $resultchecking = mysql_query("select city_id from city where city_id = '$city_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

	$insertintotable = ("UPDATE city SET city_name='$city_name',country_id='$country_id' WHERE city_id='$city_id'");
		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Update Successfully </div>';
    } else {
    }
		}else{


$insertintotable = "insert into city(city_name,country_id) values('$city_name','$country_id')";
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
        	
            <div class="page-header"><h3>City <small>Information</small></h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
				<?php echo $message; ?>	
                 	<div class="panel panel-default">
                        <div class="panel-body">
                        	

							<form class="form-horizontal" role="form" name="contact" action="city.php" method="post"  enctype="multipart/form-data">
                            
			

								
	
                                  <div class="form-group">




                                    <label class="col-sm-2 control-label">Country</label>
                                    <div class="col-sm-7">
											<input name="city_id" type="hidden" id="city_id" value="<?php echo $city_id; ?>">	
		


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
                                  

								  
										
										
		
										
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">City Name</label>
                                    <div class="col-sm-7">
									  	<input name="city_id" type="hidden" id="city_id" value="<?php echo $city_id; ?>">	
                                            <input class="form-control form-control-flat" id="city_name" name="city_name"  placeholder="Enter City Name" value="<?php echo $city_name; ?>" required>
											
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
                    <div class="panel-heading">Cities</div>
                    <div class="panel-body">
                    
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                            <thead>
                                <tr>
                                  <th>Country</th>
											<th>City</th>
                                            <th>Edit / Delete</th>
                                </tr>
                            </thead>
							
							
							
							
							    <tbody>
									
<?php
	$sql = "SELECT * from city order by city_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	    $city_id = $result['city_id'];
		$country_id = $result['country_id'];		
		$city_name = $result['city_name'];			
?>									

                                        <tr class="odd gradeX">
										
										
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
										<td><?php echo $city_name; ?></td>
                                            <td><a href="city.php?city_id=<?php echo $city_id; ?>">Edit</a> / <a onclick="return confirmation()" href="delete.php?city_id=<?php echo $city_id; ?>">Delete</a></td>
											
											 
                                        </tr>
										
										
	<?php } ?>
                                    </tbody>
									
									
									
									
									
									

                        </table>

                    </div>
                </div>
				
				
            </div>






<?php include ('footer.php'); ?>
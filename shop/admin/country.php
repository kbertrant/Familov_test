<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$country_id = $_GET['country_id'];
if($country_id != ""){
	$sql78dss = "SELECT * from country where country_id = $country_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $country_id = $resultddss['country_id'];
		$country_name = $resultddss['country_name'];
		
		
    }
	
}

?>




    <?php
		 if($_POST['submit']) {
    $country_id = trim($_POST['country_id']);
	$country_name = trim($_POST['country_name']);

  $resultchecking = mysql_query("select country_id from country where country_id = '$country_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

	$insertintotable = ("UPDATE country SET country_name='$country_name' WHERE country_id='$country_id'");
		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Update Successfully </div>';
    } else {
    }
		}else{


$insertintotable = "insert into country(country_name) values('$country_name')";
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
        	
            <div class="page-header"><h3>Country <small>Information</small></h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
				<?php echo $message; ?>	
                 	<div class="panel panel-default">
                        <div class="panel-body">
                        	

							<form class="form-horizontal" role="form" name="contact" action="country.php" method="post"  enctype="multipart/form-data">
                            
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Country Name</label>
                                    <div class="col-sm-7">
									  	<input name="country_id" type="hidden" id="country_id" value="<?php echo $country_id; ?>">	
                                            <input class="form-control form-control-flat" id="country_name" name="country_name"  placeholder="Enter Country Name" value="<?php echo $country_name; ?>" required>
											
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
                    <div class="panel-heading">Countries</div>
                    <div class="panel-body">
                    
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th>Country Name</th>
                                    <th>Edit / Delete</th>
                                </tr>
                            </thead>
                            <tbody>
							
							<?php
	$sql = "SELECT * from country order by country_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	    $country_id = $result['country_id'];
		$country_name = $result['country_name'];			
?>	

 <tr class="odd gradeX">
										<td><?php echo $country_name; ?></td>
                                            <td><a href="country.php?country_id=<?php echo $country_id; ?>">Edit</a> / <a onclick="return confirmation()" href="delete.php?country_id=<?php echo $country_id; ?>">Delete</a></td>
											
											 
                                        </tr>
										
										
	<?php } ?>
	

                            </tbody>
                        </table>

                    </div>
                </div>
				
				
            </div>

<?php include ('footer.php'); ?>
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
		
		
		
		
		
		
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Country</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
								<?php echo $message; ?>	
									<form role="form" name="contact" action="country.php" method="post"  enctype="multipart/form-data">
									
									  <div class="form-group">
                                            <label>Country Name</label>
											<input name="country_id" type="hidden" id="country_id" value="<?php echo $country_id; ?>">	
                                            <input class="form-control" id="country_name" name="country_name" value="<?php echo $country_name; ?>" required>
                                        </div>
										

										<input type="submit" name="submit" class="btn btn-default" value="Submit"/>	
										

		
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			
			
			
			            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                        <tr class="odd gradeA">
										<td><?php echo $country_name; ?></td>
                                            <td><a href="country.php?country_id=<?php echo $country_id; ?>">Edit</a> / <a onclick="return confirmation()" href="delete.php?country_id=<?php echo $country_id; ?>">Delete</a></td>
											
											 
                                        </tr>
										
										
	<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
<?php include ('footer.php'); ?>
<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');
?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Availability</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			
			
			            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											 <th>Day / Date</th>
											  <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
		

	<?php
	$sqsl = "SELECT * from registration";
    $qusery = mysql_query($sqsl) or die(mysql_error());
    while ($resuslt = mysql_fetch_array($qusery)) {
	 $first_name = $resuslt['first_name'];
	  $last_name = $resuslt['last_name'];
	   $reg_id = $resuslt['reg_id'];
	   $email_address = $resuslt['email_address'];
?>	 

		
							
                                        <tr class="odd gradeA">

										

											   <td>
	
<?php 
$result = "SELECT * from my_available where reg_id  = '$reg_id'";
$subjects_namet = mysql_query($result);
$num_rows = mysql_num_rows($subjects_namet);
?>
	
	<?php if($num_rows != 0){
											   
		
	$sql = "SELECT * from my_available where reg_id  = '$reg_id'";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	 $my_av = $result['my_av'];
     $date_time_av = $result['date_time_av'];
	 

	echo $date_time_av = date('l, F j, Y',strtotime($date_time_av)) . "<br />";	
	
	}
	
	
	
	}else{
		
		echo "Not Available";
	}
	 
?>									   
											   
											   
											   
											   </td>
											   

											   

											   
											    <td><?php echo $first_name; ?>&nbsp;<?php echo $last_name; ?><br /><?php echo $email_address; ?></td>
												
											
												
												
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
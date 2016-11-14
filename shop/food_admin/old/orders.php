<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');
?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Orders</h1>
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
                                            <th>Post Code</th>
											 <th>Bedrooms</th>
											  <th>Bathrooms</th>
											 <th>Hours</th>
											  <th>Time</th>
											  <th>Prices</th>
						
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
<?php
	$sql = "SELECT * from orders where order_status != 0 order by order_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	 $order_id = $result['order_id'];
     $post_code = $result['post_code'];
	 $bedrooms = $result['bedrooms'];
	 $bathrooms = $result['bathrooms'];
	 $hours = $result['hours'];
	 $c_time = $result['c_time'];
	 $prices = $result['prices'];
?>									
                                        <tr class="odd gradeA">

											  <td><?php echo $post_code; ?></td>
											   <td><?php echo $bedrooms; ?></td>
											    <td><?php echo $bathrooms; ?></td>
											   <td><?php echo $hours; ?></td>
											    <td><?php echo $c_time; ?></td>
											   <td>&pound;<?php echo $prices; ?></td>
                                            <td><a onclick="return confirmation()" href="delete.php?order_id=<?php echo $order_id; ?>">Delete</a></td>
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
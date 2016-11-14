<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

?>

		  <div class="warper container-fluid">
        	
            <div class="page-header"><h3>Customers <small>Information</small></h3></div>
			
			
			
			
			        <div class="panel panel-default">
                    <div class="panel-heading">Customers</div>
                    <div class="panel-body">
                    
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
									 <th>Email address</th>
									  <th>Address</th>
									   <th>Phone Number</th>
                                       <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
							
							<?php
	$sql = "SELECT * from customers order by customer_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	    $customer_id = $result['customer_id'];
		$username = $result['username'];
		$lastname = $result['lastname'];
$email_address = $result['email_address'];
$home_address = $result['home_address'];
$phone_number = $result['sender_phone'];
$status = $result['status'];
$toogleStatus='';	
if($status!='active')
$toogleStatus='checked';	
?>	

 <tr class="odd gradeX">
										<td><?php echo $username.' '.$lastname; ?></td>
										<td><?php echo $email_address; ?></td>
										<td><?php echo $home_address; ?></td>
										<td><?php echo $phone_number; ?></td>
                                        <td><?php echo $status; ?></td>
                                        <td><input customer_id="<?php echo $customer_id; ?>"  <?php echo $toogleStatus;?> class='action_button'  data-toggle='toggle' data-on='Activate' data-off='Deactivate' data-onstyle='success' data-offstyle='danger' type='checkbox'></td>
                                        <!--    <td><a onclick="return confirmation()" href="delete.php?customer_id=<?php echo $customer_id; ?>">Delete</a></td>-->
											
											 
                                        </tr>
										
										
	<?php } ?>
	

                            </tbody>
                        </table>

                    </div>
                </div>
				
				
            </div>
<?php include ('footer.php'); ?>
<script type="text/javascript">

$(document).on("change.bootstrapSwitch",".action_button", function () {
                            var customer_id = $(this).attr('customer_id');
                            if ($(this).prop('checked') === true) {
                                var query = "update customers set status='inactive' where customer_id='" + customer_id + "'";
                                $.ajax({
                                    url: 'delete.php',
                                    type: "POST",
                                    data: {qry: query},
                                    cache: false,
                                    success: function (data) {
                                        window.location = "customers.php";
                                    },
                                    error: function () {
                                        alert("Cann't process the request, something wrong!");
                                    }
                                });
                            } else {
                                var query = "update customers set status='active' where customer_id='" + customer_id + "'";
                                $.ajax({
                                    url: 'delete.php',
                                    type: "POST",
                                    data: {qry: query},
                                    cache: false,
                                    success: function (data) {
                                        window.location = "customers.php";
                                    },
                                    error: function () {
                                        alert("Cann't process the request, something wrong!");
                                    }
                                });
                            }
                        })

                </script>
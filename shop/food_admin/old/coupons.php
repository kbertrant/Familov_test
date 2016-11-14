<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$coupon_id = $_GET['coupon_id'];
if($coupon_id != ""){
	$sql78dss = "SELECT * from coupons where coupon_id = $coupon_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $coupon_id = $resultddss['coupon_id'];
		$code = $resultddss['code'];
		$discount_price = $resultddss['discount_price'];
    }
	
}

?>




    <?php
		 if($_POST['submit']) {
    $coupon_id = trim($_POST['coupon_id']);
	$code = trim($_POST['code']);
	$discount_price = trim($_POST['discount_price']);

  $resultchecking = mysql_query("select coupon_id from coupons where coupon_id = '$coupon_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

	$insertintotable = ("UPDATE coupons SET code='$code',discount_price='$discount_price' WHERE coupon_id='$coupon_id'");
		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Update Successfully </div>';
    } else {
    }
		}else{


$insertintotable = "insert into coupons(code,discount_price) values('$code','$discount_price')";
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
                    <h1 class="page-header">Coupons</h1>
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
									<form role="form" name="contact" action="coupons.php" method="post"  enctype="multipart/form-data">
									
									  <div class="form-group">
                                            <label>Code</label>
											<input name="coupon_id" type="hidden" id="coupon_id" value="<?php echo $coupon_id; ?>">	
                                            <input class="form-control" id="code" name="code" value="<?php echo $code; ?>" required>
                                        </div>
										
										
										  <div class="form-group">
                                            <label>Discount Price</label>
                                            <input class="form-control" id="discount_price" name="discount_price" value="<?php echo $discount_price; ?>" required>
                                        </div>
										
										

										<input type="submit" name="submit" class="btn btn-default" value="Submit"/>	
										

											<a href="banners.php" class="btn btn-default">Reset</a>
		
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
											<th>Code</th>
											<th>Discount Price</th>
                                            <th>Edit / Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
<?php
	$sql = "SELECT * from coupons order by coupon_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	  $coupon_id = $result['coupon_id'];
		$code = $result['code'];
		$discount_price = $result['discount_price'];
?>									
                                        <tr class="odd gradeA">
										<td><?php echo $code; ?></td>
										<td><?php echo $discount_price; ?></td>
                                        <td><a href="coupons.php?coupon_id=<?php echo $coupon_id; ?>">Edit</a> / <a onclick="return confirmation()" href="delete.php?coupon_id=<?php echo $coupon_id; ?>">Delete</a></td>
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
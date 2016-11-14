<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

	$sql78dss = "SELECT * from admin where id = 1";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $id = $resultddss['id'];
		$uname = $resultddss['uname'];
		$password = $resultddss['password'];
		$website_title = $resultddss['website_title'];
		$meta_keywards = $resultddss['meta_keywards'];
		$meta_desc = $resultddss['meta_desc'];
    }
?>




    <?php
		 if($_POST['submit']) {
   $id = trim($_POST['id']);
 $uname = trim($_POST['uname']);
  $password = trim($_POST['password']);
  $website_title = trim($_POST['website_title']);
 $meta_keywards = trim($_POST['meta_keywards']);
  $meta_desc = trim($_POST['meta_desc']);
	

$insertintotable = ("UPDATE admin SET uname='$uname',password='$password',website_title='$website_title',meta_keywards='$meta_keywards',meta_desc='$meta_desc' WHERE id=1");
		  if (mysql_query($insertintotable)) {
			  
			  
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Update Successfully </div>';
    }
		 }
		?>
		
		
		
		
		
		
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Configuration</h1>
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
									<form role="form" name="contact" action="configuration.php" method="post"  enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
											<input name="id" type="hidden" id="id" value="<?php echo $id; ?>">	
                                            <input class="form-control" id="uname" name="uname" value="<?php echo $uname; ?>">
                                        </div>
										
										  <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" id="password" name="password" value="<?php echo $password; ?>">
                                        </div>
										
										
										  <div class="form-group">
                                            <label>Website Title</label>
                                            <textarea class="form-control" id="website_title" name="website_title"><?php echo $website_title; ?></textarea>
                                        </div>
										
										
										
										  <div class="form-group">
                                            <label>Meta Keywords</label>
                                            <textarea class="form-control" id="meta_keywards" name="meta_keywards"><?php echo $meta_keywards; ?></textarea>
                                        </div>
										
										
										
										  <div class="form-group">
                                            <label>Meta Description</label>
                                            <textarea class="form-control" id="meta_desc" name="meta_desc"><?php echo $meta_desc; ?></textarea>
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
			
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
<?php include ('footer.php'); ?>
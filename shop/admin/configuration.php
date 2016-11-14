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
		
		
		
		
		
		
		
		
		
		  <div class="warper container-fluid">
        	
            <div class="page-header"><h3>Configuration</h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
				<?php echo $message; ?>	
                 	<div class="panel panel-default">
                        <div class="panel-body">
                        	

							<form class="form-horizontal" role="form" name="contact" action="configuration.php" method="post"  enctype="multipart/form-data">
                            

                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-7">
									  	<input name="id" type="hidden" id="id" value="<?php echo $id; ?>">		
                                            <input class="form-control form-control-flat" id="uname" name="uname"  placeholder="Name" value="<?php echo $uname; ?>" required>
											
                                    </div>
                                  </div>
                                  
								  
								  
								      <div class="form-group">
                                    <label class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-7">	
                                            <input class="form-control form-control-flat" id="password" name="password"  placeholder="Password" value="<?php echo $password; ?>" required>
											
                                    </div>
                                  </div>
                                  
								  
								  
								      <div class="form-group">
                                    <label class="col-sm-2 control-label">Website Title</label>
                                    <div class="col-sm-7">
                                            <textarea class="form-control form-control-flat" id="website_title" name="website_title"  placeholder="Website Title" required><?php echo $website_title; ?></textarea>
											
                                    </div>
                                  </div>
                                  
								  
								  
								      <div class="form-group">
                                    <label class="col-sm-2 control-label">Meta Keywords</label>
                                    <div class="col-sm-7">

											<textarea class="form-control form-control-flat" id="meta_keywards" name="meta_keywards"  placeholder="Meta Keywords" required><?php echo $meta_keywards; ?></textarea>
											
                                    </div>
                                  </div>
                                  
								  
								  
								      <div class="form-group">
                                    <label class="col-sm-2 control-label">Meta Description</label>
                                    <div class="col-sm-7">
	
                     
											<textarea class="form-control form-control-flat" id="meta_desc" name="meta_desc"  placeholder="Meta Description" required><?php echo $meta_desc; ?></textarea>
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
            
		      </div>	
			
			
			
			
			
		
<?php include ('footer.php'); ?>
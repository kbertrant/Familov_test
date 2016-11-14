<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$category_id = $_GET['category_id'];
if($category_id != ""){
	$sql78dss = "SELECT * from categories where category_id = $category_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $category_id = $resultddss['category_id'];
		$category_name = $resultddss['category_name'];
		
		
    }
	
}

?>




    <?php
		 if($_POST['submit']) {
    $category_id = trim($_POST['category_id']);
	$category_name = trim($_POST['category_name']);

  $resultchecking = mysql_query("select category_id from categories where category_id = '$category_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

	$insertintotable = ("UPDATE categories SET category_name='$category_name' WHERE category_id='$category_id'");
		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Update Successfully </div>';
    } else {
    }
		}else{


$insertintotable = "insert into categories(category_name) values('$category_name')";
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
        	
            <div class="page-header"><h3>Category <small>Information</small></h3></div>
            
            <div class="row">
            
            	<div class="col-md-12">
				<?php echo $message; ?>	
                 	<div class="panel panel-default">
                        <div class="panel-body">
                        	

							<form class="form-horizontal" role="form" name="contact" action="category.php" method="post"  enctype="multipart/form-data">
                            
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Category Name</label>
                                    <div class="col-sm-7">
									  	<input name="category_id" type="hidden" id="category_id" value="<?php echo $category_id; ?>">	
                                            <input class="form-control form-control-flat" id="category_name" name="category_name"  placeholder="Enter Category Name" value="<?php echo $category_name; ?>" required>
											
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
                    <div class="panel-heading">Categories</div>
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
	$sql = "SELECT * from categories order by category_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	    $category_id = $result['category_id'];
		$category_name = $result['category_name'];			
?>	

 <tr class="odd gradeX">
										<td><?php echo $category_name; ?></td>
                                            <td><a href="category.php?category_id=<?php echo $category_id; ?>">Edit</a> / <a onclick="return confirmation()" href="delete.php?category_id=<?php echo $category_id; ?>">Delete</a></td>
											
											 
                                        </tr>
										
										
	<?php } ?>
	

                            </tbody>
                        </table>

                    </div>
                </div>
				
				
            </div>

<?php include ('footer.php'); ?>
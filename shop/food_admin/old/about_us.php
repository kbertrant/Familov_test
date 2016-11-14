<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$about_id = $_GET['about_id'];
if($about_id != ""){
	$sql78dss = "SELECT * from about_us where about_id = $about_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $about_id = $resultddss['about_id'];
		$about_title = $resultddss['about_title'];
		$about_desc = $resultddss['about_desc'];
    }
	
}




?>




    <?php
if($_POST['submit']) {
    $about_id = trim($_POST['about_id']);
	$about_title = trim($_POST['about_title']);
	$about_desc = trim($_POST['about_desc']);

  $resultchecking = mysql_query("select about_id from about_us where about_id = '$about_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

	$insertintotable = ("UPDATE about_us SET about_title='$about_title',about_desc='$about_desc' WHERE about_id='$about_id'");

		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> About Us Update Successfully </div>';
    } else {
    }
		}else{


$insertintotable = "insert into about_us(about_title,about_desc) values('$about_title','$about_desc')";

if (mysql_query($insertintotable)) {
$message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> About Us Insert Successfully </div>';
}

		
		}
		}

	
	}
		?>
		
		
		
		
		
		
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">About Us</h1>
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
									<form role="form" name="contact" action="about_us.php" method="post"  enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Title</label>
											<input name="about_id" type="hidden" id="about_id" value="<?php echo $about_id; ?>">	
                                            <input class="form-control" id="about_title" name="about_title" value="<?php echo $about_title; ?>" required>
                                        </div>

										
										<div class="form-group">
                                            <label>Description</label>
											<textarea class="form-control" rows="10" id="about_desc" name="about_desc"><?php echo $about_desc; ?></textarea>
                                        </div>
										
																		  <script>
CKEDITOR.config.height = 300;			
CKEDITOR.replace( 'about_desc', {
	toolbar: [
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Source', '-',  'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'Undo', 'Redo' ] },
		{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
		{ name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
		{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
		{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
		{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] }
	]
});
		</script>

		
										<input type="submit" name="submit" class="btn btn-default" value="Submit"/>	
                                       <a href="about_us.php" class="btn btn-default">Reset</a>
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
                        <!-- /.panel-about_title -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
											 <th>Description</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
<?php
	$sql = "SELECT * from about_us order by about_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	 $about_id = $result['about_id'];
     $about_title = $result['about_title'];
	  $about_desc = $result['about_desc'];
?>									
                                        <tr class="odd gradeA">
											  <td><?php echo $about_title; ?></td>
											 <td><?php echo $about_desc; ?></td>
                                            <td><a href="about_us.php?about_id=<?php echo $about_id; ?>">Edit</a></td>
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
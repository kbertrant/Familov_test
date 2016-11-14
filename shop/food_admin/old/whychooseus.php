<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$w_id = $_GET['w_id'];
if($w_id != ""){
	$sql78dss = "SELECT * from whychooseus where w_id = $w_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $w_id = $resultddss['w_id'];
		$w_title = $resultddss['w_title'];
		$w_desc = $resultddss['w_desc'];
    }
	
}




?>




    <?php
if($_POST['submit']) {
    $w_id = trim($_POST['w_id']);
	$w_title = trim($_POST['w_title']);
	$w_desc = trim($_POST['w_desc']);

  $resultchecking = mysql_query("select w_id from whychooseus where w_id = '$w_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

	$insertintotable = ("UPDATE whychooseus SET w_title='$w_title',w_desc='$w_desc' WHERE w_id='$w_id'");

		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Why choose us Update Successfully </div>';
    } else {
    }
		}else{


$insertintotable = "insert into whychooseus(w_title,w_desc) values('$w_title','$w_desc')";

if (mysql_query($insertintotable)) {
$message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Why choose us Insert Successfully </div>';
}

		
		}
		}

	
	}
		?>
		
		
		
		
		
		
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Why choose us?</h1>
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
									<form role="form" name="contact" action="whychooseus.php" method="post"  enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Title</label>
											<input name="w_id" type="hidden" id="w_id" value="<?php echo $w_id; ?>">	
                                            <input class="form-control" id="w_title" name="w_title" value="<?php echo $w_title; ?>" required>
                                        </div>

										
										<div class="form-group">
                                            <label>Description</label>
											<textarea class="form-control" rows="10" id="w_desc" name="w_desc"><?php echo $w_desc; ?></textarea>
                                        </div>
										
																		  <script>
CKEDITOR.config.height = 300;			
CKEDITOR.replace( 'w_desc', {
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
                                       <a href="whychooseus.php" class="btn btn-default">Reset</a>
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
                        <!-- /.panel-w_title -->
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
	$sql = "SELECT * from whychooseus order by w_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	 $w_id = $result['w_id'];
     $w_title = $result['w_title'];
	  $w_desc = $result['w_desc'];
?>									
                                        <tr class="odd gradeA">
											  <td><?php echo $w_title; ?></td>
											 <td><?php echo $w_desc; ?></td>
                                            <td><a href="whychooseus.php?w_id=<?php echo $w_id; ?>">Edit</a></td>
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
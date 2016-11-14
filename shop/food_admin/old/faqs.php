<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$faq_id = $_GET['faq_id'];
if($faq_id != ""){
	$sql78dss = "SELECT * from bk_faq where faq_id = $faq_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $faq_id = $resultddss['faq_id'];
		$heading = $resultddss['heading'];
		$description = $resultddss['description'];
    }
	
}




?>




    <?php
if($_POST['submit']) {
    $faq_id = trim($_POST['faq_id']);
	$heading = trim($_POST['heading']);
	$description = trim($_POST['description']);

  $resultchecking = mysql_query("select faq_id from bk_faq where faq_id = '$faq_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

	$insertintotable = ("UPDATE bk_faq SET heading='$heading',description='$description' WHERE faq_id='$faq_id'");

		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Faq Update Successfully </div>';
    } else {
    }
		}else{


$insertintotable = "insert into bk_faq(heading,description) values('$heading','$description')";

if (mysql_query($insertintotable)) {
$message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Faq Insert Successfully </div>';
}

		
		}
		}

	
	}
		?>
		
		
		
		
		
		
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Faq's</h1>
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
									<form role="form" name="contact" action="faqs.php" method="post"  enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Title</label>
											<input name="faq_id" type="hidden" id="faq_id" value="<?php echo $faq_id; ?>">	
                                            <input class="form-control" id="heading" name="heading" value="<?php echo $heading; ?>" required>
                                        </div>

										
										<div class="form-group">
                                            <label>Description</label>
											<textarea class="form-control" rows="10" id="description" name="description"><?php echo $description; ?></textarea>
                                        </div>
										
																		  <script>
CKEDITOR.config.height = 300;			
CKEDITOR.replace( 'description', {
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
                                       <a href="faqs.php" class="btn btn-default">Reset</a>
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
                                            <th>Title</th>
											 <th>Description</th>
                                            <th>Edit / Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
<?php
	$sql = "SELECT * from bk_faq order by faq_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	 $faq_id = $result['faq_id'];
     $heading = $result['heading'];
	  $description = $result['description'];
?>									
                                        <tr class="odd gradeA">
											  <td><?php echo $heading; ?></td>
											 <td><?php echo $description; ?></td>
                                            <td><a href="faqs.php?faq_id=<?php echo $faq_id; ?>">Edit</a> / <a onclick="return confirmation()" href="delete.php?faq_id=<?php echo $faq_id; ?>">Delete</a></td>
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
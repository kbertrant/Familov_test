<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

	$sql78dss = "SELECT * from cms where id = 2";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $id = $resultddss['id'];
		$content_about = $resultddss['content_about'];
    }
?>




    <?php
		 if($_POST['submit']) {
   $id = trim($_POST['id']);
 $content_about = trim($_POST['content_about']);

$insertintotable = ("UPDATE cms SET content_about='$content_about' WHERE id=2");
		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Terms & Conditions Update Successfully </div>';
    }
		 }
		?>
		
		
		
		
		
		
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Terms & Conditions </h1>
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
									<form role="form" name="contact" action="terms_and_conditions.php" method="post"  enctype="multipart/form-data">
										  <div class="form-group">
                                            <label>Content</label>
										    <input name="id" type="hidden" id="id" value="<?php echo $id; ?>">	
                                            <textarea class="form-control" id="content_about" style="height:300px;" name="content_about"><?php echo $content_about; ?></textarea>
											
											  <script>
CKEDITOR.config.height = 300;			
CKEDITOR.replace( 'content_about', {
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
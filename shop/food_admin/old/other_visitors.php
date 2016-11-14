<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$oth_id = $_GET['oth_id'];
if($oth_id != ""){
	$sql78dss = "SELECT * from other_visitors where oth_id = $oth_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $oth_id = $resultddss['oth_id'];
		$oth_desc = $resultddss['oth_desc'];
		$oth_title = $resultddss['oth_title'];
    }
	
}




?>




    <?php
if($_POST['submit']) {
    $oth_id = trim($_POST['oth_id']);
	$oth_desc = trim($_POST['oth_desc']);
	$oth_title = trim($_POST['oth_title']);

  $resultchecking = mysql_query("select oth_id from other_visitors where oth_id = '$oth_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

	$insertintotable = ("UPDATE other_visitors SET oth_desc='$oth_desc',oth_title='$oth_title' WHERE oth_id='$oth_id'");

		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Update Successfully </div>';
    } else {
    }
		}else{


$insertintotable = "insert into other_visitors(oth_desc,oth_title) values('$oth_desc','$oth_title')";

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
                    <h1 class="page-header">Other Visitors Experiences</h1>
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
									<form role="form" name="contact" action="other_visitors.php" method="post"  enctype="multipart/form-data">
	
										
											 <div class="form-group">
                                            <label>Title</label>
											<input type="hidden" id="oth_id" name="oth_id" value="<?php echo $oth_id; ?>">
											 <input type="text"  class="form-control" id="oth_title" name="oth_title" value="<?php echo $oth_title; ?>" required>
                                        </div>
										
										
										
										
										
										
										
										
										<div class="form-group">
                                            <label>Description</label>
											<textarea class="form-control" rows="10" id="oth_desc" name="oth_desc"><?php echo $oth_desc; ?></textarea>
                                        </div>
										
																		  <script>
CKEDITOR.config.height = 300;			
CKEDITOR.replace( 'oth_desc', {
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
                                       <a href="other_visitors.php" class="btn btn-default">Reset</a>
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
                                           <th>Edit / Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
<?php
	$sql = "SELECT * from other_visitors order by oth_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	 $oth_id = $result['oth_id'];
	  $oth_desc = $result['oth_desc'];
	  $oth_title = $result['oth_title'];
?>									
                                        <tr class="odd gradeA">
										<td><?php echo $oth_title; ?></td>
											 <td><?php echo $oth_desc; ?></td>
                                            <td><a href="other_visitors.php?oth_id=<?php echo $oth_id; ?>">Edit</a> / <a onclick="return confirmation()" href="delete.php?n_id=<?php echo $n_id; ?>">Delete</a></td>
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
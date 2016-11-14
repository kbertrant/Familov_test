<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$s_id = $_GET['s_id'];
if($s_id != ""){
	$sql78dss = "SELECT * from services where s_id = $s_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $s_id = $resultddss['s_id'];
		$s_title = $resultddss['s_title'];
		$s_image = $resultddss['s_image'];
		$s_desc = $resultddss['s_desc'];
		
    }
	
}







	 function resizeImage($sourceImage, $targetImage, $maxWidth, $maxHeight, $quality = 80)
{
    // Obtain image from given source file.
    if (!$image = @imagecreatefromjpeg($sourceImage))
    {
        return false;
    }

    // Get dimensions of source image.
    list($origWidth, $origHeight) = getimagesize($sourceImage);

    if ($maxWidth == 0)
    {
        $maxWidth  = $origWidth;
    }

    if ($maxHeight == 0)
    {
        $maxHeight = $origHeight;
    }

    // Calculate ratio of desired maximum sizes and original sizes.
    $widthRatio = $maxWidth / $origWidth;
    $heightRatio = $maxHeight / $origHeight;

    // Ratio used for calculating new image dimensions.
    $ratio = min($widthRatio, $heightRatio);

    // Calculate new image dimensions.
    $newWidth  = (int)$origWidth  * $ratio;
    $newHeight = (int)$origHeight * $ratio;

    // Create final image with new dimensions.
    $newImage = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight);
    imagejpeg($newImage, $targetImage, $quality);

    // Free up the memory.
    imagedestroy($image);
    imagedestroy($newImage);

    return true;
}





?>




    <?php
		 if($_POST['submit']) {
    $s_id = trim($_POST['s_id']);
	$s_title = trim($_POST['s_title']);
	$s_image = trim($_POST['s_image']);
	$s_desc = trim($_POST['s_desc']);
	
   
   
function compress_image($source_url, $destination_url, $quality)
{
    $info = getimagesize($source_url);

    if ($info['mime'] == 'image/jpeg')
        $image = imagecreatefromjpeg($source_url);
    elseif ($info['mime'] == 'image/gif')
        $image = imagecreatefromgif($source_url);
    elseif ($info['mime'] == 'image/png')
        $image = imagecreatefrompng($source_url);

    imagejpeg($image, $destination_url, $quality);


    return $destination_url;
}



		

			$path = "services/";
        $filename = $_FILES['s_image']['tmp_name'];
        $name = $_FILES['s_image']['name'];
        $size = $_FILES['s_image']['size'];



            list($txt, $ext) = explode(".", $name);
                    $actual_image_name = str_replace(" ", "_", $txt) . "_" . time() . "." . $ext;
                    $tmp = $_FILES['s_image']['tmp_name'];
					
					
						
				if (move_uploaded_file($tmp, $path . $actual_image_name)) {
                        move_uploaded_file($tmp, $path . $actual_image_name);
                        $source_photo = $path . $actual_image_name;
                        $dest_photo = "services/" . $actual_image_name;
						resizeImage("services/".$actual_image_name, "services/".$actual_image_name, 0, 0);
					}
					
					


					
				

  $resultchecking = mysql_query("select s_id from services where s_id = '$s_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

	

	
		
if($filename != ""){
	
	$insertintotable = ("UPDATE services SET s_title='$s_title',s_desc='$s_desc',s_image='$actual_image_name' WHERE s_id='$s_id'");
	
	
}else{
	
	
	$insertintotable = ("UPDATE services SET s_title='$s_title',s_desc='$s_desc' WHERE s_id='$s_id'");
	
}

		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Services Update Successfully </div>';
    } else {
    }
		}else{


$insertintotable = "insert into services(s_title,s_desc,s_image) values('$s_title','$s_desc','$actual_image_name')";
if (mysql_query($insertintotable)) {
$message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Services Insert Successfully </div>';
}

		
		}
		}

	
	}
		?>
		
		
		
		
		
		
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Services</h1>
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
									<form role="form" name="contact" action="services.php" method="post"  enctype="multipart/form-data">
									

									
										<?php if($s_image != ""){ ?>
										
										<img src="services/<?php echo $s_image; ?>" width="150"/><br />
										<a href="delete.php?item_s_image_delete=<?php echo $s_id; ?>">DELETE</a>
										<br /><br />
										
										<?php }else{ ?>
										 <div class="form-group">
                                            <label>Photo</label>
											 <input type="file" id="s_image" name="s_image" required>
                                        </div>
										<?php } ?>
										
										
										
										
                                        <div class="form-group">
                                            <label>Title</label>
											<input name="s_id" type="hidden" id="s_id" value="<?php echo $s_id; ?>">	
                                            <input class="form-control" id="s_title" name="s_title" value="<?php echo $s_title; ?>" required>
                                        </div>

										
										<div class="form-group">
                                            <label>Description</label>	
                                            <textarea class="form-control" id="s_desc" name="s_desc" required><?php echo $s_desc; ?></textarea>
                                        </div>
										
	  <script>
CKEDITOR.config.height = 300;			
CKEDITOR.replace( 's_desc', {
	toolbar: [
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Source', '-',  'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'Undo', 'Redo' ] },
		{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] }
		/*
		{ name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
		{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
		{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
		{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
		{ name: 'others', items: [ '-' ] },
		{ name: 'about', items: [ 'About' ] }*/
	]
});
		</script>

				
										
										<input type="submit" name="submit" class="btn btn-default" value="Submit"/>	
										

											<a href="servicess.php" class="btn btn-default">Reset</a>
		
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
											<th>Photo</th>
                                            <th>Title</th>
											<th>Description</th>
                                            <th>Edit / Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
<?php
	$sql = "SELECT * from services order by s_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	    $s_id = $result['s_id'];
		$s_title = $result['s_title'];
		$s_image = $result['s_image'];
		$s_desc = $result['s_desc'];
		
?>									
                                        <tr class="odd gradeA">
										<td><img src="services/<?php echo $s_image; ?>" width="100"/></td>
                                            <td><?php echo $s_title; ?></td>
											 <td><?php echo $s_desc; ?></td>
                                            <td><a href="services.php?s_id=<?php echo $s_id; ?>">Edit</a> / <a onclick="return confirmation()" href="delete.php?s_id=<?php echo $s_id; ?>">Delete</a></td>
											
											 
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
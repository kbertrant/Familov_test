<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$t_id = $_GET['t_id'];
if($t_id != ""){
	$sql78dss = "SELECT * from testimonial where t_id = $t_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $t_id = $resultddss['t_id'];
		$title = $resultddss['title'];
		$image = $resultddss['image'];
		$t_desc = $resultddss['t_desc'];
		$button_text = $resultddss['button_text'];
		$button_url = $resultddss['button_url'];
		
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
    $t_id = trim($_POST['t_id']);
	$title = trim($_POST['title']);
	$image = trim($_POST['image']);
	$t_desc = trim($_POST['t_desc']);
    $button_text = trim($_POST['button_text']);
	$button_url = trim($_POST['button_url']);
	
   
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


		$path = "testimonials/";
        $filename = $_FILES['image']['tmp_name'];
        $name = $_FILES['image']['name'];
        $size = $_FILES['image']['size'];



            list($txt, $ext) = explode(".", $name);
                    $actual_image_name = str_replace(" ", "_", $txt) . "_" . time() . "." . $ext;
                    $tmp = $_FILES['image']['tmp_name'];
					
					
						
				if (move_uploaded_file($tmp, $path . $actual_image_name)) {
                        move_uploaded_file($tmp, $path . $actual_image_name);
                        $source_photo = $path . $actual_image_name;
                        $dest_photo = "testimonials/" . $actual_image_name;
						resizeimage("testimonials/".$actual_image_name, "testimonials/".$actual_image_name, 450, 450);
					}
					
					
					
				

  $resultchecking = mysql_query("select t_id from testimonial where t_id = '$t_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

	

	
		
if($filename != ""){
	
	$insertintotable = ("UPDATE testimonial SET title='$title',t_desc='$t_desc',button_text='$button_text',image='$actual_image_name',button_url='$button_url' WHERE t_id='$t_id'");
	
	
}else{
	
	
	$insertintotable = ("UPDATE testimonial SET title='$title',t_desc='$t_desc',button_text='$button_text',button_url='$button_url' WHERE t_id='$t_id'");
	
}



//$insertintotable = ("UPDATE testimonial SET title='$title',t_desc='$t_desc',button_text='$button_text',image='$actual_image_name',button_url='$button_url' WHERE t_id='$t_id'");
		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Testimonial Update Successfully </div>';
    } else {
    }
		}else{


$insertintotable = "insert into testimonial(title,t_desc,button_text,image,button_url) values('$title','$t_desc','$button_text','$actual_image_name','$button_url')";
if (mysql_query($insertintotable)) {
$message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Testimonial Insert Successfully </div>';
}

		
		}
		}

	
	}
		?>
		
		
		
		
		
		
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Testimonials</h1>
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
									<form role="form" name="contact" action="testimonials.php" method="post"  enctype="multipart/form-data">
									

									
										<?php if($image != ""){ ?>
										
										<img src="testimonials/<?php echo $image; ?>" width="150"/><br />
										<a href="delete.php?item_image_delete=<?php echo $t_id; ?>">DELETE</a>
										<br /><br />
										
										<?php }else{ ?>
										 <div class="form-group">
                                            <label>Photo</label>
											 <input type="file" id="image" name="image" required>
                                        </div>
										<?php } ?>
										
										
										
										
                                        <div class="form-group">
                                            <label>Title</label>
											<input name="t_id" type="hidden" id="t_id" value="<?php echo $t_id; ?>">	
                                            <input class="form-control" id="title" name="title" value="<?php echo $title; ?>" required>
                                        </div>

										
										<div class="form-group">
                                            <label>Description</label>	
                                            <textarea class="form-control" id="t_desc" name="t_desc" required><?php echo $t_desc; ?></textarea>
                                        </div>
										

										
										 <div class="form-group">
                                            <label>Button Text</label>	
                                            <input class="form-control" id="button_text" name="button_text" value="<?php echo $button_text; ?>" required>
                                        </div>
										
										
										 <div class="form-group">
                                            <label>Button URL</label>	
                                            <input class="form-control" id="button_url" name="button_url" value="<?php echo $button_url; ?>" required>
                                        </div>
										
										
				
										
										<input type="submit" name="submit" class="btn btn-default" value="Submit"/>	
										

											<a href="testimonials.php" class="btn btn-default">Reset</a>
		
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
	$sql = "SELECT * from testimonial order by t_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	    $t_id = $result['t_id'];
		$title = $result['title'];
		$image = $result['image'];
		$t_desc = $result['t_desc'];
		$button_text = $result['button_text'];
		$button_url = $result['button_url'];
		
?>									
                                        <tr class="odd gradeA">
										<td><img src="testimonials/<?php echo $image; ?>" width="100"/></td>
                                            <td><?php echo $title; ?></td>
											 <td><?php echo $t_desc; ?></td>
                                            <td><a href="testimonials.php?t_id=<?php echo $t_id; ?>">Edit</a> / <a onclick="return confirmation()" href="delete.php?t_id=<?php echo $t_id; ?>">Delete</a></td>
											
											 
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
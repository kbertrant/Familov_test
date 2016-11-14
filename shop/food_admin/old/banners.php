<?php include ('header.php'); 
include ('inc/dbConnect.inc.php');

$banner_id = $_GET['banner_id'];
if($banner_id != ""){
	$sql78dss = "SELECT * from banner_photos where banner_id = $banner_id";
    $queryesss = mysql_query($sql78dss) or die(mysql_error());
    while ($resultddss = mysql_fetch_array($queryesss)) {
        $banner_id = $resultddss['banner_id'];
		$banner_photo = $resultddss['banner_photo'];
		$banner_sort = $resultddss['banner_sort'];
		
		
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
    $banner_id = trim($_POST['banner_id']);
	$banner_sort = trim($_POST['banner_sort']);
	$banner_photo = trim($_POST['banner_photo']);

	
   
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


		$path = "banners/";
        $filename = $_FILES['banner_photo']['tmp_name'];
        $name = $_FILES['banner_photo']['name'];
        $size = $_FILES['banner_photo']['size'];



            list($txt, $ext) = explode(".", $name);
                    $actual_banner_photo_name = str_replace(" ", "_", $txt) . "_" . time() . "." . $ext;
                    $tmp = $_FILES['banner_photo']['tmp_name'];
					
					
						
				if (move_uploaded_file($tmp, $path . $actual_banner_photo_name)) {
                        move_uploaded_file($tmp, $path . $actual_banner_photo_name);
                        $source_photo = $path . $actual_banner_photo_name;
                        $dest_photo = "banners/" . $actual_banner_photo_name;
					}
					
					
					
				

  $resultchecking = mysql_query("select banner_id from banner_photos where banner_id = '$banner_id'");
	  {		
		if (mysql_num_rows($resultchecking) == 1) {

	

	
		
if($filename != ""){
	
	$insertintotable = ("UPDATE banner_photos SET banner_photo='$actual_banner_photo_name' WHERE banner_id='$banner_id'");
	
	
}else{
	
	
	$insertintotable = ("UPDATE banner_photos SET banner_sort='$banner_sort' WHERE banner_id='$banner_id'");
	
}
		  if (mysql_query($insertintotable)) {
		  
		  $message = '<div style="color: green;
    font-weight: bold;
    margin-top: -10px;
    padding-bottom: 5px;
    padding-top: 5px;"> Update Successfully </div>';
    } else {
    }
		}else{


$insertintotable = "insert into banner_photos(banner_sort,banner_photo) values('$banner_sort','$actual_banner_photo_name')";
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
                    <h1 class="page-header">Banner Photos</h1>
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
									<form role="form" name="contact" action="banners.php" method="post"  enctype="multipart/form-data">
									
									  <div class="form-group">
                                            <label>Sort</label>
											<input name="banner_id" type="hidden" id="banner_id" value="<?php echo $banner_id; ?>">	
                                            <input class="form-control" id="banner_sort" name="banner_sort" value="<?php echo $banner_sort; ?>" required>
                                        </div>
										

									
										<?php if($banner_photo != ""){ ?>
										
										<img src="banners/<?php echo $banner_photo; ?>" width="150"/><br />
										<a href="delete.php?item_banner_photo_delete=<?php echo $banner_id; ?>">DELETE</a>
										<br /><br />
										
										<?php }else{ ?>
										 <div class="form-group">
                                            <label>Photo</label>
											 <input type="file" id="banner_photo" name="banner_photo" required>
                                        </div>
										<?php } ?>
										
										
										<input type="submit" name="submit" class="btn btn-default" value="Submit"/>	
										

											<a href="banners.php" class="btn btn-default">Reset</a>
		
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
											<th>Sort</th>
                                            <th>Edit / Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
<?php
	$sql = "SELECT * from banner_photos order by banner_id desc";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
	    $banner_id = $result['banner_id'];
		$banner_photo = $result['banner_photo'];
		$banner_sort = $result['banner_sort'];			
?>									
                                        <tr class="odd gradeA">
										<td><img src="banners/<?php echo $banner_photo; ?>" width="100"/></td>
										<td><?php echo $banner_sort; ?>
                                            <td><a href="banners.php?banner_id=<?php echo $banner_id; ?>">Edit</a> / <a onclick="return confirmation()" href="delete.php?banner_id=<?php echo $banner_id; ?>">Delete</a></td>
											
											 
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
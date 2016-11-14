<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_SESSION['customer_id'];	

$path = "shops/";

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_FILES['shop_logo_temp']['name'];
$size = $_FILES['shop_logo_temp']['size'];
list($txt, $ext) = explode(".", $name);
$actual_image_name = time().$session_id.".".$ext;
$tmp = $_FILES['shop_logo_temp']['tmp_name'];
if(move_uploaded_file($tmp, $path.$actual_image_name))
{
	
?>

<br /><img src="shops/<?php echo $actual_image_name; ?>"/>
<input type="hidden" id="shop_logo" name="shop_logo" value="<?php echo $actual_image_name; ?>">		


<?php
}
exit;
}



/*
echo $filename = $_FILES['note_imgs']['tmp_name'];

if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
        $path = "shops/";
        $filename = $_FILES['note_imgs']['tmp_name'];
        $valid_formats = array(
           "jpg",
            "png",
            "gif",
            "bmp",
            "jpeg",
            "GIF",
            "JPG",
            "PNG");

        $name = $_FILES['note_imgs']['name'];
        $size = $_FILES['note_imgs']['size'];

        if (strlen($name)) {
            list($txt, $ext) = explode(".", $name);
            if (in_array($ext, $valid_formats)) {
                if ($size < 90098888) {
                    $actual_image_name = str_replace(" ", "_", $txt) . "_" . time() . "." . $ext;
                    $tmp = $_FILES['note_imgs']['tmp_name'];
                    if (move_uploaded_file($tmp, $path . $actual_image_name)) {
                        move_uploaded_file($tmp, $path . $actual_image_name);

                        $source_photo = $path . $actual_image_name;
                        $dest_photo = "shops/" . $actual_image_name;
	?>
						
	<img src="shops/<?php echo $actual_image_name; ?>" width="100%"/>
<input type="text" style="display:none;" id="shop_logo" name="shop_logo" value="<?php echo $actual_image_name; ?>">		
	
	
	<?php					
		
                    } else {
                        echo "failed";
                    }
                } else {
                    echo "Image file size max 2 MB";
                }
            } else {
                echo "Invalid file format..";
            }
        } else {
            echo "Please select image..!";
        }
        exit;
}
*/

?>



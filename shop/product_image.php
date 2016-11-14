<?php
session_start();
extract($_REQUEST);
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_SESSION['customer_id'];	

$path = "products/";

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_FILES['product_image_temp']['name'];
$size = $_FILES['product_image_temp']['size'];
list($txt, $ext) = explode(".", $name);
$actual_image_name = time().$session_id.".".$ext;
$tmp = $_FILES['product_image_temp']['tmp_name'];
if(move_uploaded_file($tmp, $path.$actual_image_name))
{
	
?>

<br /><img src="products/<?php echo $actual_image_name; ?>" style="width:100%;"/>
<input type="hidden" id="product_image" name="product_image" value="<?php echo $actual_image_name; ?>">		


<?php
}
exit;
}

?>



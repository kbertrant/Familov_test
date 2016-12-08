<?php include("header.php");
require_once "../localization.php"?>
        <section id="login" class=" p-y-lg bg-color">
            <div class="container">
                <div class="row">
				
		<div class="col-md-12">		
				
<?php
include ('food_admin/inc/dbConnect.inc.php');
$customer_id = $_GET['customer_id'];
$order_id = $_GET['order_id'];	
$ip_address = $_SERVER['REMOTE_ADDR'];
$phone_number = $_GET['phone_number'];
$recp_name = $_GET['recp_name'];	


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$generate_code = generateRandomString();

	
?>
  
<?php


$insertintotable = ("UPDATE customers SET phone_number='$phone_number', recp_name='$recp_name' where customer_id = '$customer_id'");	
if (mysql_query($insertintotable)) { }


$insertintotable1 = ("UPDATE orders SET random_rick='expire', customer_id='$customer_id', delivery_charges = '2', generate_code='$generate_code', order_status = 'Wait' where order_id IN($order_id) and ip_address = '$ip_address'");	
if (mysql_query($insertintotable1)) { 






	$result8ed = mysql_query("SELECT * from customers where customer_id  = '$customer_id'");
		while ($main_s9es = mysql_fetch_array($result8ed)) {
			$email_address = $main_s9es['email_address'];
			$username = $main_s9es['username'];
			$sender_phone = $main_s9es['sender_phone'];
			$receipent_phone = $main_s9es['phone_number'];
			$recp_name = $main_s9es['recp_name'];
			$shop_name = $main_s9es[' 	shop_name'];
		}
		

			$EmailTo = "scopun@gmail.com";
		$EmailFrom = "scopun@gmail.com";
		$to = $email_address;
        $Subject = "ORDER";
		

		
$Body = "";
$Body .= "Name: ";
$Body .= $username;
$Body .= "\n";
$Body .= "CODE: ";
$Body .= $generate_code;
$Body .= "\n";

		mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");		 











}
?>

<br /><br /><br /><br />

<center><img src="images/pembukaan-kembali.png" style="width:10%; margin-bottom:30px;"/></center>
<h2>
	<center><?php echo gettext("Thank you, for your order to ");?><span style="color:#ee3682;text-transform: uppercase;"><?php echo $recp_name; ?></span></center>
</h2>
<h5 style="font-size: 25px;
    font-weight: lighter;
    line-height: 35px;">
<center><?php echo gettext("Your Order ID is: ");?><span style="color:#ee3682;"><?php echo $generate_code; ?></span><?php echo gettext(" you will receive on Email and sms about your order soon. ");?><br />
    <?php echo gettext("Thank you for shooping at ");?><span style="color:#ee3682; font-weight: bold;">FAMILOV</span></center>
</h5>
<center>
<div><a href="index.php" style="color:#000; text-decoration: underline;"><?php echo gettext("HOME");?></a></div>
</center>
<br /><br /><br /><br /> <center><img src="images/flat7.png" style="margin-top:95px;"/></center>
 

                </div>
            </div>
        </section>
        <!-- /End Login Section -->

  		<?php include("footer.php"); ?>	
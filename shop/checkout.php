<?php include("header.php"); ?>





<?php



	$sql_shop = "SELECT * from customers where customer_id = '$customer_id'";

    $query_shop = mysql_query($sql_shop) or die(mysql_error());

    while ($resuslt_shop = mysql_fetch_array($query_shop)) {

		$username = $resuslt_shop['username'];

		$home_address = $resuslt_shop['home_address'];

		$phone_number = $resuslt_shop['phone_number'];

		$email_address = $resuslt_shop['email_address'];

		$recp_name = $resuslt_shop['recp_name'];

		

		

    }

	

	

	



	

	

?>



    <!-- =========================

            LOGIN SECTION

        ============================== -->

    <section id="login" class=" p-y-lg bg-color">

        <div class="container">
              <div class="row">
                  
                  
             </div>
            

            <div class="row">







                <?php if($customer_id == ""){ ?>

                <div class="col-md-4">

                    <h4 class="m-t-lg m-b-0 text-left center-md">Checkout</h4>

                    <br />

                    <a href="signup.php" class="btn btn-green">SIGNUP</a>&nbsp;&nbsp;<a href="login.php" class="btn-nav btn-dark smooth-scroll" style="border-radius:20px;">LOGIN</a>

                </div>

                <?php } ?>





                <?php if($customer_id == ""){ ?>

                <div class="col-md-8">

                    <?php }else{ ?>

                    <div class="col-md-12" style="background:#f5f5f5;padding-bottom:20px;">

                        <?php } ?>



                        <h5 class="m-t-lg m-b-0 text-left center-md">1. Order details</h5>

                        <br />



                        <div class="table-responsive">

                            <table class="table">



                                <tr>

                                    <td><strong>Product</strong></td>

                                    <td><strong><center>Price</center></strong></td>

                                    <td><strong><center>Quantity</center></strong></td>

                                    <td><strong><center>Total</center></strong></td>

                                </tr>







                                <?php

	$sql = "SELECT GROUP_CONCAT(order_id SEPARATOR ', ') as order_id, sum(quantity) as quantity, customer_id, ip_address, product_id, date_time, random_rick FROM orders where random_rick != 'expire' and ip_address  = '$ip_address' GROUP BY product_id";

    $query = mysql_query($sql) or die(mysql_error());

    while ($result = mysql_fetch_array($query)) {

			$order_id = $result[order_id] . ",";

			$product_id = $result[product_id];

			$quantity = $result[quantity];

			$random_rick = $result[random_rick];

			$date_time = $result[date_time];

?>





                                    <?php $view_quantity += $quantity; ?>



                                    <?php

	$sqlerersingp = "SELECT product_id, product_name,product_image,product_price_currency_id,product_prices from products where product_id = '$product_id'  GROUP BY product_id";

    $quereyeraignp = mysql_query($sqlerersingp) or die(mysql_error());

    while ($reseultersingp = mysql_fetch_array($quereyeraignp)) {

	    $product_idd = $reseultersingp['product_id'];

		 $product_name = $reseultersingp['product_name'];

		  $product_image = $reseultersingp['product_image'];

		   $product_price_currency_id = $reseultersingp['product_price_currency_id'];

		    $product_prices = str_replace(',', '.', $reseultersingp['product_prices']);

	}

?>





                                        <?php $view_prices += $product_prices * $quantity; ?>









                                        <?php

	$sqlerersingcateg = "SELECT * from categories where category_id = '$category_id'";

    $quereyeraigncet = mysql_query($sqlerersingcateg) or die(mysql_error());

    while ($reseultersingcar = mysql_fetch_array($quereyeraigncet)) {

	    $category_name = $reseultersingcar['category_name'];

	}

?>









                                            <tr>

                                                <td>

                                                    <?php echo $product_name; ?>

                                                </td>

                                                <td>

                                                    <center>

                                                        <?php echo $product_prices; ?>€</center>

                                                </td>

                                                <td>

                                                    <center>

                                                        <?php echo $quantity; ?>

                                                    </center>

                                                </td>

                                                <td>

                                                    <center>

                                                        <?php echo str_replace('.', ',',number_format($product_prices * $quantity,2)); ?>€
                                                        
                                                          </center>

                                                </td>

                                            </tr>







                                            <?php } ?>





                                            <tr>

                                                <td>Sub-Total:</td>

                                                <td></td>

                                                <td>

                                                    <center>

                                                       <b> <?php  echo $view_quantity; ?></b>

                                                    </center>

                                                </td>

                                                <td>

                                                    <center>

                                                        <?php  echo str_replace('.', ',',number_format($view_prices,2)); ?>€</center>

                                                </td>

                                            </tr>





   <tr>

                                                <td>Tax</td>

                                                <td></td>

                                                <td></td>

                                                <td>

                                                   <center>0.00€</center>

                                                </td>

                                            </tr>



                                            <tr>

                                                <td>Services charges:</td>

                                                <td></td>

                                                <td></td>

                                                <td>

                                                   <center><?php  echo str_replace('.', ',',number_format((2.95),2)); ?>€</center>

                                                </td>

                                            </tr>



                                            <tr>

                                                <td><b>TOTAL:</b></td>

                                                <td></td>

                                                <td></td>

                                                <td>

                                                    <center><strong style="color:#000;"><?php  echo str_replace('.', ',',number_format($view_prices + (2.95),2)); ?>€</strong></center>

                                                </td>

                                            </tr>









                            </table>

                        </div>

                        	 <div class="row" style="    background: #ebebeb;    padding-bottom: 39px;">



                                <div class="col-md-6">





                        <?php if($customer_id != ""){ ?>









                        <h5 class="m-t-lg m-b-0 text-left center-md">2. Who do you want to send  to?</h5>





                        <br />









                        <div class="form-horizontal" role="form">







                            <?php

	$order_id = array();



	$sqlsicoallogo1 = "SELECT order_id, customer_id, ip_address, product_id FROM orders where random_rick != 'expire' and ip_address  = '$ip_address'";

    $querylinkslogo1 = mysql_query($sqlsicoallogo1) or die(mysql_error());

    while ($result1slogo = mysql_fetch_array($querylinkslogo1)) {

	$order_id[] = $result1slogo['order_id'];

	}

	$order_id1 = implode(',', $order_id);



?>

                    </div>

					

				





                                    <input type="hidden" id="order_id" name="order_id" value="<?php echo $order_id1; ?>">

                                    <input type="hidden" id="customer_id" name="customer_id" value="<?php echo $customer_id; ?>">



                                    <div class="form-group">

                                        <label for="sfEmail">Recipient's fullname</label>

                                        <input type="text" class="form-control" id="recp_name" name="recp_name" value="<?php echo $recp_name; ?>" placeholder=" e.g.  Njenga Anne  " required>

                                    </div>







                                    <div class="form-group">

                                        <label for="sfEmail">Recipient's mobile phone</label>

                                        <input type="text" class="form-control" id="mobile_number" name="phone_number" value="<?php echo $phone_number; ?>" placeholder="e.g. +237xxxxxxx" required>

                                    </div>



                                    <!--	

						<div class="form-group">

                                <label for="sfPassword">Home Address</label>

                                 <textarea type="text" class="form-control" id="home_address" name="home_address" placeholder="Enter your home address" required><?php echo $home_address; ?></textarea>

                            </div>

							-->



                                </div>



                    











                        <div class=" col-md-4 col-md-offset-2">







                            <h5 class="m-t-lg m-b-0 text-left center-md">3. Payment Methods</h5>







                            <br />





                            <input type="radio" name="payment_type" id="payment_type" value="1"> Visa <img src="images/visa-electron.png"><br />

                            <input type="radio" name="payment_type" id="payment_type" value="2" checked> Paypal  <img src="images/paypal_logo.jpg"> <br />

                            <input type="radio" name="payment_type" id="payment_type" value="3"> Bank Transfert<br />

                            <input type="radio" name="payment_type" id="payment_type" value="4" > Mobile Payement Test<br />



                            <br />

                        </div>
                        



    </div>

                                 <br />           <br />

     <div class="col-md-offset-4 col-md-4 "><input type="checkbox" name="agree" id="agree"> I read and agree to Terms and Condition of sale </div><br />
        
    

                        <br />


                            


                        <span class="btn btn-green col-md-offset-4 col-md-4 " onclick="cash_delivery()">CHECKOUT</span>



                        <!--

						 <span class="checkout_btn" onclick="cash_delivery()">CASH ON DELIVERY</span>

						 <span  class="checkout_btn" id="view_sumit">PAYPAL</span>

						 <span  class="checkout_btn" id="view_sumit1">MASTER CARD / VISA / AMERICAN EXPRESS / DISCOVER NETWORK</span>

						 

						 -->











                        <script>

                        </script>









                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="aweberform">











                            <?php

			$sqlcse = "SELECT GROUP_CONCAT(CAST(order_id as CHAR)) as order_id from orders where random_rick != 'expire' and ip_address  = '$ip_address'";

			$queryssse = mysql_query($sqlcse) or die(mysql_error());

			while ($resultsse = mysql_fetch_array($queryssse)) {

			 $order_id = $resultsse['order_id'];

			}

		?>









                                <input type="hidden" name="cmd" value="_cart">

                                <!-- change _xclick to _cart -->

                                <input type="hidden" name="upload" value="1">

                                <!-- add this line in your code -->

                                <input type="hidden" name="business" value="sales@familov.com">

                                <input type="hidden" name="currency_code" value="EUR">

                                <input type="hidden" name="first_name" value="<?php echo $username; ?>">

                                <input type="hidden" name="shipping" value="3.00">

                                <input type="hidden" name="shipping2" value="3.00">

                                <input type="hidden" name="handling_cart" value="3.00">

                                <input type="hidden" name="address1" value="<?php echo $home_address; ?>">

                                <input type="hidden" name="email" value="<?php echo $email_address; ?>">

                                <input type="hidden" name="night_phone_a" value="<?php echo $phone_number; ?>">

                                <input type="hidden" style="width:100%;" name="return" value="https://familov.com/shop/success.php?customer_id=<?php echo $customer_id; ?>&order_id=<?php echo $order_id; ?>">

                                <input type="hidden" name="cancel_return" id="cancel_return" value="https://familov.com/shop/checkout.php" />





                                <input type="hidden" name="orders" id="orders" value="<?php echo $order_id; ?>">

                                <input type="hidden" name="customer_id" id="customer_id" value="<?php echo $customer_id; ?>">







                                <?php

			$counter = 0;

			$sqlc = "SELECT * from orders where random_rick != 'expire' and ip_address  = '$ip_address'";



			$queryss = mysql_query($sqlc) or die(mysql_error());

			while ($resultss = mysql_fetch_array($queryss)) {

			 $order_id = $resultss['order_id'];

			 $i_ids = $resultss['product_id'];

			 $quantity = $resultss['quantity'];

			 $order_id = $resultss['order_id'];

			 $rowing = ++$counter;

		?>







                                    <input type="hidden" id="i_id_<?php echo $i_ids; ?>" name="i_id_<?php echo $i_ids; ?>" value="<?php echo $i_ids; ?>" />







                                    <?php

			$sqlcr = "SELECT * from products where product_id = '$i_ids'";

			$querysss = mysql_query($sqlcr) or die(mysql_error());

			while ($resultsss = mysql_fetch_array($querysss)) {

			 $product_name = $resultsss['product_name'];

			 $product_prices = $resultsss['product_prices'];

			

?>



                                        <?php $view_prices_few += $product_prices * $quantity; ?>





                                        <input type="hidden" name="quantity_<?php echo $rowing; ?>" value="<?php echo $quantity; ?>">

                                        <input type="hidden" name="item_name_<?php echo $rowing; ?>" value="<?php echo $product_name; ?>">

                                        <input type="hidden" name="amount_<?php echo $rowing; ?>" value="<?php echo str_replace(',', '.',$product_prices); ?>">



                                        <?php } ?>





                                        <?php } ?>







                                        </table>



                        </form>









                        <?php } ?>









                </div>

           

    </section>

    <!-- /End Login Section -->



    <?php include("footer.php"); ?>
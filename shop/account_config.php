<?php include("header.php"); ?>

  <section id="hero12" class="hero hero-countdown bg-img" ">
                    <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 text-center">
                                    <h1 class="text-white"><?php echo gettext("My account");?></h1>
                                   
                                    
                                    <!--<a href="#pricing6-1" class="btn btn-shadow btn-green btn-lg smooth-scroll m-b-md">RESERVE YOUR SEAT</a>-->
                                </div>
                                <div class="col-md-6 col-md-offset-3 text-white text-center">
                                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae alias perspiciatis nisi expedita reprehenderi. Sariatur asperiores adipisci et, sint incidunt.</p>-->
                                </div>
                        </div> 
                    </div> 
        </section>

<?php

	$sql_shop = "SELECT * from customers where customer_id = '$customer_id'";
    $query_shop = mysql_query($sql_shop) or die(mysql_error());
    while ($resuslt_shop = mysql_fetch_array($query_shop)) {
		$username = $resuslt_shop['username'];
		$lastname = $resuslt_shop['lastname'];
		$email_address = $resuslt_shop['email_address'];
		$password = $resuslt_shop['password'];
		$home_address = $resuslt_shop['home_address'];
		$phone_number = $resuslt_shop['phone_number'];
		$sender_number = $resuslt_shop['sender_phone'];
		$recp_name = $resuslt_shop['recp_name'];
    }
	
	
	

	
	
?>



        <!-- =========================
            LOGIN SECTION
        ============================== -->
        <section id="login" class=" p-y-lg bg-color">
            <div class="container">
                <div class="row">
					<div class="col-md-3">&nbsp;</div>
                   <div class="col-md-6">
                        <h4 class="m-t-lg m-b-0 text-left center-md"><?php echo gettext("Account Configuration");?></h4>
						<br />
                        <div class="form-horizontal" role="form">
                            <div class="form-group"  >
                                <label for="sfEmail"><?php echo gettext("First Name");?></label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" placeholder="Enter your first name" required>
                            </div>
							<div class="form-group"  >
                                <label for="sfEmail"><?php echo gettext("Last Name");?></label>
                                <input type="text" class="form-control" id="lastname" name="lastname" value="<?php $lastname=""; echo $lastname; ?>" placeholder="Enter your last name" required>
                            </div>
							 <div class="form-group">
                                <label for="sfEmail"><?php echo gettext("Email");?> </label>
                                <input type="email" class="form-control" id="email_address" disabled name="email_address" value="<?php $email_address=""; echo $email_address; ?>" placeholder="Enter your email address" required>
                            </div>
							
							
							 <div class="form-group">
                                <label for="sfSenderNumber"><?php echo gettext("Mobile Phone (for notification)");?> </label>
                                <input type="text" class="form-control" id="sender_number" name="sender_number" value="<?php $sender_number=""; echo $sender_number; ?>" placeholder="8801924674122" required>
                            </div>
														
							
							
						<div class="form-group">
                                <label for="sfPassword"><?php echo gettext("Address");?></label>
                                 <textarea type="text" class="form-control" id="home_address" name="home_address" placeholder="<?php echo gettext("Enter your home address");?>" required><?php $home_address=""; echo $home_address; ?></textarea>
                            </div>
					
					
					
					
							
                            <div class="form-group">
								<button type="submit"  onclick="valiDaccount()" class="btn btn-blue"><?php echo gettext("UPDATE");?></button>
                            </div>
                        </div>
                    </div>
					<div class="col-md-3">&nbsp;</div>
                </div>
            </div>
        </section>
        <!-- /End Login Section -->

  		<?php include("footer.php"); ?>	
		
		
		
<?php $country_id=""; if($country_id != 0  && $country_id != ""){ ?>
<input type="text" id="country_idd" name="country_idd" value="<?php echo $country_id; ?>">
<script type="text/javascript">
jQuery(document).ready(function()
{
			var country_id=jQuery('#country_idd').val(<?php echo $country_id; ?>);
			var userdata= "country_id="+country_id;
			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"generate_city.php",
				cache:false,
				success:function(msg){
						$('#view_city').html(msg);
				}
			});	
});
</script>
<?php } ?>
		
		
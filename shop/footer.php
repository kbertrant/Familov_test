   
		
		 <!-- =========================
             FOOTER
        ============================== -->
        
        <div class="row " style="margin-right:0px !important;margin-left:0px!important; background-color:#90D23C;">
        
   
        <div class="container-fluid container footer">

	<div class="row-padding">
	<div class="row footer-wrapper">
		<div class="col-sm-3">
			<div class="height-15"></div>

		
		
			<div class="footer-">
			    
			        <b>Familov </b><br/>
                Innovation Campus <br/>
                Altenkesseler Str. 17 / A4<br>
                DE-66115 Saarbrücken<br>
                <!--<a href="tel:"><i class="fa fa-phone"></i> +49 (0) 16</a><br>-->
                <a href="mailto:hello@familov.com"><i class="fa fa-envelope"></i> hello@familov.com</a>
            	
			</div>
			<!--<div class="footer-payoff" <p><i class="fa fa-envellope text-black"></i> hello@familov.com<br></p></div>-->
		
		</div>
		<div class="col-sm-3">	
			<div class="height-15"></div>
			<!--	<a href="signup.php">Get started</a>-->
					<a href="how.php">How it works</a>
				<a href="faq.php">Support</a>
				<a href="terms.php">Terms</a>
			<a href="privacy.php">Privacy</a>

		
		
			
		</div>
		<div class="col-sm-3">
			<div class="height-15"></div>
            	<a href="abouts.php">About</a>
            <!--	<a href="why.php">Why us ?</a>-->
			<a href="contact.php">Contact</a>
			<a href="press.php">Press</a>
			<a href="job.php">Jobs</a>
			
			
			
		</div>
	    	<div class="col-sm-3">
			<div class="height-15"></div>

			<a href="merchant.php">For Businesses</a>
		<!--	<a href="#">Seller</a>-->
			
		
		<!--	<a href=#>Investors</a>-->
			  <div class="footer-social social-btn m-t-md">
						    
                            <a href="https://www.facebook.com/Familover/" target="_blank" class="sb-dark">  <i class="icon-facebook"></i></a>
                        
                            <a href="https://twitter.com/familovly" target="_blank" class="sb-dark">  <i class="icon-twitter"></i></a><img width="100%" src="images/secure.png">
                         
                        </div>
		
				<br/>
			<div class="height-15"></div>
		
			
	</div>
</div>	<div class="row-padding">
		<div class="row footer-wrapper">
			<div class="col-sm-6">
				<div class="footer-payoff">2016 © Familov.com  </div>
			
			</div>
			<div class="col-sm-6">
				<div class="footer-payoffX">	<div class="footer-payoffX">Made with <i class="icon-heart"></i></a> in Saarbrücken  </div>  </div>
			
			</div>
		</div>
	</div>
</div>

    </div><!-- /End Main Conteiner -->
</div>

    <!-- Back to Top Button -->
    <a href="#" class="top" style="background-color:#525e6c;">Top</a>


    <!-- =========================
         SCRIPTS 
    ============================== -->
    <script src="js/plugins/jquery1.11.2.min.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/jquery.easing.1.3.min.js"></script>
    <script src="js/plugins/jquery.countTo.js"></script>
    <!--<script src="js/plugins/jquery.formchimp.min.js"></script>-->
    <script src="js/plugins/jquery.jCounter-0.1.4.js"></script>
    <script src="js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins/jquery.vide.min.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>
    <script src="js/plugins/spectragram.min.js"></script>
    <script src="js/plugins/twitterFetcher_min.js"></script>
    <script src="js/plugins/wow.min.js"></script>
    <script src="js/plugins/picker.js"></script>
    <script src="js/plugins/picker.date.js"></script>	
    <!-- Custom Script -->
    <script src="js/custom.js"></script>
	<script src="js/intlTelInput.js"></script>

    <script type="text/javascript">
        $("#mailchimpForm2").formchimp(); 
    </script>

    
	
	<script type="text/javascript" src="jquery.form.js"></script>
	
	
		
<script type="text/javascript">
//for initiating calling code    
$("#mobile_number").intlTelInput({
      utilsScript: "js/utils.js"
    });
$(".dropdown-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});

</script>
	
	
	
	
	
	
<script type="text/javascript">
function phonenumber(inputtxt) {
  var phoneno = "^\\\+[0-9]{10,13}$";
  if(inputtxt.match(phoneno)) {
    return true;
  }  
  else {
	      return false;
  }
}
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
jQuery(document).ready(function(){
	//password reset form validation
		$('#pswreset_requestform').on('submit', function() {
   var email= $('#email-input').val();
    if(!validateEmail(email)){
		$('#email_error').text("Email not valid!");
        return false;
	}
});

		$('#password_resetform').on('submit', function() {
   var psw= $('#psw').val();
   var confpsw= $('#confirmpsw').val();
    if(psw.length<8){
		$('#password_error').text("Password cann't be less than 8 characters!");
        return false;
	}
	else if(psw!=confpsw){
		$('#password_error').text("Password doesn't same!");
		return false;
	}
});
	/////////////////////////////////
	jQuery('#send_user').click(function(){
	var fname=jQuery('#fname').val();
	var lname=jQuery('#lname').val();
	var email_address=jQuery('#email_address').val();
	var password=jQuery('#password').val();
	var repassword=jQuery('#repassword').val();
	var mobile_number= $("#mobile_number").intlTelInput("getNumber");	/*
	var checked = $('[name="if_vendor"]').is(':checked');
	if(checked == true){
		
		var if_vendor = "1";
	}else{
		
		var if_vendor = "0";
		
	}
	*/
	/*
	Below code used when sign up clicked
	*/
	
	//validation check for signup field
	$('#fname_error').text("");
	$('#lname_error').text("");
	$('#email_error').text("");
	$('#mobile_error').text("");
	$('#password_error').text("");
	$('#repassword_error').text("");
	var error=false;
		if(fname==""){
			$('#fname_error').text("First name cann't be empty!");
			error=true;
			}
		if(lname==""){
			$('#lname_error').text("Last name cann't be empty!");
			error=true;
			}
		if(email_address==""){
			$('#email_error').text("Email cann't be empty!");
			error=true;
			}
			else{
			if(!validateEmail(email_address)){
			$('#email_error').text("Email not valid!");
			error=true;
			}
			}
			if(mobile_number!==""){
				if(!phonenumber(mobile_number)){
					$('#mobile_error').text("Mobile number not valid!");
					error=true;
				}
			}
		if(password==""){
			$('#password_error').text("Password cann't be empty!");
			error=true;
			}
		else{
		if(password.length<8){
		$('#password_error').text("Password cann't be less than 8 characters!");
		error=true;
			}
		}
		if(repassword==""){
			$('#repassword_error').text("Repassword cann't be empty!");
			error=true;
			}
		else{
		if(password!==repassword){
			$('#repassword_error').text("Repassword doesn't match!");
			error=true;
			}
		}
		//if(mobile_number=="")
		//	jQuery('#mobile_error').text("Please enter your first name!");
		if(error==true)
		return;
		
//when field data validate, post ajax call for make registration
		
		var userdata= "username="+fname+"&lastname="+lname+"&email_address="+email_address+"&password="+password+"&mobile_number="+mobile_number;

			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"insert_user.php",
				cache:false,
				success:function(msg){
					//validation check if the user email already registered
				if(msg == 1) {
				$('#email_error').text("Email already used. Log in to your existing account!");
				jQuery('#email_address').focus();
				}
//if user email not exist, after completion the registration process
				else{
						jQuery('.error').hide();
							jQuery('#username').attr('style','border:1px solid #d4d9dd;');
							jQuery('#email_address').attr('style','border:1px solid #d4d9dd;');
							jQuery('#password').attr('style','border:1px solid #d4d9dd;');
						jQuery('.success').html('<strong>Message :</strong> Successfully Register');
						alert("Successfully Register");
						window.location='login.php';
					}
				}
			});	
		
	});
});

</script>


<script type="text/javascript">
function checkLoginEnter(e) {
    evt = e || window.event;
    var keyPressed = evt.which || evt.keyCode;
    if (keyPressed == 13) //ENTER IS PRESSED
        validLogin();
};

function validLogin(email_address,password){
	var error_status=false;
	$('#email_error').text("");
	$('#password_error').text("");
	  if(email_address==""){
		  $('#email_error').text("Email address cann't be empty!");
		  error_status=true;
	  }
	  else{
		  if(!validateEmail(email_address)){
			  $('#email_error').text("Invalid email address!");
		  error_status=true;
		  }
	  }
	  if(password==""){
		  $('#password_error').text("Password cann't be empty!");
		  error_status=true;
	  }
	  if(error_status){
		  return;
	  }
      var dataString = 'email_address='+ email_address + '&password='+ password;
      jQuery.ajax({
      type: "POST",
      url: "processed.php",
      data: dataString,
      cache: false,
      success: function(result){
               var result=trim(result);
               if(result=='correct'){
                     window.location='index.php';
               }else{
					 jQuery('#email_address').attr('style','border:1px solid red;');
					 jQuery('#password').attr('style','border:1px solid red;');
					  jQuery("#errorMessage").html(result);

               }
      }
      });
}

function validLogin(){
	var error_status=false;
	$('#email_error').text("");
	$('#password_error').text("");
      var email_address=jQuery('#email_address').val();
      var password=jQuery('#password').val();
	  if(email_address==""){
		  $('#email_error').text("Email address cann't be empty!");
		  error_status=true;
	  }
	  else{
		  if(!validateEmail(email_address)){
			  $('#email_error').text("Invalid email address!");
		  error_status=true;
		  }
	  }
	  if(password==""){
		  $('#password_error').text("Password cann't be empty!");
		  error_status=true;
	  }
	  if(error_status){
		  return;
	  }
      var dataString = 'email_address='+ email_address + '&password='+ password;
      jQuery.ajax({
      type: "POST",
      url: "processed.php",
      data: dataString,
      cache: false,
      success: function(result){
               var result=trim(result);
               if(result=='correct'){
                     window.location='index.php';
               }else{
					 jQuery('#email_address').attr('style','border:1px solid red;');
					 jQuery('#password').attr('style','border:1px solid red;');
					  jQuery("#errorMessage").html(result);

               }
      }
      });
}

function trim(str){
     var str=str.replace(/^\s+|\s+jQuery/,'');
     return str;
}
</script>






<script type="text/javascript">
function valiDShop(){
	var shop_name=jQuery('#shop_name').val();
	var shop_address=jQuery('#shop_address').val();
	var shop_logo=jQuery('#shop_logo').val();
	var shop_banner=jQuery('#shop_banner').val();
	var country_id=jQuery('#country_id').val();
	var city_id=jQuery('#city_id').val();
	
	
	
		if(shop_name=="" || shop_address=="" || country_id=="" || city_id==""){
			jQuery('#shop_name').attr('style','border:1px solid red;');
			jQuery('#shop_address').attr('style','border:1px solid red;');
			jQuery('#country_id').attr('style','border:1px solid red;');
			jQuery('#city_id').attr('style','border:1px solid red;');
		}else{
			var userdata= "shop_name="+shop_name+"&shop_address="+shop_address+"&shop_logo="+shop_logo+"&shop_banner="+shop_banner+"&country_id="+country_id+"&city_id="+city_id;
			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"insert_shop.php",
				cache:false,
				success:function(msg){
						jQuery('#shop_name').attr('style','border:1px solid #d4d9dd;');
						jQuery('#shop_address').attr('style','border:1px solid #d4d9dd;');
						jQuery('#country_id').attr('style','border:1px solid #d4d9dd;');
						jQuery('#city_id').attr('style','border:1px solid #d4d9dd;');
						alert("Successfully Updated.");
						window.location='shop_settings.php';
				}
			});	
		}
}
</script>





<script type="text/javascript">
function valiDaccount(){
	var username=jQuery('#username').val();
	var lastname=jQuery('#lastname').val();
	var sender_number=jQuery('#sender_number').val();
	var home_address=jQuery('#home_address').val();

		if(username=="" ||  sender_number=="" || home_address==""){
			jQuery('#username').attr('style','border:1px solid red;');
			jQuery('#sender_number').attr('style','border:1px solid red;');
			jQuery('#home_address').attr('style','border:1px solid red;');
		}else{
			var userdata= "username="+username+"&lastname="+lastname+"&sender_number="+sender_number+"&home_address="+home_address;
			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"insert_account.php",
				cache:false,
				success:function(msg){
						jQuery('#username').attr('style','border:1px solid #d4d9dd;');
						jQuery('#sender_number').attr('style','border:1px solid #d4d9dd;');
						jQuery('#home_address').attr('style','border:1px solid #d4d9dd;');
						alert(msg+"\nSuccessfully Updated.");
						window.location='account_config.php';
				}
			});	
		}
}
</script>






<script type="text/javascript">
function cash_delivery(){
	var order_id=jQuery('#order_id').val();
	var phone_number=jQuery('#phone_number').val();
	//var home_address=jQuery('#home_address').val();
	var customer_id=jQuery('#customer_id').val();
	var recp_name=jQuery('#recp_name').val();
	var security = $('input[name="agree"]').prop('checked');
	var js_status = $('input[name=payment_type]:checked').val()
	
		if(phone_number=="" || recp_name==""){
			jQuery('#phone_number').attr('style','border:1px solid red;');
			jQuery('#recp_name').attr('style','border:1px solid red;');
		}else if(security != true){
			alert("Please indicate that you have read and agree to the Terms and Conditions");
		}else{
			
				
	
			if(js_status == '1'){
				
				window.setTimeout(function() {
					jQuery('#aweberform').submit();
				}, 3000);
				
			}else if(js_status == '2'){
				
				window.setTimeout(function() {
					jQuery('#aweberform').submit();
				}, 3000);
				
			}else if(js_status == '3'){
				
				window.setTimeout(function() {
					jQuery('#aweberform').submit();
				}, 3000);
				
			}else if(js_status == '4'){
				
				var userdata= "phone_number="+phone_number+"&recp_name="+recp_name+"&order_id="+order_id+"&customer_id="+customer_id;
				window.location='success.php?'+userdata;
				
			}
	

		
			//window.location='success.php?'+userdata;
			/*
			var userdata= "phone_number="+phone_number+"&home_address="+home_address+"&order_id="+order_id;
			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"insert_account_and_checkout.php",
				cache:false,
				success:function(msg){
						jQuery('#phone_number').attr('style','border:1px solid #d4d9dd;');
						jQuery('#home_address').attr('style','border:1px solid #d4d9dd;');
						alert("Your order has been placed successfully!");
						window.location='account_config.php';
				}
			});	*/
		}
}
</script>












<script type="text/javascript">
jQuery(document).ready(function() {
	
	
jQuery('#view_sumit').click(function(){
		window.setTimeout(function() {
			jQuery('#aweberform').submit();
		}, 3000);
});



jQuery('#view_sumit1').click(function(){
		window.setTimeout(function() {
			jQuery('#aweberform').submit();
		}, 3000);
});


});
</script>







<script type="text/javascript">
jQuery(document).ready(function()
{
jQuery('#shop_logo_temp').change(function()
{
jQuery("#preview").html('');
jQuery("#preview").html('<img src="loading.gif" alt="Uploading...."/>');
jQuery("#imageform").ajaxForm(
{
target: '#preview'
}).submit();
});
});
</script>





<script type="text/javascript">
jQuery(document).ready(function()
{
jQuery('#shop_banner_temp').change(function()
{
jQuery("#preview1").html('');
jQuery("#preview1").html('<img src="loading.gif" alt="Uploading...."/>');
jQuery("#imageform1").ajaxForm(
{
target: '#preview1'
}).submit();
});
});
</script>





<script type="text/javascript">
function add_Category(){
	var category_name=jQuery('#category_name').val();
	var category_id=jQuery('#category_id').val();
		if(category_name==""){
			jQuery('#category_name').attr('style','border:1px solid red;');
		}else{
			var userdata= "category_name="+category_name+"&category_id="+category_id;
			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"insert_category.php",
				cache:false,
				success:function(msg){
						jQuery('#category_name').attr('style','border:1px solid #d4d9dd;');
						alert("Successfully Added.");
						$('#category_name').val('');
						window.location='view_categories.php';
						
				}
			});	
		}
}
</script>





<script type="text/javascript">
function add_product(){
	var product_name=jQuery('#product_name').val();
	var product_id=jQuery('#product_id').val();
	var category_id=jQuery('#category_id').val();
	var product_price_currency_id=jQuery('#product_price_currency_id').val();
	var product_prices=jQuery('#product_prices').val();
	var product_image=jQuery('#product_image').val();
	var product_short_desc=jQuery('#product_short_desc').val();
	var product_desc = CKEDITOR.instances['product_desc'].getData();
	
	
		if(product_name=="" || product_price_currency_id=="" || product_prices=="" || product_short_desc=="" || category_id==""){
			jQuery('#product_name').attr('style','border:1px solid red;');
			jQuery('#category_id').attr('style','border:1px solid red;');
			jQuery('#product_price_currency_id').attr('style','border:1px solid red;');
			jQuery('#product_prices').attr('style','border:1px solid red;');
			jQuery('#product_short_desc').attr('style','border:1px solid red;');
		}else{
			var userdata= "product_name="+product_name+"&product_price_currency_id="+product_price_currency_id+"&product_prices="+product_prices+"&product_short_desc="+product_short_desc+"&product_desc="+product_desc+"&product_image="+product_image+"&category_id="+category_id+"&product_id="+product_id;
			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"insert_product.php",
				cache:false,
				success:function(msg){
						jQuery('#product_name').attr('style','border:1px solid #d4d9dd;');
						jQuery('#product_price_currency_id').attr('style','border:1px solid #d4d9dd;');
						jQuery('#product_prices').attr('style','border:1px solid #d4d9dd;');
						jQuery('#product_short_desc').attr('style','border:1px solid #d4d9dd;');
						alert("Successfully Added.");
						window.location='view_products.php';
						
				}
			});	
		}
}
</script>


<script type="text/javascript">
jQuery(document).ready(function()
{
jQuery('#product_image_temp').change(function()
{
jQuery("#preview2").html('');
jQuery("#preview2").html('<img src="loading.gif" alt="Uploading...."/>');
jQuery("#imageform2").ajaxForm(
{
target: '#preview2'
}).submit();
});
});
</script>






<script type="text/javascript">
/*

jQuery(document).ready(function()
{
jQuery('#country_id').change(function()
{

	var country_id=jQuery('#country_id').val();
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
});
*/




$("#country_id").change(function() {

var country_id=$('#country_id').val();
var userdata= "country_id="+country_id;
$.ajax({ url: "generate_city.php",
type: 'post',
data:userdata,
cache: false,
success: function(output) {
$("#city_id").html(output);
}
}); 
});




$("#city_id").change(function() {

var city_id=$('#city_id').val();
var country_id=$('#country_id').val();
var userdata= "city_id="+city_id+"&country_id="+country_id;
$.ajax({ url: "generate_shop.php",
type: 'post',
data:userdata,
cache: false,
success: function(output) {
$("#shop_id").html(output);
}
}); 
});




</script>




<?php

if($country_id != "" && $city_id != "" && $shop_id != ""){
?>
<input type="hidden" id="shop_id" name="shop_id" value="<?php echo $shop_id; ?>">
<input type="hidden" id="country_id" name="country_id" value="<?php echo $country_id; ?>">
<input type="hidden" id="city_id" name="city_id" value="<?php echo $city_id; ?>">

<?php	
	
}
	?>

	
<?php
if($_GET['category_id'] != ""){
	$category_id = $_GET['category_id'];
?>

<input type="hidden" name="category_id" id="category_id" value="<?php echo $category_id; ?>">
<script type="text/javascript">
jQuery(document).ready(function()
{
	view_products();
});



function view_products(){
			var shop_id=jQuery('#shop_id').val();
			var country_id=jQuery('#country_id').val();
			var city_id=jQuery('#city_id').val();
			var category_id=jQuery('#category_id').val();
			
			var userdata= "shop_id="+shop_id+"&country_id="+country_id+"&city_id="+city_id+"&category_id="+category_id;
			

			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"view_products_total.php",
				cache:false,
				success:function(msg){
						$('#view_products_total').html(msg);	
				}
	});	
}
	

</script>

<?php
}else{
?>


<script type="text/javascript">
jQuery(document).ready(function()
{
	view_products();
});



function view_products(){
			var shop_id=jQuery('#shop_id').val();
			var country_id=jQuery('#country_id').val();
			var city_id=jQuery('#city_id').val();
			
			var userdata= "shop_id="+shop_id+"&country_id="+country_id+"&city_id="+city_id;
			

			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"view_products_total.php",
				cache:false,
				success:function(msg){
						$('#view_products_total').html(msg);	
				}
	});	
}
	

</script>

<?php }?>


<script type="text/javascript">
/*
jQuery(document).ready(function()
{
	view_products();
});



function view_products(){
			var shop_id=jQuery('#shop_id').val();
			var country_id=jQuery('#country_id').val();
			var city_id=jQuery('#city_id').val();
			
			var userdata= "shop_id="+shop_id+"&country_id="+country_id+"&city_id="+city_id;
			

			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"view_products_total.php",
				cache:false,
				success:function(msg){
						$('#view_products_total').html(msg);	
				}
	});	
}
	*/

</script>



<script type="text/javascript">
	
	$('#minus').click(function(){
		var quantity=$('#quantity').val();
		if(quantity > 1){
			var userdata= "quantity="+quantity;
				$.ajax({
				type:"post",
				data:userdata,
				url: 'view_minus.php',
				success: function(result)
				{
				   var quantity=$('#quantity').val(result);
				}
			});	
		}
	});
	
	
	
		
	$('#plus').click(function(){
		var quantity=$('#quantity').val();
			var userdata= "quantity="+quantity;
				$.ajax({
				type:"post",
				data:userdata,
				url: 'view_plus.php',
				success: function(result)
				{
				   var quantity=$('#quantity').val(result);
				}
			});	
	});

	
	$('#search_shop').click(function(){
		var country_id=$('#country_id').val();
		var city_id=$('#city_id').val();
		var shop_id=$('#shop_id').val();
		
		if(country_id=="" || city_id=="" || shop_id==""){
			jQuery('#country_id').attr('style','border:1px solid red;');
			jQuery('#city_id').attr('style','border:1px solid red;');
			jQuery('#shop_id').attr('style','border:1px solid red;');
		}else{
			
			var userdata1= "country_id="+country_id;
			var userdata= "/"+shop_id+"/"+country_id+"/"+city_id;
			//var userdata= "shop_id="+shop_id+"&country_id="+country_id+"&city_id="+city_id;
			
			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"check_cart.php",
				cache:false,
				success:function(msg){
						
						var return_cart = msg;
						if(return_cart > 0){
							//alert(return_cart);
							

							var r = confirm("If you change the shop you will loose your cart");
								if (r == true) {

										$.ajax({
										type:"post",
										data:userdata1,
										url: 'refresh_cart.php',
										success: function(result){
										    var userdata= "/"+country_id+"/"+city_id+"/"+shop_id;
											window.location='product'+ userdata;
											//var userdata= "country_id="+country_id+"&city_id="+city_id+"&shop_id="+shop_id;
											//window.location='product.php?'+ userdata;
											}
										});	
										
								} else {
									window.location='view_cart.php';
								} 



						}else{
						    var userdata78= "/"+country_id+"/"+city_id+"/"+shop_id;
							window.location='product'+ userdata78;
						//	var userdata78= "country_id="+country_id+"&city_id="+city_id+"&shop_id="+shop_id;
						//	window.location='product.php?'+ userdata78;
						}
						
						
						
	
				}
			});	
			
	
			
			
			
			/*
			$.ajax({
				type:"post",
				data:userdata1,
				url: 'refresh_cart.php',
				success: function(result){
					var userdata= "country_id="+country_id+"&city_id="+city_id+"&shop_id="+shop_id;
					//window.location='product.php?'+ userdata;
				}
			});	
			
			
			*/
			
			
			
			
			
			
			
			
		}
			
			/*	$.ajax({
				type:"post",
				data:userdata,
				url: 'view_plus.php',
				success: function(result)
				{
				   var quantity=$('#quantity').val(result);
				}
			});	*/
			
			
			
			
	});
	
	
	function check_cart(){
			var shop_id=jQuery('#shop_id').val();
			var country_id=jQuery('#country_id').val();
			var city_id=jQuery('#city_id').val();
			var userdata= "shop_id="+shop_id+"&country_id="+country_id+"&city_id="+city_id;
			
}
	
	
	
</script>





<?php
	$sql = "SELECT GROUP_CONCAT(order_id SEPARATOR ', ') as order_id, sum(quantity) as quantity, customer_id, ip_address, product_id, date_time, random_rick FROM orders where random_rick != 'expire' and ip_address  = '$ip_address' GROUP BY product_id";
    $query = mysql_query($sql) or die(mysql_error());
    while ($result = mysql_fetch_array($query)) {
			$product_id = $result[product_id];
			$quantity = $result[quantity];
?>	


<input type="hidden" id="product_id_<?php echo $product_id; ?>" name="product_id_<?php echo $product_id; ?>" value="<?php echo $product_id; ?>">

<script type="text/javascript">
	
	$('#minus1_<?php echo $product_id; ?>').click(function(){
		var quantity=$('#cart_quantity_<?php echo $product_id; ?>').val();
		var product_id=$('#product_id_<?php echo $product_id; ?>').val();
		if(quantity > 1){
			var userdata= "quantity="+quantity+"&product_id="+product_id;
				$.ajax({
				type:"post",
				data:userdata,
				url: 'subtract_quantity.php',
				success: function(result)
				{
				   window.location='view_cart.php';
				}
			});	
		}
	});
	
	
	
		
	$('#plus1_<?php echo $product_id; ?>').click(function(){
		var quantity=$('#cart_quantity_<?php echo $product_id; ?>').val();
		var product_id=$('#product_id_<?php echo $product_id; ?>').val();
			var userdata= "quantity="+quantity+"&product_id="+product_id;
				$.ajax({
				type:"post",
				data:userdata,
				url: 'add_quantity.php',
				success: function(result)
				{
				   window.location='view_cart.php';
				}
			});	
	});

	
	
</script>




	<?php } ?>




<?php	
	$sql78categ = "SELECT * from categories";
    $queryecateg = mysql_query($sql78categ) or die(mysql_error());
    while ($resusltdcateg = mysql_fetch_array($queryecateg)) {
		$category_name = $resusltdcateg['category_name'];
		$category_id = $resusltdcateg['category_id'];
  

?>					

<input type="hidden" id="category_id_<?php echo $category_id; ?>" name="category_id_<?php echo $category_id; ?>" value="<?php echo $category_id; ?>">

<script type="text/javascript">
jQuery(document).ready(function()
{
jQuery('#view_categ_<?php echo $category_id; ?>').click(function(){
jQuery("#preview24").html('<img src="loading.gif" alt="Uploading...."/>');
var category_id=jQuery('#category_id_<?php echo $category_id; ?>').val();

			var shop_id=jQuery('#shop_id').val();
			var country_id=jQuery('#country_id').val();
			var city_id=jQuery('#city_id').val();
			
			
			
			var userdata= "category_id="+category_id+"&shop_id="+shop_id+"&country_id="+country_id+"&city_id="+city_id;
			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"view_products_total.php",
				cache:false,
				success:function(msg){
						
						
						$('#view_products_total').html(msg);	
						jQuery("#preview24").html('');
				}
	});	

});
});
</script>


	<?php } ?>


	
	
	
	
	
	
	
	
	
	
	
	
	
<?php	
if($country_id != "" && $city_id != "" && $shop_id != ""){
	$sql78categ = "SELECT * from products where shop_id = '$shop_id'";
}else{
	$sql78categ = "SELECT * from products where shop_id = '$shop_id'";
}
    $queryecateg = mysql_query($sql78categ) or die(mysql_error());
    while ($resusltdcateg = mysql_fetch_array($queryecateg)) {
		$product_id = $resusltdcateg['product_id'];
		$product_name = $resusltdcateg['product_name'];
  

?>					

<input type="hidden" id="product_id_<?php echo $product_id; ?>" name="product_id_<?php echo $product_id; ?>" value="<?php echo $product_id; ?>">

<script type="text/javascript">
jQuery(document).ready(function()
{
	
jQuery('#add_cart_<?php echo $product_id; ?>').click(function(){
jQuery("#preview245_<?php echo $product_id; ?>").html('<img src="loading.gif" alt="Uploading...."/>');
var product_id=jQuery('#product_id_<?php echo $product_id; ?>').val();
var quantity=jQuery('.view_quty_<?php echo $product_id; ?>').val();


			var userdata= "product_id="+product_id+"&quantity="+quantity;
		
			jQuery.ajax({
				type:"post",
				data:userdata,
				url:"insert_cart.php",
				cache:false,
				success:function(msg){
						$('#view_cart_text_<?php echo $product_id; ?>').html(msg);	
						jQuery("#preview245_<?php echo $product_id; ?>").html('');
				}
	});	


});

});
</script>


	<?php } ?>
	
	
	
	
	
	
	


</body>
</html>
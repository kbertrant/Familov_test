<?php include("header.php"); ?>



<?php

	$sql_shop = "SELECT * from customers where customer_id = '$customer_id'";
    $query_shop = mysql_query($sql_shop) or die(mysql_error());
    while ($resuslt_shop = mysql_fetch_array($query_shop)) {
		$shop_name = $resuslt_shop['shop_name'];
		$shop_address = $resuslt_shop['shop_address'];
		$shop_logo = $resuslt_shop['shop_logo'];
		$shop_banner = $resuslt_shop['shop_banner'];
		
		/*$country_id = $resuslt_shop['country_id'];
		$city_id = $resuslt_shop['city_id'];
		*/
    }
	
	
	

	
	
?>



        <!-- =========================
            LOGIN SECTION
        ============================== -->
        <section id="login" class="login p-y-lg bg-color">
            <div class="container">
                <div class="row">
					<div class="col-md-3">&nbsp;</div>
                   <div class="col-md-6">
                        <h4 class="m-t-lg m-b-0 text-left center-md">Shop Information</h4>
						<br />
                        <div class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="sfEmail">Shop Name</label>
                                <input type="email" class="form-control" id="shop_name" name="shop_name" value="<?php echo $shop_name; ?>" placeholder="Enter your shop name" required>
                            </div>
                            <div class="form-group">
                                <label for="sfPassword">Shop Address</label>
                                 <textarea type="email" class="form-control" id="shop_address" name="shop_address" placeholder="Enter your shop address" required><?php echo $shop_address; ?></textarea>
                            </div>
							
							
							  <div class="form-group">
                                <label for="sfEmail">Shop Country</label>
<select name="country_id" id="country_id" class="form-control" required>
<option  value="" selected="selected">Select a Country</option>
<?php
$query_disp="SELECT * FROM country ORDER BY country_name asc";
$result_disp = mysql_query($query_disp);
while($query_data = mysql_fetch_array($result_disp))
{
?>
<option value="<?php echo $query_data["country_id"]; ?>"<?php if ($query_data["country_id"]==$country_id) {?> selected="selected"<?php } ?>><?php echo $query_data["country_name"]; ?></option>
<?php } ?>
</select>
                            </div>
							
	


	
							  <div class="form-group">
                                <label for="sfEmail">Shop City</label>
								
								
<select name="city_id" id="city_id" class="form-control">
<option value="" selected="selected">Select a City</option>
</select>




                            </div>
							
							
							
							
							<div class="form-group">
                                <label for="sfPassword">Shop LOGO</label>
                                <!-- <input type="file" class="form-control" id="shop_logo" name="shop_logo" required>-->
								 
								 
								 
								 


<form id="imageform" method="post" enctype="multipart/form-data" action='shop_logo.php'>
<input type="file" class="form-control" name="shop_logo_temp" id="shop_logo_temp" />
</form>

<div id='preview'></div>

<?php if($shop_logo != "" && $shop_logo != "undefined"){ ?>
<br /><img src="shops/<?php echo $shop_logo; ?>"/>
<?php } ?>




                            </div>
							
							<div class="form-group">
                                <label for="sfPassword">Shop Banner</label>

								
								
								
<form id="imageform1" method="post" enctype="multipart/form-data" action='shop_banner.php'>
<input type="file" class="form-control" name="shop_banner_temp" id="shop_banner_temp" />
</form>

<div id='preview1'></div>


<?php if($shop_banner != "" && $shop_banner != "undefined"){ ?>
<br /><img src="shops/<?php echo $shop_banner; ?>" style="width:100%;"/>
<?php } ?>

                            </div>
							
							
                            <!--<div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Remember Me
                                    </label>
                                </div>
                            </div>-->
                            <div class="form-group">
								<button type="submit"  onclick="valiDShop()" class="btn btn-blue">UPDATE</button>
                            </div>
                        </div>
                    </div>
					<div class="col-md-3">&nbsp;</div>
                </div>
            </div>
        </section>
        <!-- /End Login Section -->

  		<?php include("footer.php"); ?>	
		
		
		
<?php if($country_id != 0  && $country_id != ""){ ?>
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
		
		
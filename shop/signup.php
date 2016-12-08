<?php include("header.php");
require_once "../localization.php"?>





        <!-- =========================
            SIGNUP SECTION
        ============================== -->
        <section id="login" class="login p-y-xlg bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-5 col-lg-offset-4 text-center subscription">
                          <h4 class="m-t-md m-b-0 text-center center-md  m-b-md " style="font-weight:400"><?php echo gettext("Create your account.");?> <b><?php echo gettext(" It's Free.");?></b></h4>
                         <div class="free-message"><i class="fa fa-gift" aria-hidden="true"></i> <b><?php echo gettext("FREE");?></b> <?php echo gettext("charge  on your first order over");?> <b> €10</b>*</div>
                      
                        
                      
						<div class="error"></div>
						<div class="success"></div>
								
                        <div class="form-horizontal" id="signupForm" role="form">
                            
                     
                                
                                
                            <div class="form-group" style="width: 49.5%;    float: left;">
                               <div class="error_message"><strong id="fname_error"></strong></div>
                                 <label for=""><?php echo gettext(" First  Name");?></label>
                                <input type="text" class="form-control" id="fname" name="username" placeholder="e.g. Anne " required>
								
                            </div>
							 <div class="form-group" style="width: 49.5%;    float: right;">
							     
                               <div class="error_message"><strong id="lname_error"></strong></div>
                                <label for=""><?php echo gettext("Last Name");?></label>
                                <input type="text" class="form-control" id="lname" name="lastname" placeholder="e.g. Njenga" required>
                            </div>
                            <div class="form-group " style="clear:both">
                               <div class="error_message"><strong id="email_error"></strong></div>
                                <label for=""><?php echo gettext("Email");?></label>
                                <input type="email" class="form-control" id="email_address" name="email_address" placeholder=" e.g. name@example.com" required>
                                
                            </div>
                            <div class="form-group">
                               <div class="error_message"><strong id="mobile_error"></strong></div>
                                <label for=""><?php echo gettext("Mobile Phone (For notification)");?></label>
                                <input type="tel" class="form-control" id="mobile_number" name="mobile_number" placeholder="+49176xxxxxxxx ">
                            </div>
                            <div class="form-group" style="width: 49.5%;    float: left;">
                                <div class="error_message"><strong id="password_error"></strong></div>
                                 <label for=""><?php echo gettext("Password");?></label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
							<div class="form-group" style="width: 49.5%;    float: right;">
                                <div class="error_message"><strong id="repassword_error"></strong></div>
                                 <label for=""><?php echo gettext("Re-Password");?></label>
                                <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Re-Password" required>
                            </div>
							
							<!--
							<div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="if_vendor" name="if_vendor">Apply to become a vendor?
                                    </label>
                                </div>
                            </div>
							-->
							
							
                           <div class="form-group" style="clear:both">
								<button type="submit" style="height:50px" id="send_user" name="send_user" class="btn btn-blue"><?php echo gettext("Create my Familov account");?></button>
                            </div>
                        </div>
                        <p class="terms "><?php echo gettext("By clicking Signup you agree to the");?> <a href="terms.php" class="f-w-700" style="color:#529800">Terms</a><?php echo gettext(" and");?> <a href="privacy.php" class="f-w-700" style="color:#529800">Privacy Policy</a>.</p>
                        <p class="terms"><?php echo gettext(" Already have a Familov account? ");?><a href="login.php" class="f-w-700" style="color:#529800"><?php echo gettext("Sign in");?></a>.</p><br/>
                    </div>
                </div>
               
            </div>
        </section>
        <!-- /End Signup Section -->


 		<?php include("footer.php"); ?>	
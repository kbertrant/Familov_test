<?php include("header.php"); ?>





        <!-- =========================
            SIGNUP SECTION
        ============================== -->
        <section id="login" class="login p-y-xlg bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-5 col-lg-offset-4 text-center subscription">
                          <h4 class="m-t-md m-b-0 text-center center-md  m-b-md " style="font-weight:400">Create your account. <b> It's Free.</b></h4>
                         <div class="free-message"><i class="fa fa-gift" aria-hidden="true"></i> <b>FREE</b> charge  on your first order over <b> €10</b>*</div>
                      
                        
                      
						<div class="error"></div>
						<div class="success"></div>
								
                        <div class="form-horizontal" id="signupForm" role="form">
                            
                     
                                
                                
                            <div class="form-group" style="width: 49.5%;    float: left;">
                               <div class="error_message"><strong id="fname_error"></strong></div>
                                 <label for=""> First  Name</label>
                                <input type="text" class="form-control" id="fname" name="username" placeholder="e.g. Anne " required>
								
                            </div>
							 <div class="form-group" style="width: 49.5%;    float: right;">
							     
                               <div class="error_message"><strong id="lname_error"></strong></div>
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lastname" placeholder="e.g. Njenga" required>
                            </div>
                            <div class="form-group " style="clear:both">
                               <div class="error_message"><strong id="email_error"></strong></div>
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="email_address" name="email_address" placeholder=" e.g. name@example.com" required>
                                
                            </div>
                            <div class="form-group">
                               <div class="error_message"><strong id="mobile_error"></strong></div>
                                <label for="">Mobile Phone (For notification)</label>
                                <input type="tel" class="form-control" id="mobile_number" name="mobile_number" placeholder="+49176xxxxxxxx ">
                            </div>
                            <div class="form-group" style="width: 49.5%;    float: left;">
                                <div class="error_message"><strong id="password_error"></strong></div>
                                 <label for="">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
							<div class="form-group" style="width: 49.5%;    float: right;">
                                <div class="error_message"><strong id="repassword_error"></strong></div>
                                 <label for="">Re-Password</label>
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
								<button type="submit" style="height:50px" id="send_user" name="send_user" class="btn btn-blue">Create my Familov account</button>
                            </div>
                        </div>
                        <p class="terms ">By clicking Signup you agree to the <a href="terms.php" class="f-w-700" style="color:#529800">Terms</a> and <a href="privacy.php" class="f-w-700" style="color:#529800">Privacy Policy</a>.</p>
                        <p class="terms"> Already have a Familov account? <a href="login.php" class="f-w-700" style="color:#529800">Sign in</a>.</p><br/>
                    </div>
                </div>
               
            </div>
        </section>
        <!-- /End Signup Section -->


 		<?php include("footer.php"); ?>	
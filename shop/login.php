<?php include("header.php"); ?>
        <!-- =========================
            LOGIN SECTION
        ============================== -->
        <section id="login" class="login p-y-xlg bg-color">
          <!-- <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-5 col-lg-offset-4 text-center subscription">
                        <h4 class="m-y-md text-center center-md">Welcome Back !</h4>
                        <p class=" text-center center-md m-b-md">Log in with your email and password.</p>
						<div id="errorMessage" class="text-left" style="color:red; display:block; margin-bottom:5px;"></div>
                        <div class="form-horizontal" role="form">
                            <div class="form-group">
                              
                                <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter your Email" required>
                            </div>
                            <div class="form-group">
                              
                                <input type="password" class="form-control" onkeypress='checkLoginEnter(event)' id="password" name="password" placeholder="Enter your Password" required>
                            </div>
                         
                            <div class="form-group">
								<button type="submit"  onclick="validLogin()" class="btn btn-blue">LOGIN</button>
                            </div>
                        </div>
                        <p  class="  text-center" style="font-size: 12px">Don't have an account? <a href="signup.php"   style="color:#529800">Sign up </a> </p>
                         <p class=" text-center" style="font-size: 12px" >Forgot your password? <a href="reset_password.php"  style="color:#529800">Reset it</a> </p><br/>

                      
                    </div>
                </div>
            </div>-->
             <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
             
              <h4 class="modal-title" id="myModalLabel" style ="color:#ec1e73">Welcome Back !</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                        
						<div id="errorMessage" class="text-left" style="color:red; display:block; margin-bottom:5px;"></div>
                        <div class="form-horizontal" role="form">
                            <div class="form-group">
                            <div class="error_message"><strong id="email_error"></strong></div>
                               <label for="">My Email</label>
                                <input type="email" class="form-control" id="email_address" name="email_address" placeholder="e.g. name@example.com" required>
                            </div>
                            <div class="form-group">
                            <div class="error_message"><strong id="password_error"></strong></div>
                                 <label for="">Password</label>
                                <input type="password" class="form-control" onkeypress='checkLoginEnter(event)' id="password" name="password" placeholder="Password" required>
                            </div>
                         
                            <div class="form-group">
								<button type="submit"  onclick="validLogin()" class="btn btn-blue">LOGIN</button>
                            </div>
                        </div>
                       
                         <p class=" text-center" style="font-size: 15px" > <a href="reset_password_request.php"  style="color:#529800">Forgot your password?</a> </p><br/>
                      </div>
                  </div>
                  <div class="col-xs-6">
                        <p  class="" style="font-size: 12px">Don't have an account? <a href="signup.php"   style="color:#529800">Sign up </a> </p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Fast checkout </li>
                          <li><span class="fa fa-check text-success"></span> See all your orders</li>
                          <li><span class="fa fa-check text-success"></span> Fast re-order </li>
                          <li><span class="fa fa-check text-success"></span> Be secure</li>
                          <li><span class="fa fa-check text-success"></span> Get exclusive deals</small></li>
                         <!-- <li><a href="how.php"><u>Read more</u></a></li>-->
                      </ul>
                      
                  </div>
              </div>
          </div>
      </div>
  </div>
        </section>
        <!-- /End Login Section -->

  		<?php include("footer.php"); ?>	
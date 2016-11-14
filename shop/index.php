<?php include("header.php"); ?>







<section id="hero2" class="hero bg-edit bg-blue height-800x-fix">

    <div class="container vertical-center-rel">

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0">

               <p class="leadx  " style="color:#ffffff; font-size:26px;line-height:35px; font-weight:700; margin-top: 50px;">No matter where you are <br/> be present for everyday event <br/> </p>

               <p class="m-b-md" style="color:#ffffff;">It is not always easy to send money home. We offer you  a new way<br/> to help your family and be sure that they are well cared.<br/>Cheaper. Safer. Better. </p> 
               
              

               <div class="col-md-6 form-bg">



                   <div class="form-inline double-input form-white m-b">



                     <div class="form-group">

                         <!--<input type="text" class="form-control cm-flag"  placeholder="Cameroun " name="MERGE1" required>-->
                         <div style="text-align:center"><h5>Quick and easy select a Shop near Home!</h5></div>
                         <br/>


                         <select name="country_id" id="country_id" class="form-control " required>

                            <option value="" selected="selected"> <i class="fa fa-star"></i>Reciever´s country</option>

                            <?php

                            $query_disp="SELECT * FROM country ORDER BY country_name asc";

                            $result_disp = mysql_query($query_disp);

                            while($query_data = mysql_fetch_array($result_disp))                                                                                        

                            {

                                ?>

                                <option value="<?php echo $query_data["country_id"]; ?>"<?php if ($query_data["country_id"]==$country_id) {?> selected="selected"<?php } ?>><?php echo $query_data["country_name"]; ?></option>

                                <?php } ?>

                            </select>











                            <select name="city_id" id="city_id" class="form-control selectpicker">

                                <option value="" selected="selected">Reciever´s city</option>

                            </select>



                        </div>



                        <div class="form-group">



                            <select name="shop_id" id="shop_id" class="form-control shop" >

                                <option value="" selected="selected">Choose a shop</option>

                            </select>









                        </div>



                        <button type="submit" id="search_shop" style="margin-top:15px;" class="btn btn-green">Order now</button>

                    </div>



                </div>

                <div class=" col-md-12 m-t-md ">

                   <img src="images/payments-884d06b44e.png" alt="logo" />

               </div>

           </div>



       </div>

   </div><!-- /End Col -->

</div><!-- /End Row -->

</div><!-- /End Container -->

</section>







     <!-- =========================

           FEATURES SECTION 

           ============================== -->







           <!-- /End Feature Tab -->



           <section id="features2-1" class="p-y-md">






            <div class="container">
            <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center wow fadeIn">
						     
                              
                     <h2>How it works</h2>



                     <p class="lead">Send money home is not  easy.<br/>Buy online here and your family <br/>Withdraws the order home. </p>
                        </div>
                    </div>
                </div><!-- /End Section Header -->
                <div class="row text-center features-block c3">
                    <div class="col-md-3">
                        <div class="gt_main_services bg_3">
                            <i class="icon-cart"></i>
                             <h2><span class="number">1</span></h2>
                            <h5>Order online </h5>
                            <p>Fill your cart in a store  near home and give us recievers name and phone. </p>
                            
                        </div>
                    </div>
                    
                     <div class="col-md-3">
                        <div class="gt_main_services bg_3">
                            <i class="icon-wallet2"></i>
                             <h2><span class="number">2</span></h2>
                            <h5>Pay securely</h5>
                            <p>You pay easily and securely with Credit Card, PayPal or direct debit </p>
                           
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="gt_main_services bg_3">
                            <i class="icon-envelope"></i>
                             <h2><span class="number">3</span></h2>
                            <h5>Code per SMS </h5>
                            <p> We send local store your order details and send an <b>CODE per SMS</b> to recievers</p>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="gt_main_services bg_3">
                             <img src="images/flat7.png" width="145px" alt="">
                            <h5>  Get delivery </h5>
                            <p>Order is prepared and  your family withdraw the order in Store or get delivery </p>
                            
                        </div>
                    </div>
                </div>
            </div>




       <!--  <div class="row text-center features-block c3">

      

            <div class="col-sm-4"> 

                <img src="images/flat5.png" alt="">

                <h4> 1 - Order groceries online</h4>

                <p>Fill your cart and tell us where and to whom to deliver.</p>

            </div>

          

            <div class="col-sm-4"> 

                <img src="images/flat66.png" alt="" width="136">

                <h4>2 - Pay easily and securely</h4>

                <p>Pay securely with Credit Card, PayPal or direct debit </p>

            </div>

       

            <div class="col-sm-4"> 

                <img src="images/flat7.png" alt="">

                <h4>3 - Your family gets the delivery</h4>

                <p>Collectable from local stores or even delivered to their front door </p>

            </div>

        </div>-->



    </div>

    <div class="col-md-8 col-md-offset-2 text-center p-t-md wow fadeIn" style="visibility: visible; animation-name: fadeIn;">



        <a href="signup.php" class="btn  btn-green ">Create your account</a>

    </div><!-- /End Container -->



</section>   

<!-- /End Features Section -->









        <!-- =========================

             TESTIMONIAL

             ============================== -->

             <section id="testimonials3-2" class="p-y-lg bg-edit bg-light">

                <div class="container">

                    <!-- Section Header -->

                    <div class="row">

                        <div class="col-md-8 col-md-offset-2">

                            <div class="m-b-md text-center wow fadeIn">

                                <h2>What People Are Saying About Us</h2>

                                <p class="lead">Meet our happy clients and find out why <br/> Familov is their preferred choice.</p>    

                            </div>

                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-12 testimonials ">

                            <!-- Testimonial Item -->

                            <div class="col-md-4 text-center p-t-md  clearfix">

                                <blockquote class="quote-border">

                                    <figure><img src="images/testimonial1.jpg" class="img-circle" alt="" width="90" height="90"> </figure>

                                    <p>I order food for my mom on Familov from Germany to Cameroon. It is faster, cheaper and more reliable than anything I‘ve ever tried before. <br><br/>  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>



                                    <div class="cite text-edit">

                                        Loretta 

                                        <span class="cite-info p-opacity ">Student,Germany</span> 

                                    </div>

                                </blockquote>

                            </div>

                            <!-- Testimonial Item -->

                            <div class="col-md-4 text-center p-t-md clearfix">

                                <blockquote class="quote-border">

                                    <figure><img src="images/testimonial2.jpg" alt="" class="img-circle" width="90" height="90"> </figure>

                                    <p>It works very well and what a good idea it is.One of those things where everybody says „Why didn‘t I think of this before?“. It is just amazing.<br><br/>  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>

                                    <div class="cite text-edit">

                                        Hervé

                                        <span class="cite-info p-opacity">Engineer, Germany</span>

                                    </div>

                                </blockquote>

                            </div>

                            <!-- Testimonial Item -->

                            <div class="col-md-4 text-center p-t-md clearfix">

                                <blockquote class="quote-border">

                                    <figure><img src="images/testimonial3.jpg" alt="" class="img-circle" width="90" height="90"> </figure>

                                    <p>I really love and enjoy this way to help my family at home. The notifications and trackability of my orders are giving me peace of mind. Thank you.<br><br/>  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>

                                    <div class="cite text-edit">

                                        Annitta 

                                        <span class="cite-info p-opacity">Nurse, France </span>

                                    </div>

                                </blockquote>

                            </div>

                        </div><!-- /End Testimonial Col -->



                    </div><!-- /End Row -->

                </div><!-- /End Container -->
                
                    <div class="container-fluid container p-y-xs">
	<div class="row-padding">

		<div class="row logo-footer-wrapper">
			<div class="col-sm-3 logo-footer-payoff">
				featured on:

			</div>
			<div class="col-sm-9">
				<img src="../shop/images/partnerlogos.png" class="img-responsive" alt="">
			</div>
		</div>
	</div>
	

</div>


            </section> 

            <!-- /End Testimonial Section -->



 


           <section id="features2-1" class="p-y-xlg"  style="background:url(images/bg-test.jpg)">





            <div class="container">

              <!-- Section Header -->

              <div class="row">

                <div class="col-md-8 col-md-offset-2">

                    <div class="section-header text-center wow fadeIn">




 <h4 style="color:#ffffff"> "I lives in Germany since 4 years and I work so hard everyday to help my family, but for many reasons is not always easy for me to send money home. Familov offer me a new way to take care of my loves and now I really enjoy because I can do more for them  everyday ."</h4>

                 <!--    <p class="lead" style="color:#ffffff">
              
                       Birthday  <br/>
                         Wedding day <br/>
                         	baptism day <br/>
                          	funeral day <br/>
                          	 	...EVERYDAY <br/>
                        
                     </p>-->

                 </div>

             </div>

         </div><!-- /End Section Header -->










    </div>

    <div class="col-md-8 col-md-offset-2 text-center  wow fadeIn" style="visibility: visible; animation-name: fadeIn;">



        <a href="signup.php" class="btn  btn-green ">Be a Familover</a>

    </div><!-- /End Container -->



</section>   

<!-- /End Features Section -->



            <?php include("footer.php"); ?> 


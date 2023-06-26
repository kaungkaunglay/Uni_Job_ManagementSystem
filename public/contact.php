<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:13:47 GMT -->
<?php require "includes/head.php"; ?>
<body>
<!-- Preloader Start -->
<div class="preloader">
    <div class="utf-preloader">
        <span></span>
        <span></span>
        <span></span>
		<span></span>		
    </div>
</div>
<!-- Preloader End -->

<!-- Wrapper -->
<div id="wrapper"> 
  <!-- Header Container -->
 <?php require "includes/header.php"; ?>
  <div class="clearfix"></div>
  <!-- Header Container / End -->  
  
  <!-- Titlebar -->
  <div id="titlebar" class="gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Contact Us</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="index-1.html">Home</a></li>
              <li>Contact Us</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Content --> 
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="utf-contact-location-info-aera margin-bottom-50">
          <div id="utf-single-job-map-container-item">
            <div id="singleListingMap" data-latitude="48.8566" data-longitude="2.3522" data-map-icon="im im-icon-Hamburger"></div>
          </div>
        </div>
      </div>      
	  <div class="col-xl-4 col-lg-4">
		<div class="utf-boxed-list-headline-item margin-bottom-35">
            <h3><i class="icon-feather-map-pin"></i> Office Address</h3>
        </div>
		<div class="utf-contact-location-info-aera margin-bottom-50">
			<div class="contact-address">
				<ul>
				  <li><strong>Phone:-</strong> (+21) 124 123 4546</li>
				  <li><strong>Website:-</strong> <a href="#">www.example.com</a></li>
				  <li><strong>E-Mail:-</strong> <a href="#">info@example.com</a></li>              
				  <li><strong>Address:-</strong> 3241, Lorem ipsum dolor sit amet, consectetur adipiscing elit Proin fermentum condimentum mauris.</li>
				</ul>
			</div>
		</div>		
	  </div>
	  <div class="col-xl-8 col-lg-8">
        <section id="contact" class="margin-bottom-50">
          <div class="utf-boxed-list-headline-item margin-bottom-35">
            <h3><i class="icon-material-outline-description"></i> Contact Form</h3>
          </div>
		  <div class="utf-contact-form-item">
			  <form method="post" name="contactform" id="contactform">
				<div class="row">
				  <div class="col-md-6">
					<div class="utf-no-border">
					  <input class="utf-with-border" name="name" type="text" id="firstname" placeholder="Frist Name" required />
					</div>
				  </div>
				  <div class="col-md-6">
					<div class="utf-no-border">
					  <input class="utf-with-border" name="name" type="text" id="lastname" placeholder="Last Name" required />
					</div>
				  </div>
				  <div class="col-md-6">
					<div class="utf-no-border">
					  <input class="utf-with-border" name="email" type="email" id="email" placeholder="Email Address" required />
					</div>
				  </div>
				  <div class="col-md-6">
					<div class="utf-no-border">
					  <input class="utf-with-border" name="subject" type="text" id="subject" placeholder="Subject" required />
					</div>
				  </div>
				</div>
				<div>
				  <textarea class="utf-with-border" name="comments" cols="40" rows="3" id="comments" placeholder="Message..." required></textarea>
				</div>
				<div class="utf-centered-button margin-top-10">
					<input type="submit" class="submit button" id="submit" value="Submit Message" />
				</div>
			  </form>
		  </div>
        </section>
      </div>
    </div>
  </div>
  <!-- Container / End --> 
  
  <!-- Subscribe Block Start -->
<!--  <section class="utf_cta_area_item utf_cta_area2_block">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="utf_subscribe_block">-->
<!--                    <div class="col-xl-8 col-md-7">-->
<!--                        <div class="section-heading">-->
<!--                            <h2 class="utf_sec_title_item utf_sec_title_item2">Subscribe to Our Newsletter!</h2>-->
<!--                            <p class="utf_sec_meta">Subscribe to get latest updates and information.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xl-4 col-md-5">-->
<!--                        <div class="contact-form-action">-->
<!--                            <form method="post">-->
<!--                                <i class="icon-material-baseline-mail-outline"></i>-->
<!--                                <input class="form-control" type="email" placeholder="Enter your email" required="">-->
<!--                                <button class="utf_theme_btn" type="submit">Subscribe</button>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--  </section>-->
  <!-- Subscribe Block End -->
  
  <!-- Footer -->
 <?php require "includes/footer.php"; ?>
  <!-- Footer / End --> 
</div>
<!-- Wrapper / End --> 

<!-- Sign In Popup -->
<div id="utf-signin-dialog-block" class="zoom-anim-dialog mfp-hide dialog-with-tabs"> 
  <div class="utf-signin-form-part">
    <ul class="utf-popup-tabs-nav-item">
      <li><a href="#login">Log In</a></li>
      <li><a href="#register">Register</a></li>
    </ul>
    <div class="utf-popup-container-part-tabs"> 
      <!-- Login -->
      <div class="utf-popup-tab-content-item" id="login"> 
        <div class="utf-welcome-text-item">
          <h3>Welcome Back Sign in to Continue</h3>
          <span>Don't Have an Account? <a href="#" class="register-tab">Sign Up!</a></span> 
		</div>
        <form method="post" id="login-form">
          <div class="utf-no-border">
            <input type="text" class="utf-with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
          </div>
          <div class="utf-no-border">
            <input type="password" class="utf-with-border" name="password" id="password" placeholder="Password" required/>
          </div>
		  <div class="checkbox margin-top-0">
			<input type="checkbox" id="two-step">
			<label for="two-step"><span class="checkbox-icon"></span> Remember Me</label>
		  </div>
          <a href="forgot-password.html" class="forgot-password">Forgot Password?</a>
        </form>
        <button class="button full-width utf-button-sliding-icon ripple-effect" type="submit" form="login-form">Log In <i class="icon-feather-chevron-right"></i></button>
        <div class="utf-social-login-separator-item"><span>Or Login in With</span></div>
        <div class="utf-social-login-buttons-block">
          <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Facebook</button>
		  <button class="google-login ripple-effect"><i class="icon-brand-google"></i> Google</button>
		  <button class="twitter-login ripple-effect"><i class="icon-brand-twitter"></i> Twitter</button>
        </div>
      </div>
      
      <!-- Register -->
      <div class="utf-popup-tab-content-item" id="register"> 
        <div class="utf-welcome-text-item">
          <h3>Create your Account!</h3>
		  <span>Don't Have an Account? <a href="#" class="register-tab">Sign Up!</a></span> 
        </div>
        <form method="post" id="utf-register-account-form">
          <div class="utf-no-border">
            <input type="text" class="utf-with-border" name="name" id="name" placeholder="User Name" required/>
          </div>
		  <div class="utf-no-border">
            <input type="text" class="utf-with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" required/>
          </div>
		  <div class="utf-no-border margin-bottom-20">
			<select class="selectpicker utf-with-border" data-size="5" title="Select Jobs">
				<option>Web Designer</option>
				<option>Web Developer</option>
				<option>Graphic Designer</option>
				<option>Android Developer</option>
				<option>IOS Developer</option>
				<option>UI/UX Designer</option>
				<option>Graphics Designer</option>				
			</select>
		  </div>
          <div class="utf-no-border" title="Should be at least 8 characters long" data-tippy-placement="bottom">
            <input type="password" class="utf-with-border" name="password-register" id="password-register" placeholder="Password" required/>
          </div>
          <div class="utf-no-border">
            <input type="password" class="utf-with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required/>
          </div>
		  <div class="checkbox margin-top-0">
			<input type="checkbox" id="two-step0">
			<label for="two-step0"><span class="checkbox-icon"></span> I Have Read and Agree to the <a href="#">Terms &amp; Conditions</a></label>
		  </div>
        </form>
        <button class="margin-top-10 button full-width utf-button-sliding-icon ripple-effect" type="submit" form="utf-register-account-form">Register <i class="icon-feather-chevron-right"></i></button>
      </div>
    </div>
  </div>
</div>
<!-- Sign In Popup / End -->

<!-- Scripts --> 
<?php require "includes/scripts.php"; ?>
</body>

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:13:47 GMT -->
</html>
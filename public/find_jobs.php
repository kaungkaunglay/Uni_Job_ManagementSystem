<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/jobs-list-layout-leftside.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:10:18 GMT -->
<?php  require "includes/head.php";?>
<?php
$jobs = CRUD::Select("vacancies");
$number_of_jobs = count($jobs);
/**
 * @throws Exception
 */
function time_left($datetime){
    $targetDateTime = new DateTime($datetime);
    $currentDateTime = new DateTime();

    $interval = $currentDateTime->diff($targetDateTime);

    $hoursLeft = $interval->h;
    $minutesLeft = $interval->i;

    if ($hoursLeft === 0 && $minutesLeft === 0) {
        $remainingTime = '0 minutes';
    } else {
        $remainingTime = '';

        if ($hoursLeft > 0) {
            $remainingTime .= $hoursLeft . ' hour';
            if ($hoursLeft > 1) {
                $remainingTime .= 's';
            }
        }

        if ($minutesLeft > 0) {
            if ($hoursLeft > 0) {
                $remainingTime .= ' ';
            }
            $remainingTime .= $minutesLeft . ' minute';
            if ($minutesLeft > 1) {
                $remainingTime .= 's';
            }
        }
    }
    return $remainingTime;
}

?>
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
			  <h2>Jobs Listing Left Sidebar</h2>
			  <nav id="breadcrumbs">
				<ul>
				  <li><a href="index-1.html">Home</a></li>
				  <li>Jobs Listing Left Sidebar</li>
				</ul>
			  </nav>
			</div>
		  </div>
		</div>
	</div>
  <!-- Titlebar End -->
  
  <!-- Search Jobs Start -->
  <div class="inner_search_block_section padding-top-0 padding-bottom-40">
	<div class="container">
		<div class="col-md-12">
		  <div class="utf-intro-banner-search-form-block"> 
			<div class="utf-intro-search-field-item">
			  <i class="icon-feather-search"></i>
			  <input id="intro-keywords" type="text" placeholder="Search Jobs Keywords...">
			</div>
			<div class="utf-intro-search-field-item">
			  <select class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="5" title="Select Location">
				<option>Afghanistan</option>
				<option>Albania</option>
				<option>Algeria</option>
				<option>Brazil</option>
				<option>Burundi</option>
				<option>Bulgaria</option>
				<option>Germany</option>
				<option>Grenada</option>
				<option>Guatemala</option>
				<option>Iceland</option>
			  </select>
			</div>
			<div class="utf-intro-search-button">
			  <button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-leftside.html'"><i class="icon-material-outline-search"></i> Search</button>
			</div>
		  </div>
		  <p class="utf-trending-silver-item"><span class="utf-trending-black-item">Trending Jobs Keywords:</span> Web Designer,  Web Developer,  Graphic Designer,  PHP Developer,  IOS Developer,  Android Developer</p>
		</div>
	</div>	    
  </div>
  <!-- Search Jobs End -->
  
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-4">
        <div class="utf-sidebar-container-aera">
		  <div class="utf-sidebar-widget-item">
			<div class="utf-quote-box utf-jobs-listing-utf-quote-box">
				<div class="utf-quote-info">
					<h4>Make a Difference with Online Resume!</h4>
					<p>Your Resume in Minutes with Jobs Resume Assistant is Ready!</p>
					<a href="register.html" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Create Account <i class="icon-feather-chevron-right"></i></a>
				</div>
			</div>
		  </div>
		  
		  <div class="utf-sidebar-widget-item">
            <h3>Search Keywords</h3>
            <div class="utf-input-with-icon">
                <input type="text" placeholder="Search Keywords...">
                <i class="icon-material-outline-search"></i> 
			</div>
          </div>
		  
          <div class="utf-sidebar-widget-item">
            <h3>Category</h3>
            <select class="selectpicker" data-live-search="true" data-selected-text-format="count" data-size="7" title="All Categories">
              <option>Web Design</option>
              <option>Accountant</option>
              <option>Data Analytics</option>
              <option>Marketing</option>
              <option>Software Developing</option>
              <option>IT & Networking</option>
              <option>Translation</option>
              <option>Sales & Marketing</option>
            </select>
          </div>
		  
		  <div class="utf-sidebar-widget-item">
            <h3>Gender</h3>
            <select class="selectpicker" data-size="3" title="Gender">
              <option>Male</option>
              <option>Female</option>
              <option>Others</option>              
            </select>
          </div>
          
          <div class="utf-sidebar-widget-item">
            <h3>Job Type</h3>
            <div class="utf-radio-btn-list">
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox1" checked>
				  <label for="chekcbox1"><span class="checkbox-icon"></span> Full Time Jobs</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox2">
				  <label for="chekcbox2"><span class="checkbox-icon"></span> Part Time Jobs</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox3">
				  <label for="chekcbox3"><span class="checkbox-icon"></span> Freelancer Jobs</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox4">
				  <label for="chekcbox4"><span class="checkbox-icon"></span> Internship Jobs</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox5">
				  <label for="chekcbox5"><span class="checkbox-icon"></span> Temporary Jobs</label>
				</div>				
            </div>
          </div>
		  <div class="clearfix"></div>
		  
		  <div class="utf-sidebar-widget-item">
            <h3>Experince</h3>
            <div class="utf-radio-btn-list">
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox01" checked>
				  <label for="chekcbox01"><span class="checkbox-icon"></span> 1Year to 2Year</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox02">
				  <label for="chekcbox02"><span class="checkbox-icon"></span> 2Year to 3Year</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox03">
				  <label for="chekcbox03"><span class="checkbox-icon"></span> 3Year to 4Year</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox04">
				  <label for="chekcbox04"><span class="checkbox-icon"></span> 4Year to 5Year</label>
				</div>				
            </div>
          </div>
		  <div class="clearfix"></div>
		  
		  <div class="utf-sidebar-widget-item">
            <h3>Career Level</h3>
            <div class="utf-radio-btn-list">
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox001" checked>
				  <label for="chekcbox001"><span class="checkbox-icon"></span> Intermediate</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox002">
				  <label for="chekcbox002"><span class="checkbox-icon"></span> Normal</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox003">
				  <label for="chekcbox003"><span class="checkbox-icon"></span> Special</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox004">
				  <label for="chekcbox004"><span class="checkbox-icon"></span> Experienced</label>
				</div>	
            </div>
          </div>
          
          <div class="utf-sidebar-widget-item">
            <h3>Hourly Rate</h3>
            <div class="margin-top-55"></div>            
            <input class="range-slider" type="text" value="" data-slider-currency="$" data-slider-min="5000" data-slider-max="50000" data-slider-step="100" data-slider-value="[5000,40000]"/>
          </div>
          
          <div class="utf-sidebar-widget-item">
            <h3>Skills</h3>
            <div class="utf-tags-container-item">
              <div class="tag">
                <input type="checkbox" id="tag1"/>
                <label for="tag1">HTML 5</label>
              </div>
              <div class="tag">
                <input type="checkbox" id="tag2"/>
                <label for="tag2">Javascript</label>
              </div>
              <div class="tag">
                <input type="checkbox" id="tag3"/>
                <label for="tag3">Web Design</label>
              </div>
              <div class="tag">
                <input type="checkbox" id="tag4"/>
                <label for="tag4">Graphic Designer</label>
              </div>			  
            </div>
            <div class="clearfix"></div>
          </div>
		  
		  <div class="utf-sidebar-widget-item">
			  <div class="utf-detail-banner-add-section">
				 <a href="#"><img src="images/banner-add-2.jpg" alt="banner-add-2" /></a>
			  </div>
          </div>
        </div>
      </div>
	  
      <div class="col-xl-9 col-lg-8">
        <div class="utf-inner-search-section-title">
			<h4><i class="icon-material-outline-search"></i> Search Jobs Listing Results</h4>
		</div>
        <div class="utf-notify-box-aera margin-top-15">
          <div class="utf-switch-container-item">
            <span>Showing 1–10 of <?php echo $number_of_jobs; ?> Jobs Results :</span>
          </div>          
		  <div class="sort-by">
				<span>Sort By:</span>
				<select class="selectpicker hide-tick">
					<option>A to Z</option>
					<option>Newest</option>
					<option>Oldest</option>
					<option>Random</option>
				</select>
			</div>
        </div>
		
        <div class="utf-listings-container-part compact-list-layout margin-top-35">
            <?php
            foreach($jobs as $job):
                $job_type = CRUD::Select("jobtype",["JobTypeName"], ["JobTypeID" => $job['JobTypeID']]);
                $job_cat = CRUD::Select("jobcategory",["JobCatName"], ["JobCatID" => $job['JobCatID']]);
                $postedDateTime = new DateTime($job['VacanciePostedDate']);
                $currentDateTime = new DateTime();
                if($postedDateTime <= $currentDateTime){
            ?>
			<a href="single-job-page.html" class="utf-job-listing"> 
			  <div class="utf-job-listing-details"> 
				<div class="utf-job-listing-company-logo"> <img src="images/company_logo_2.png" alt=""> </div>
				<div class="utf-job-listing-description">
				  <span class="dashboard-status-button utf-job-status-item green"><i class="icon-material-outline-business-center"></i> <?php echo $job_type[0]['JobTypeName']; ?></span>
				  <h3 class="utf-job-listing-title"><?php echo $job['VacancieTitle']; ?></h3>
				  <div class="utf-job-listing-footer">
					<ul>
					  <li><i class="icon-feather-briefcase"></i> <?php echo $job_cat[0]['JobCatName']; ?></li>
					  <li><i class="icon-material-outline-account-balance-wallet"></i> <?php echo $job['VacancieSalary']; ?></li>
					  <li><i class="icon-material-outline-location-on"></i> <?php echo $job['VacancieLocation'] ?></li>
					  <li><i class="icon-material-outline-access-time"></i><?php echo time_left($job['VacanciePostedDate']) ?> Ago</li>
					</ul>
				  </div>
				</div>
				<span class="bookmark-icon"></span> 
			   </div>
			</a>
            <?php
                }
            endforeach; ?>
		</div>
        
        <!-- Pagination -->
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12"> 
            <div class="utf-pagination-container-aera margin-top-30 margin-bottom-60">
              <nav class="pagination">
                <ul>
                  <li class="utf-pagination-arrow"><a href="#"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                  <li><a href="#" class="current-page">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="utf-pagination-arrow"><a href="#"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>

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

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/jobs-list-layout-leftside.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:10:41 GMT -->
</html>
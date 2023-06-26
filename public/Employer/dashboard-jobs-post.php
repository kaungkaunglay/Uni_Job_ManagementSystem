<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/dashboard-jobs-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:13:13 GMT -->
<?php require "../includes/head.php";  ?>
<?php
// select company id from that employer
$data_employer = CRUD::Select("employers", ["CompanyID"],
    ["EmployerID" => $_SESSION['EmployerID']]) ;
$company_id = $data_employer[0]['CompanyID'];

// select company information
$data_company  = CRUD::Select("company",null,["CompanyID" => $company_id]);
$job_types = CRUD::Select("jobtype");
$job_cats = CRUD::Select("jobcategory");
if(isset($_POST['submit'])){
    $job_title = htmlentities(trim($_POST['job_title']));
    $job_salary = htmlentities(trim($_POST['job_salary']));
    $job_type = htmlentities(trim($_POST['job_type']));
    $job_cat = htmlentities(trim($_POST['job_cat']));
    $post_date = htmlentities(trim($_POST['post_date']));
    $expiry_date = htmlentities(trim($_POST['expiry_date']));
    $job_location = htmlentities(trim($_POST['job_location']));
    $job_description = htmlentities(trim($_POST['job_description']));
    CRUD::Insert("vacancies", [
            "VacancieTitle" => $job_title,
            "VacancieDescription" => $job_description,
            "VacancieLocation" => $job_location,
            "VacancieSalary" => $job_salary,
            "VacanciePostedDate" => $post_date,
            "VacancieExpirationDate" => $expiry_date,
            "VacancieStatus" => "pending",
            "EmployerID" => $_SESSION['EmployerID'],
            "JobTypeID" => $job_type,
            "JobCatID" => $job_cat
    ]);
}
?>
<body>
<!-- Preloader Start -->
<!--<div class="preloader">-->
<!--    <div class="utf-preloader">-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--		<span></span>		-->
<!--    </div>-->
<!--</div>-->
<!-- Preloader End -->

<!-- Wrapper -->
<div id="wrapper">
    <?php require "../includes/header_dash.php"; ?>
  <div class="clearfix"></div>
  <!-- Header Container / End --> 
  
  <!-- Dashboard Container -->
  <div class="utf-dashboard-container-aera">
    <?php require "../includes/items_dash.php"; ?>
    <!-- Dashboard Sidebar / End -->

    <!-- Dashboard Content -->
    <form method="post" action="dashboard-jobs-post.php" class="utf-dashboard-content-container-aera" data-simplebar>
	  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
		<div class="row">
			<div class="col-xl-12">
				<h3>Manage Jobs Post</h3>
				<nav id="breadcrumbs">
					<ul>
					  <li><a href="index-1.html">Home</a></li>
					  <li><a href="dashboard.html">Dashboard</a></li>
					  <li>Manage Jobs Post</li>
					</ul>
				</nav>
			</div>
		</div>
      </div>
      <div class="utf-dashboard-content-inner-aera">
        <div class="row">
		  <div class="col-xl-12">
            <div class="dashboard-box">
              <div class="headline">
                <h3>Company Information</h3>
              </div>
              <div class="content with-padding padding-bottom-10">
                <div class="row">
                  <div class="col-xl-6 col-md-6 col-sm-6">
                    <div class="utf-submit-field">
                      <h5>Company Name</h5>
                      <input readonly type="text" class="utf-with-border" placeholder="Company Name" value="<?php echo $data_company[0]['CompanyName'] ;?>">
                    </div>
                  </div>
				  <div class="col-xl-6 col-md-6 col-sm-6">
                    <div class="utf-submit-field">
                      <h5>Company Email</h5>
                      <input readonly type="text" class="utf-with-border" placeholder="Company Email" value="<?php echo $data_company[0]['CompanyEmail']; ?>">
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="utf-submit-field">
                      <h5>Company Location</h5>
                      <div class="keywords-container">
                        <div class="keyword-input-container">
                            <input readonly type="text" class="utf-with-border" value="<?php echo $data_company[0]['CompanyAddress']; ?>" placeholder="Company Location">
                        </div>
                        <div class="keywords-list"><!-- keywords go here --></div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="utf-submit-field">
                      <h5>Company Postal Code</h5>
                        <input readonly type="text" value="<?php echo $data_company[0]['CompanyPostalCode'] ?>" class="utf-with-border" placeholder="Company Postal Code">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-12">
            <div class="dashboard-box">
              <div class="headline">
                <h3>Job Information</h3>
              </div>
              <div class="content with-padding padding-bottom-10">
                <div class="row">
                  <div class="col-xl-6 col-md-6 col-sm-6">
                    <div class="utf-submit-field datepicker">
                      <h5>Job  Title</h5>
                        <input id="street" required name="job_title" type="text" class="utf-with-border" placeholder="Job Title">
                    </div>
                  </div>

				  <div class="col-xl-6 col-md-6 col-sm-6">
                      <div class="utf-submit-field">
                          <h5>Job Salary</h5>
                          <input required name="job_salary" type="text" class="utf-with-border" placeholder="Job Salary">
                      </div>
                  </div>
                  <div class="col-xl-6 col-md-6 col-sm-6">
                    <div class="utf-submit-field">
                      <h5>Job Type</h5>

                      <select required name="job_type" class="selectpicker utf-with-border" data-size="7" title="Select Job Type">
                      <?php
                      foreach ($job_types as $job_type):
                      ?>
                        <option value="<?php echo $job_type['JobTypeID'] ?>"><?php echo $job_type['JobTypeName']; ?></option>
                       <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
				  <div class="col-xl-6 col-md-6 col-sm-6">
                    <div class="utf-submit-field">
                      <h5>Job Category</h5>
                      <select required name="job_cat" class="selectpicker utf-with-border" data-size="7" title="Select Job Category">
                        <?php
                        foreach($job_cats as $job_cat):
                        ?>
                          <option value="<?php echo $job_cat['JobCatID'] ?>"><?php echo $job_cat['JobCatName']; ?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="utf-submit-field">
                            <h5>Location</h5>
                            <input name="job_location" type="text"  class="utf-with-border" placeholder="Job Location">
                        </div>
                    </div>
<!--                    Dates-->
                    <div class="col-xl-6 col-md-6 col-sm-6">
                        <div class="utf-submit-field">
                            <h5>Posted ON</h5>
                            <input onclick="date_limit()" required id="addressInput" name="post_date" type="datetime-local" class="utf-with-border">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6">
                        <div class="utf-submit-field">
                            <h5>Expired ON</h5>
                            <input onclick="date_limit()" required name="expiry_date" id="addressInput2" type="datetime-local" class="utf-with-border">
                        </div>
                    </div>


				  <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="utf-submit-field">
                      <h5>Job Description</h5>
					  <textarea required name="job_description" cols="20" rows="2" class="utf-with-border" placeholder="Job Description..."></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

		  <div class="col-xl-12">
            <div class="dashboard-box">
              <div class="headline">
                <h3>Social Accounts</h3>
              </div>
              <div class="content with-padding padding-bottom-10">
                <div class="row">
                  <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="utf-submit-field">
                      <h5><i class="icon-brand-facebook"></i> Facebook</h5>
                      <input name="facebook" type="text" class="utf-with-border" placeholder="https://www.facebook.com/">
                    </div>
                  </div>
				  <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="utf-submit-field">
                      <h5><i class="icon-brand-twitter"></i> Twitter</h5>
                      <input name="twitter" type="text" class="utf-with-border" placeholder="https://twitter.com/">
                    </div>
                  </div>
				  <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="utf-submit-field">
                      <h5><i class="icon-brand-linkedin"></i> LinkedIn</h5>
                      <input name="linkedin" type="text" class="utf-with-border" placeholder="https://www.linkedin.com/">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<div class="utf-centered-button">
			<button type="submit" name="submit" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Post Job <i class="icon-feather-plus"></i></button>
		</div>

        <!-- Footer -->
        <div class="utf-dashboard-footer-spacer-aera"></div>
        <div class="utf-small-footer margin-top-15">
          <div class="utf-small-footer-copyrights">Copyright &copy; 2021 All Rights Reserved.</div>
        </div>
      </div>
    </form>
    <!-- Dashboard Content / End -->
  </div>
</div>
<!-- Wrapper / End --> 

<!-- Scripts --> 
<?php require "../includes/scripts.php";?>
</body>

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/dashboard-jobs-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:13:13 GMT -->
</html>

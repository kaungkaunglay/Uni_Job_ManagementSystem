<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/dashboard-manage-jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:13:13 GMT -->
<?php require "../includes/head.php";  ?>
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
  <?php require "../includes/header_dash.php";
  $jobs = CRUD::Select("vacancies",null,["EmployerID" => $_SESSION['EmployerID']]);
  ?>
  <div class="clearfix"></div>
  <!-- Header Container / End --> 
  
  <!-- Dashboard Container -->
  <div class="utf-dashboard-container-aera">
    <?php require "../includes/items_dash.php"; ?>
    <!-- Dashboard Sidebar / End -->

    <!-- Dashboard Content -->
    <div class="utf-dashboard-content-container-aera" data-simplebar>
	  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
		<div class="row">
			<div class="col-xl-12">
				<h3>Manage Jobs</h3>
				<nav id="breadcrumbs">
					<ul>
					  <li><a href="index-1.html">Home</a></li>
					  <li><a href="dashboard.html">Dashboard</a></li>
					  <li>Manage Jobs</li>
					</ul>
				</nav>
			</div>
		</div>
      </div>
      <div class="utf-dashboard-content-inner-aera">
        <div class="row">
          <div class="col-xl-12">
            <div class="dashboard-box margin-top-0">
              <div class="headline">
                <h3>My Jobs Listings</h3>
              </div>
              <div class="content">
                <ul class="utf-dashboard-box-list">
                    <?php foreach($jobs as $job): ?>
                    <?php
                        $job_cat = CRUD::Select("jobcategory",["JobCatName"],["JobCatID" => $job['JobCatID']]);
                        $job_type = CRUD::Select("jobtype",["JobTypeName"],["JobTypeID" => $job['JobTypeID']]);
                        ?>
                  <li>
                    <div class="utf-job-listing">
                      <div class="utf-job-listing-details">
                        <a href="dashboard-manage-resume.html" class="utf-job-listing-company-logo"><img src="images/company_logo_1.png" alt=""></a>
                        <div class="utf-job-listing-description">
						  <span class="dashboard-status-button utf-status-item green"><?php
                              echo $job['VacancieStatus'];
                              ?>Approval</span>
						  <h3 class="utf-job-listing-title"><a href="dashboard-manage-resume.html"><?php echo $job['VacancieTitle'] ?></a><span class="dashboard-status-button green"><i class="icon-material-outline-business-center"></i> <?php echo $job_type[0]['JobTypeName']; ?></span></h3>
                          <div class="utf-job-listing-footer">
                            <ul>
							  <li><i class="icon-feather-briefcase"></i> <?php echo $job_cat[0]['JobCatName']; ?></li>
                              <li><i class="icon-material-outline-date-range"></i> <?php echo $job['VacanciePostedDate']; ?></li>
                              <li><i class="icon-material-outline-account-balance-wallet"></i><?php echo $job['VacancieSalary'] ?></li>
							  <li><i class="icon-material-outline-location-on"></i> <?php echo $job['VacancieLocation']; ?></li>
                            </ul>
							<div class="utf-buttons-to-right">
								<a href="#" class="button green ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
								<a href="#" class="button red ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
							</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                    <?php endforeach; ?>
                </ul>
              </div>
            </div>
			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="utf-pagination-container-aera margin-top-20 margin-bottom-0">
			  <nav class="pagination">
				<ul>
				  <li class="utf-pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
				  <li><a href="#" class="ripple-effect current-page">1</a></li>
				  <li><a href="#" class="ripple-effect">2</a></li>
				  <li><a href="#" class="ripple-effect">3</a></li>
				  <li class="utf-pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
				</ul>
			  </nav>
			</div>
			<div class="clearfix"></div>
          </div>
        </div>
        <!-- Row / End -->

        <!-- Footer -->
        <div class="utf-dashboard-footer-spacer-aera"></div>
        <div class="utf-small-footer margin-top-15">
          <div class="utf-small-footer-copyrights">Copyright &copy; 2021 All Rights Reserved.</div>
        </div>
      </div>
    </div>
    <!-- Dashboard Content / End -->
  </div>
</div>
<!-- Wrapper / End --> 

<!-- Scripts --> 
<?php require "../includes/footer.php" ?>
</body>

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/dashboard-manage-jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:13:13 GMT -->
</html>
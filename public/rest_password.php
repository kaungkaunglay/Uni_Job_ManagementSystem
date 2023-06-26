<?php
require "../private/Initializer.php";
$correct = false;
$email = null;
if (isset($_GET['id'])) {
    if (isset($_POST['confirm'])) {
        $code = $_POST['rest_code'];
        // Check URL ID and rest_code is equal
        $data = CRUD::Select("passwordrest", ["RestEmail"], [
            "RestID" => $_GET['id'],
            "RestCode" => $code
        ]);
        if (count($data) >= 1) {
            $correct = true;
            // Drop That Record
            $email = $data[0]['RestEmail'];
            $_SESSION['email']= $email;
            CRUD::Delete("passwordrest", [
                "RestEmail" => $email
            ]);
        } else {
            $_SESSION['message'] = "Wrong Rest Code is Provided";
        }
    }
    if (isset($_POST['change'])) {
        $password = hash('sha256', htmlentities(trim($_POST['retype_password'])));
        $email = $_SESSION['email'] ?? null;
        // Update Password
        if ($email) {
            CRUD::Update("employers", ["EmployerPassword" => $password], ["EmployerEmail" => $email]);
            unset($_SESSION['email']);
        } else {
            $_SESSION['message'] = "Email not available for password change.";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:13:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="theme-color" content="#ff8a00">
    <meta name="description" content="Job Portal HTML Template">
    <meta name="keywords" content="Employment, Naukri, Shine, Indeed, Job Posting, Job Provider">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Job Word - Job Portal HTML Template ::</title>

    <!--  Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;display=swap" rel="stylesheet">
</head>
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
    <header id="utf-header-container-block">
        <div id="header">
            <div class="container">
                <div class="utf-left-side">
                    <div id="logo"> <a href="index-1.html"><img src="images/logo.png" alt=""></a> </div>
                    <nav id="navigation">
                        <ul id="responsive">
                            <li><a href="#">Home</a>
                                <ul class="dropdown-nav">
                                    <li><a href="index-1.html"><i class="icon-feather-chevron-right"></i> Home Version One</a></li>
                                    <li><a href="index-2.html"><i class="icon-feather-chevron-right"></i> Home Version Two</a></li>
                                    <li><a href="index-3.html"><i class="icon-feather-chevron-right"></i> Home Version Three</a></li>
                                    <li><a href="index-4.html"><i class="icon-feather-chevron-right"></i> Home Version Four</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Find Jobs</a>
                                <ul class="dropdown-nav">
                                    <li><a href="#"><i class="icon-feather-chevron-right"></i> Browse Jobs</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="jobs-list-layout-leftside.html"><i class="icon-feather-chevron-right"></i> Jobs List Left Sidebar</a></li>
                                            <li><a href="jobs-list-layout-rightside.html"><i class="icon-feather-chevron-right"></i> Jobs List Right Sidebar</a></li>
                                            <li><a href="jobs-listing-with-map.html"><i class="icon-feather-chevron-right"></i> Jobs List With Map</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="browse-companies.html"><i class="icon-feather-chevron-right"></i> Browse Companies</a></li>
                                    <li><a href="single-job-page.html"><i class="icon-feather-chevron-right"></i> Jobs Detail Page</a></li>
                                    <li><a href="single-company-profile.html"><i class="icon-feather-chevron-right"></i> Company Profile Detail</a></li>
                                    <li><a href="#"><i class="icon-feather-chevron-right"></i> Freelancer Tasks</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="freelancers-bidding-tasks-list.html"><i class="icon-feather-chevron-right"></i> Freelancer Bidding Task</a></li>
                                            <li><a href="freelancers-user-list-layout.html"><i class="icon-feather-chevron-right"></i> Freelancer User List</a></li>
                                            <li><a href="single-freelancers-task-page.html"><i class="icon-feather-chevron-right"></i> Freelancer Task Detail</a></li>
                                            <li><a href="single-freelancer-profile.html"><i class="icon-feather-chevron-right"></i> Freelancer Profile Detail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">User Panel</a>
                                <ul class="dropdown-nav">
                                    <li><a href="dashboard.html"><i class="icon-feather-chevron-right"></i> Dashboard</a></li>
                                    <li><a href="dashboard-jobs-post.html"><i class="icon-feather-chevron-right"></i> Manage Jobs Post</a></li>
                                    <li><a href="dashboard-manage-jobs.html"><i class="icon-feather-chevron-right"></i> Manage Jobs</a></li>
                                    <li><a href="dashboard-manage-resume.html"><i class="icon-feather-chevron-right"></i> Manage Resume</a></li>
                                    <li><a href="dashboard-bookmarks.html"><i class="icon-feather-chevron-right"></i> Bookmarks Jobs</a></li>
                                    <li><a href="dashboard-manage-tasks.html"><i class="icon-feather-chevron-right"></i> Freelancer Tasks</a>
                                        <ul class="dropdown-nav">
                                            <li><a href="dashboard-freelancer-manage-tasks-list.html"><i class="icon-feather-chevron-right"></i> Freelancer Manage Tasks</a></li>
                                            <li><a href="dashboard-manage-bidders-list.html"><i class="icon-feather-chevron-right"></i> Freelancer Manage Bidders</a></li>
                                            <li><a href="dashboard-freelancer-active-bids.html"><i class="icon-feather-chevron-right"></i> Freelancer Active Bids</a></li>
                                            <li><a href="dashboard-freelancer-add-post-bids.html"><i class="icon-feather-chevron-right"></i> Freelancer Post Bids</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="dashboard-reviews.html"><i class="icon-feather-chevron-right"></i> Reviews</a></li>
                                    <li><a href="dashboard-my-profile.html"><i class="icon-feather-chevron-right"></i> My Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown-nav">
                                    <li><a href="about-us.html"><i class="icon-feather-chevron-right"></i> About Us</a></li>
                                    <li><a href="login.html"><i class="icon-feather-chevron-right"></i> Login</a></li>
                                    <li><a href="register.html"><i class="icon-feather-chevron-right"></i> Sign Up</a></li>
                                    <li><a href="checkout-page.html"><i class="icon-feather-chevron-right"></i> Order Checkout</a></li>
                                    <li><a href="order-confirmation.html"><i class="icon-feather-chevron-right"></i> Order Confirmation</a></li>
                                    <li><a href="invoice-template.html"><i class="icon-feather-chevron-right"></i> Invoice Template</a></li>
                                    <li><a href="user-elements.html"><i class="icon-feather-chevron-right"></i> User Elements</a></li>
                                    <li><a href="icons-cheatsheet.html"><i class="icon-feather-chevron-right"></i> Icons Cheatsheet</a></li>
                                    <li><a href="faq-page.html"><i class="icon-feather-chevron-right"></i> FAQ Page</a></li>
                                    <li><a href="pages-404.html"><i class="icon-feather-chevron-right"></i> 404 Page</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a>
                                <ul class="dropdown-nav">
                                    <li><a href="blog-right-sidebar.html"><i class="icon-feather-chevron-right"></i> Blog List Right Sidebar</a></li>
                                    <li><a href="blog-left-sidebar.html"><i class="icon-feather-chevron-right"></i> Blog List Left Sidebar</a></li>
                                    <li><a href="blog-post-right-sidebar.html"><i class="icon-feather-chevron-right"></i> Blog Detail Right Sidebar</a></li>
                                    <li><a href="blog-post-left-sidebar.html"><i class="icon-feather-chevron-right"></i> Blog Detail Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                </div>

                <div class="utf-right-side">
                    <div class="utf-header-widget-item">
                        <div class="utf-header-notifications user-menu">
                            <div class="utf-header-notifications-trigger user-profile-title">
                                <a href="#">
                                    <div class="user-avatar status-online"><img src="images/user_small_1.jpg" alt=""> </div>
                                    <div class="user-name">Hi, John!</div>
                                </a>
                            </div>
                            <div class="utf-header-notifications-dropdown-block">
                                <ul class="utf-user-menu-dropdown-nav">
                                    <li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                    <li><a href="dashboard-jobs-post.html"><i class="icon-line-awesome-user-secret"></i> Manage Jobs Post</a></li>
                                    <li><a href="dashboard-manage-jobs.html"><i class="icon-material-outline-group"></i> Manage Jobs</a></li>
                                    <li><a href="dashboard-bookmarks.html"><i class="icon-material-outline-star-border"></i> Bookmarks Jobs</a></li>
                                    <li><a href="dashboard-my-profile.html"><i class="icon-feather-user"></i> My Profile</a></li>
                                    <li><a href="index-1.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <span class="mmenu-trigger">
			<button class="hamburger utf-hamburger-collapse-item" type="button"> <span class="utf-hamburger-box-item"> <span class="utf-hamburger-inner-item"></span> </span> </button>
          </span>
                </div>
            </div>
        </div>
    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    <!-- Titlebar -->
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Forgot Password</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index-1.html">Home</a></li>
                            <li>Forgot Password</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php
if($correct):
?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="utf-login-register-page-aera margin-bottom-50">
                    <div class="utf-welcome-text-item">
                        <h3>Change Your Password</h3>
                        <span>Enter your Password and Confirm Password then click Change Password</span>
                    </div>
                    <form method="post" id="login-form" action="rest_password.php?id=<?php echo $_GET['id'] ?>">
                        <div class="utf-no-border">
                            <input type="password" class="utf-with-border" name="password" id="emailaddress" placeholder="Enter Your Password" required/>
                        </div>
                        <div class="utf-no-border">
                            <input type="password" class="utf-with-border" name="retype_password" id="emailaddress" placeholder="Enter Your Retype Password" required/>
                        </div>
                        <button name="change" class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Change Password <i class="icon-feather-lock"></i></button>
                    </form>
                    <div class="forget-text margin-top-15">
                        <span>Forget It, <a href="javascript:void(0);">Send me Back</a> to The Sign In.</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="utf-login-register-page-aera margin-bottom-50">
                    <div class="utf-welcome-text-item">
                        <h3>Enter Your Rest Code</h3>
                    </div>
                    <form method="post" id="login-form" action="rest_password.php?id=<?php echo $_GET['id'] ?>">
                        <div class="utf-no-border">
                            <input type="text" class="utf-with-border" name="rest_code" id="emailaddress" placeholder="Enter Your Rest Code" required/>
                        </div>
                        <p style="color: red;">
                            <?php
                            if(isset($_SESSION['message'])){
                                echo $_SESSION['message'];
                                unset($_SESSION['message']);
                            }
                            ?>
                        </p>

                        <button name="confirm" class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Confirm <i class="icon-feather-lock"></i></button>
                    </form>
                    <div class="forget-text margin-top-15">
                        <span>Forget It, <a href="javascript:void(0);">Send me Back</a> to The Sign In.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- Subscribe Block Start -->
    <section class="utf_cta_area_item utf_cta_area2_block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="utf_subscribe_block">
                        <div class="col-xl-8 col-md-7">
                            <div class="section-heading">
                                <h2 class="utf_sec_title_item utf_sec_title_item2">Subscribe to Our Newsletter!</h2>
                                <p class="utf_sec_meta">Subscribe to get latest updates and information.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-5">
                            <div class="contact-form-action">
                                <form method="post">
                                    <i class="icon-material-baseline-mail-outline"></i>
                                    <input class="form-control" type="email" placeholder="Enter your email" required="">
                                    <button class="utf_theme_btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Block End -->

    <!-- Footer -->
    <div id="footer">
        <div class="utf-footer-section-item-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-12">
                        <div class="utf-footer-item-links">
                            <a href="index-1.html"><img class="footer-logo" src="images/footer_logo.png" alt=""></a>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when unknown printer took a galley type scrambled.</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-6">
                        <div class="utf-footer-item-links">
                            <h3>Job Categories</h3>
                            <ul>
                                <li><a href="jobs-list-layout-leftside.html"><i class="icon-feather-chevron-right"></i> <span>Developement</span></a></li>
                                <li><a href="jobs-list-layout-leftside.html"><i class="icon-feather-chevron-right"></i> <span>Designing</span></a></li>
                                <li><a href="jobs-list-layout-leftside.html"><i class="icon-feather-chevron-right"></i> <span>Marketing</span></a></li>
                                <li><a href="jobs-list-layout-leftside.html"><i class="icon-feather-chevron-right"></i> <span>Data Analytics</span></a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>Post New Job</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-6">
                        <div class="utf-footer-item-links">
                            <h3>Job Type</h3>
                            <ul>
                                <li><a href="jobs-list-layout-leftside.html"><i class="icon-feather-chevron-right"></i> <span>Work from Home</span></a></li>
                                <li><a href="jobs-list-layout-leftside.html"><i class="icon-feather-chevron-right"></i> <span>Internship Job</span></a></li>
                                <li><a href="jobs-list-layout-leftside.html"><i class="icon-feather-chevron-right"></i> <span>Freelancer Job</span></a></li>
                                <li><a href="jobs-list-layout-leftside.html"><i class="icon-feather-chevron-right"></i> <span>Part Time Job</span></a></li>
                                <li><a href="jobs-list-layout-leftside.html"><i class="icon-feather-chevron-right"></i> <span>Full Time Job</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-6">
                        <div class="utf-footer-item-links">
                            <h3>Resources</h3>
                            <ul>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>My Account</span></a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>Support</span></a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>How It Works</span></a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>Underwriting</span></a></li>
                                <li><a href="#"><i class="icon-feather-chevron-right"></i> <span>Employers</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-6">
                        <div class="utf-footer-item-links">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="jobs-list-layout-leftside.html"><i class="icon-feather-chevron-right"></i> <span>Jobs Listing</span></a></li>
                                <li><a href="about-us.html"><i class="icon-feather-chevron-right"></i> <span>About Us</span></a></li>
                                <li><a href="contact.html"><i class="icon-feather-chevron-right"></i> <span>Contact Us</span></a></li>
                                <li><a href="privacy-policy.html"><i class="icon-feather-chevron-right"></i> <span>Privacy Policy</span></a></li>
                                <li><a href="terms-condition.html"><i class="icon-feather-chevron-right"></i> <span>Term & Condition</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Copyrights -->
        <div class="utf-footer-copyright-item">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">Copyright &copy; 2021 All Rights Reserved.</div>
                </div>
            </div>
        </div>
        <!-- Footer Copyrights / End -->
    </div>
    <!-- Footer / End -->
</div>
<!-- Wrapper / End -->

<!-- Scripts -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom_jquery.js"></script>
</body>

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:13:47 GMT -->
</html>
<header id="utf-header-container-block">
    <div id="header">
        <div class="container">
            <div class="utf-left-side">
                <div id="logo"> <a href="index.php"><img src="/JobManagement/public/images/logo.png" alt=""></a> </div>
                <nav id="navigation">
                    <ul id="responsive">
                        <li><a href="/JobManagement/public/find_jobs.php">Find Jobs</a>
                        </li>
                        <li><a href="/JobManagement/public/browse-companies.php">Companies</a>
                        </li>
                        <li><a href="/JobManagement/public/blogs.php">Articles</a>
                        </li>
                        <li><a href="/JobManagement/public/contact.php">Contact Us</a>
                        </li>

                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>

            <div class="utf-right-side">
<!--                --><?php
//                if(!isset($_SESSION['EmployerID'])){
//                ?>
<!--                <div class="utf-header-widget-item"> <a href="/JobManagement/public/Employer/register.php" class="log-in-button"><i class="icon-feather-log-in"></i> <span>Post Job</span></a> </div>-->
<!--                --><?php //} else{ ?>

<!--                    Show if the user is logged-->
                <div class="utf-header-widget-item">
                    <div class="utf-header-notifications user-menu">
                        <div class="utf-header-notifications-trigger user-profile-title">
                            <a href="#">
                                <div class="user-avatar status-online"><img src="/JobManagement/public/images/user_small_1.jpg" alt=""> </div>
                                <div class="user-name">Hi, Kaung!</div>
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
<!--                --><?php //} ?>
                <span class="mmenu-trigger">
			<button class="hamburger utf-hamburger-collapse-item" type="button"> <span class="utf-hamburger-box-item"> <span class="utf-hamburger-inner-item"></span> </span> </button>
          </span>
            </div>
        </div>
    </div>
</header>

<!--Authentication-->
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


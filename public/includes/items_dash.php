<?php
    if(isset($_SESSION['EmployerID'])){
        $number_of_jobs = count(CRUD::Select("vacancies",["VacancieID"], ["EmployerID" => $_SESSION['EmployerID']])) ;
        $current_file = $_SERVER['PHP_SELF'];
        $current_page = pathinfo($current_file, PATHINFO_FILENAME);
    }
?>
    <div class="utf-dashboard-sidebar-item">
        <div class="utf-dashboard-sidebar-item-inner" data-simplebar>
            <div class="utf-dashboard-nav-container">
                <!-- Responsive Navigation Trigger -->
                <a href="#" class="utf-dashboard-responsive-trigger-item"> <span class="hamburger utf-hamburger-collapse-item" > <span class="utf-hamburger-box-item"> <span class="utf-hamburger-inner-item"></span> </span> </span> <span class="trigger-title">Dashboard Navigation Menu</span> </a>
                <!-- Navigation -->
                <div class="utf-dashboard-nav">
                    <div class="utf-dashboard-nav-inner">
                        <div class="dashboard-profile-box">
				  <span class="avatar-img">
					<img alt="" src="/JobManagement/public/images/user-avatar-placeholder.png" class="photo">
				  </span>
                            <div class="user-profile-text">
                                <span class="fullname"><?php
                                    if (isset($_SESSION['EmployerName'])){
                                        echo $_SESSION['EmployerName'];
                                    }
                                    ?></span>
                                <span class="user-role">Software Engineer</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <ul>
                            <li class="<?php
                            if(isset($current_page) && $current_page == "dashboard-jobs-post"){
                                echo "active";
                            }
                            ?>"><a href="dashboard-jobs-post.php"><i class="icon-line-awesome-user-secret"></i> Manage Jobs Post</a></li>
                            <li class="<?php
                            if(isset($current_page) && $current_page == "dashboard-manage-jobs"){
                                echo 'active';
                            }
                            ?>"><a href="dashboard-manage-jobs.php"><i class="icon-material-outline-group"></i> Manage Jobs <span class="nav-tag"><?php echo $number_of_jobs;?></span></a></li>
                            <li><a href="dashboard-manage-resume.php"><i class="icon-material-outline-supervisor-account"></i> Manage Resume</a></li>
                            <li><a href="dashboard-bookmarks.php"><i class="icon-feather-heart"></i> Bookmarks Jobs</a></li>
                            <li><a href="#"><i class="icon-line-awesome-file-text"></i> Freelancer Tasks</a>
                                <ul class="dropdown-nav">
                                    <li><a href="dashboard-freelancer-manage-tasks-list.php"><i class="icon-feather-chevron-right"></i> Freelancer Manage Tasks</a></li>
                                    <li><a href="dashboard-manage-bidders-list.php"><i class="icon-feather-chevron-right"></i> Freelancer Manage Bidders</a></li>
                                    <li><a href="dashboard-freelancer-active-bids.php"><i class="icon-feather-chevron-right"></i> Freelancer Active Bids</a></li>
                                    <li><a href="dashboard-freelancer-add-post-bids.php"><i class="icon-feather-chevron-right"></i> Freelancer Post Bids</a></li>
                                </ul>
                            </li>
                            <li><a href="dashboard-reviews.php"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
                            <li><a href="dashboard-my-profile.php"><i class="icon-feather-user"></i> My Profile</a></li>
                            <li><a href="/JobManagement/public/loading.php?type=employer"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard Sidebar / End -->

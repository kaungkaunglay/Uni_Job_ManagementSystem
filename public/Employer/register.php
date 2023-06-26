<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:13:25 GMT -->
<?php
require "../includes/head.php";
function Check_Employer_Exist($email){
    $select = CRUD::Select("employers", ["EmployerID"], [
        "EmployerEmail" => $email
    ]);
    if(count($select) > 0){
        return true;
    }
    return false;
}
if(isset($_GET['step']) && $_GET['step'] == 2){
    $errors = null;
    // add them to temporary session
    if (isset($_POST['company_name'])) {
        $_SESSION['company_name'] = $_POST['company_name'];
    }
    if (isset($_POST['company_email'])) {
        $_SESSION['company_email'] = $_POST['company_email'];
    }
    if (isset($_POST['company_address'])) {
        $_SESSION['company_address'] = $_POST['company_address'];
    }
    if (isset($_POST['company_postal_code'])) {
        $_SESSION['company_postal_code'] = $_POST['company_postal_code'];
    }
    if(!isset($_SESSION['company_postal_code']) || !isset($_SESSION['company_address']) || !isset($_SESSION['company_email']) || !isset($_SESSION['company_name'])){
        header("Location: ".$_SERVER['PHP_SELF']."?step=1");
    }
    //create accoount
    if(isset($_POST['submit'])){

        $name = isset($_POST['your_name']) ? trim($_POST['your_name']) : '';
        $name = htmlentities($name, ENT_QUOTES, 'UTF-8');

        $email = isset($_POST['your_email']) ? $_POST['your_email'] : '';
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $email_able = new EmailAble("live_f35ffe42239d2606027b",$email);

        $phone_no = isset($_POST['your_phone_no']) ? $_POST['your_phone_no'] : '';
        $phone_no = filter_var($phone_no, FILTER_SANITIZE_NUMBER_INT);

        $password = isset($_POST['your_retype_password']) ? $_POST['your_retype_password'] : '';
        // Validate data (add your own validation rules as needed)
        if (empty($name)) {
            $_SESSION['message'] = 'Please enter your name.';
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['message'] = 'Please enter a valid email address.';
        }
        else if (empty($phone_no)) {
            $_SESSION['message'] = 'Please enter your phone number.';
        }
        else if (empty($password)) {
            $_SESSION['message'] = 'Please enter your password.';
        }
        else if (Check_Employer_Exist($email)){
            $_SESSION['message'] = 'Account Already Exist';
        }
        else if(!$email_able::isDeliverable())
        {
         $_SESSION['message'] = "Email Address is not usable";
        }else{
//            // create company Information
            CRUD::Copy_Image("image","/JobManagement/public/images");
            CRUD::Insert("company",[
                    "CompanyName" => $_SESSION['company_name'],
                    "CompanyEmail" => $_SESSION['company_email'],
                    "CompanyAddress" => $_SESSION['company_address'],
                    "CompanyPostalCode" => $_SESSION['company_postal_code']
            ]);
            //then select company ID
            $company_ID = CRUD::Select("company", [
                    "CompanyID"
            ], [
                    "CompanyEmail" => $_SESSION['company_email']
            ]);
            //insert employer information
            CRUD::Insert("employers",[
                "EmployerName" => $name,
                "EmployerEmail" => $email,
                "EmployerPhoneNo" => $phone_no,
                "EmployerPassword" => hash("sha256", $password),
                "status" => "pending",
                "CompanyID" => $company_ID[0]['CompanyID']
            ]);
            header("Location: ../loading.php");
        }
    }
}
 ?>
<body>
<!-- Preloader Start -->
<!-- <div class="preloader">
    <div class="utf-preloader">
        <span></span>
        <span></span>
        <span></span>
		<span></span>		
    </div>
</div> -->
<!-- Preloader End -->

<!-- Wrapper -->
<div id="wrapper"> 
  <!-- Header Container -->
<?php require "../includes/header.php" ?>
  <div class="clearfix"></div>
  <!-- Header Container / End --> 
  
  <!-- Titlebar -->
  <div id="titlebar" class="gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Create Employer Account</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="index-1.html">Home</a></li>
              <li>Register</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Page Content -->
    <?php
    if(!isset($_GET['step']) || $_GET['step'] == 1):
    ?>
  <div class="container">
    <div class="row">
      <div class="col-xl-7 offset-xl-3">
        <div class="utf-login-register-page-aera margin-bottom-50"> 
          <div class="utf-welcome-text-item">
            <h3>Fill Company Information!</h3>
		  </div>
          <form method="post" id="utf-register-account-form" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>?step=2">
            <div class="utf-no-border">
              <input autocomplete="false" autofocus type="text" class="utf-with-border" name="company_name" id="name-register" placeholder="Company Name" required/>
            </div>
              <div class="utf-no-border">
                  <input autocomplete="false" autofocus type="text" class="utf-with-border" name="company_email" id="name-register" placeholder="Company Email" required/>
              </div>
              <div class="utf-no-border">
                  <input autocomplete="false" autofocus type="text" class="utf-with-border" name="company_address" id="name-register" placeholder="Company Street Address" required/>
              </div>
              <div class="utf-no-border">
                  <input autocomplete="false" autofocus type="text" class="utf-with-border" name="company_postal_code" id="name-register" placeholder="Company Postal Code" required/>
              </div>
              <div class="utf-no-border">
                  <input type="file" autocomplete="false" name="image">
              </div>
            <div class="utf-no-border">
                <label for="">Number of Employees:</label>
                <select name="company_strength" id="opinions">
                    <option value="1">1-49</option>
                    <option value="2">50-149</option>
                    <option value="3">150-599</option>
                    <option value="3">600-999</option>
                </select>
            </div>
			<div class="checkbox margin-top-10">
				<input type="checkbox" id="two-step0">
				<label for="two-step0"><span class="checkbox-icon"></span> I Have Read and Agree to the <a href="../terms-condition.php">Terms &amp; Conditions</a></label>
		    </div>
              <input type="submit" class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" value="Next"><i class="icon-feather-chevron-right"></i>
          </form>

        </div>
      </div>
    </div>
  
  <!-- Subscribe Block Start -->
 <!--  -->
  <!-- Subscribe Block End -->
  
  </div>
    <?php endif; ?>
    <?php
    if(isset($_GET['step']) && $_GET['step'] == 2):
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-7 offset-xl-3">
                <div class="utf-login-register-page-aera margin-bottom-50">
                    <div class="utf-welcome-text-item">
                        <h3>Fill Your Information!</h3>
                    </div>
                    <form method="post" id="utf-register-account-form" action="<?php echo $_SERVER['PHP_SELF'] ?>?step=2">
                        <div class="utf-no-border">
                            <input autocomplete="false" autofocus type="text" class="utf-with-border" name="your_name" id="name-register" placeholder="Employer Name" required/>
                        </div>
                        <div class="utf-no-border">
                            <input autocomplete="false" autofocus type="text" class="utf-with-border" name="your_email" id="name-register" placeholder="Employer Email" required/>
                        </div>
                        <div class="utf-no-border">
                            <input autocomplete="false" autofocus type="text" class="utf-with-border" name="your_phone_no" id="name-register" placeholder="Employer Phone No" required/>
                        </div>
                        <div class="utf-no-border">
                            <input autocomplete="false" autofocus type="text" class="utf-with-border" name="your_password" id="name-register" placeholder="Password" required/>
                        </div>
                        <div class="utf-no-border">
                            <input autocomplete="false" autofocus type="text" class="utf-with-border" name="your_retype_password" id="name-register" placeholder="Retype Password" required/>
                        </div>
                        <div class="utf-no-border">
                            <p style="color: red;font-family: 'Arial'">
                                <?php
                                if(isset($_SESSION['message'])){
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                }
                                ?>
                            </p>

                        </div>
<!--                        <div class="checkbox margin-top-10">-->
<!--                            <input type="checkbox" id="two-step0" name="terms" required>-->
<!--                            <label for="two-step0"><span class="checkbox-icon"></span> I Have Read and Agree to the <a href="../terms-condition.php">Terms &amp; Conditions</a></label>-->
<!--                        </div>-->


                        <input name="submit" type="submit" class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" value="Create Account"><i class="icon-feather-chevron-right"></i>
                    </form>
                </div>
            </div>
        </div>

        <!-- Subscribe Block Start -->
        <!--  -->
        <!-- Subscribe Block End -->

    </div>
    <?php endif; ?>
<!--  <section class="utf_cta_area_item utf_cta_area2_block">
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
  <!-- Footer -->
  <?php require "../includes/footer.php" ?>
  <!-- Footer / End -->  -->
</div>
<!-- Wrapper / End --> 

<!-- Scripts --> 
<?php require "../includes/scripts.php" ?>
</body>

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:13:25 GMT -->
</html>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:13:25 GMT -->
<?php require "../includes/head.php"; ?>
<?php
if(isset($_SESSION['EmployerID'])){
    header("Location: ../loading.php");
}
if(isset($_POST['submit'])){
//    die("Work");
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    if (empty($email)) {
        $_SESSION['message'] = 'Please enter your name.';
    }
    else if (empty($password)) {
        $_SESSION['message'] = 'Please enter your password.';
    }
    else{
        $result = CRUD::Select("employers", ["EmployerID","EmployerName"], [
                "EmployerEmail" => $email,
                "EmployerPassword" => hash("sha256", $password)
        ]);
        if(count($result) >= 1){
            $_SESSION['EmployerID'] = $result[0]['EmployerID'];
            $_SESSION['EmployerName'] = $result[0]['EmployerName'];
            header("Location: ../loading.php");
        }else{
            $_SESSION['message'] = "Invalid Email or Password";
        }
    }
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
  <!-- Header Container -->
  <?php require "../includes/header.php"; ?>
  <div class="clearfix"></div>
  <!-- Header Container / End --> 
  
  <!-- Titlebar -->
  <div id="titlebar" class="gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Log In</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="index-1.html">Home</a></li>
              <li>Log In</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-xl-6 offset-xl-3">
        <div class="utf-login-register-page-aera margin-bottom-50"> 
          <div class="utf-welcome-text-item">
            <h3>Login To Employer Account</h3>
            <span>Don't Have an Account? <a href="register.php">Sign Up!</a></span>
		  </div>
          <form method="post" action="login.php">
            <div class="utf-no-border">
              <input type="text" class="utf-with-border" name="email" id="emailaddress" placeholder="Email Address" required/>
            </div>
            <div class="utf-no-border">
              <input type="password" class="utf-with-border" name="password" id="password" placeholder="Password" required/>
            </div>
			<div class="checkbox margin-top-10">
				<input type="checkbox" id="two-step">
				<label for="two-step"><span class="checkbox-icon"></span> Remember Me</label>
			</div>
<!--              <div>-->
<!--                  <label style="color: red;" for="">-->
<!--                      --><?php

//                      ?>
<!--                  </label>-->
<!--              </div>-->
              <br>
              <span style="color: red">
                  <?php
                                        if(isset($_SESSION['message'])){
                                           echo $_SESSION['message'];
                                            unset($_SESSION['message']);
                                        }
                   ?>
              </span>
            <a href="forgot-password.php" class="forgot-password">Forgot Password?</a>
              <button name="submit" class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" type="submit">Log In <i class="icon-feather-chevron-right"></i></button>
          </form>

          <div class="utf-social-login-separator-item"><span>Or Login in With</span></div>
          <div class="utf-social-login-buttons-block">
            <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Facebook</button>
			<button class="google-login ripple-effect"><i class="icon-brand-google"></i> Google+</button>
			<button class="twitter-login ripple-effect"><i class="icon-brand-twitter"></i> Twitter</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Footer -->
<?php
require "../includes/footer.php";
?>
  <!-- Footer / End -->    
</div>
<!-- Wrapper / End --> 

<!-- Scripts --> 
<?php
require "../includes/scripts.php";
?>
</body>

<!-- Mirrored from jobword.utouchdesign.com/jobword_ltr/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2023 15:13:25 GMT -->
</html>
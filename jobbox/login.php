<!-- DataBase -->
<?php include("./components/config.php");

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta & Css & js Links -->
    <?php include("./components/links.php") ?>

    <title>Login - Job Portal HTML Template </title>
  </head>
  <body>   

    <main class="main">
      <div class="box-content">
        <div class="box-heading">
          <div class="box-title"> 
            <h3 class="mb-35">Login</h3>
          </div>
        </div>
        <div class="row"> 
          <div class="col-lg-12"> 
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div class="box-padding">               
                    <div class="login-register"> 
                      <div class="row login-register-cover pb-250">
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                          <div class="form-login-cover">
                            <div class="text-center">
                              <p class="font-sm text-brand-2">Welcome back! </p>
                              <h2 class="mt-10 mb-5 text-brand-1">Member Login</h2>
                              <p class="font-sm text-muted mb-30">Access to all features. No credit card required.</p>
                              <button class="btn social-login hover-up mb-20"><img src="assets/imgs/template/icons/icon-google.svg" alt="jobbox"><strong>Sign in with Google</strong></button>
                              <div class="divider-text-center"><span>Or continue with</span></div>
                            </div>
                            <form class="login-register text-start mt-20" method="post">
                              <div class="form-group">
                                <label class="form-label" for="input-1">Email address *</label>
                                <input class="form-control" id="input-1" type="text" required="" name="email" >
                              </div>
                              <div class="form-group">
                                <label class="form-label" for="input-4">Password *</label>
                                <input class="form-control" id="input-4" type="password" required="" name="password">
                              </div>
                              <div class="login_footer form-group d-flex justify-content-between">
                                <label class="cb-container">
                                  <input type="checkbox"><span class="text-small">Remenber me</span><span class="checkmark"></span>
                                </label><a class="text-muted" href="#">Forgot Password</a>
                              </div>
                              <div class="form-group">
                                <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Login</button>
                              </div>
                              <div class="text-muted text-center">Don't have an Account? <a href="register.php">Sign up</a></div>
                            </form>
                            <!-- Login php -->
                            <?php
                              if(isset($_POST['login'])) {
                                if(isset($_POST['email']) && isset($_POST['password'])) {
                                  $email = $_POST['email'];
                                  $password = $_POST['password'];

                                  $query = "SELECT * FROM `users` WHERE `Email`='$email' AND `Password`='$password'";
                                  $result = mysqli_query($conn, $query);
                                  $row = mysqli_fetch_assoc($result);

                                  if($row) {
                                      $_SESSION['id'] = $row['UserId'];
                                      $_SESSION['r'] = $row['UserRole'];
                                      $_SESSION['n'] = $row['FullName'];
                                      $_SESSION['e'] = $row['Email'];      
                                      $_SESSION['p'] = $row['Password'];
                                      echo "<script>alert('You are Logged in'); window.location='index.php';</script>";
                                  } else {
                                    echo "<script>alert('Invalid email or password');</script>";
                                  }
                                }
                              }
                            ?>
                            <!-- // Login php -->
                          </div>
                          <div class="img-2"><img src="assets/imgs/page/login-register/img-3.svg" alt="JobBox"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-10"> 
          <div class="section-box">
            <div class="container"> 
              <div class="panel-white pt-30 pb-30 pl-15 pr-15">
                <div class="box-swiper">
                  <div class="swiper-container swiper-group-10">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/microsoft.svg" alt="jobBox"></div>
                      <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/sony.svg" alt="jobBox"></div>
                      <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/acer.svg" alt="jobBox"></div>
                      <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/nokia.svg" alt="jobBox"></div>
                      <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/asus.svg" alt="jobBox"></div>
                      <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/casio.svg" alt="jobBox"></div>
                      <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/dell.svg" alt="jobBox"></div>
                      <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/panasonic.svg" alt="jobBox"></div>
                      <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/vaio.svg" alt="jobBox"></div>
                      <div class="swiper-slide"> <img src="assets/imgs/page/dashboard/sony.svg" alt="jobBox"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="ModalApplyJobForm" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content apply-job-form">
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="modal-body pl-30 pr-30 pt-50">
                <div class="text-center">
                  <p class="font-sm text-brand-2">Job Application </p>
                  <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Start your career today</h2>
                  <p class="font-sm text-muted mb-30">Please fill in your information and send it to the employer.                   </p>
                </div>
                <form class="login-register text-start mt-20 pb-30" action="#">
                  <div class="form-group">
                    <label class="form-label" for="input-1">Full Name *</label>
                    <input class="form-control" id="input-1" type="text" required="" name="fullname" placeholder="Steven Job">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="input-2">Email *</label>
                    <input class="form-control" id="input-2" type="email" required="" name="emailaddress" placeholder="stevenjob@gmail.com">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="number">Contact Number *</label>
                    <input class="form-control" id="number" type="text" required="" name="phone" placeholder="(+01) 234 567 89">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="des">Description</label>
                    <input class="form-control" id="des" type="text" required="" name="Description" placeholder="Your description...">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="file">Upload Resume</label>
                    <input class="form-control" id="file" name="resume" type="file">
                  </div>
                  <div class="login_footer form-group d-flex justify-content-between">
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
                    </label><a class="text-muted" href="page-contact.html">Lean more</a>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-default hover-up w-100" type="submit" name="login">Apply Job</button>
                  </div>
                  <div class="text-muted text-center">Do you need support? <a href="page-contact.html">Contact Us</a></div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer mt-20">
          <div class="container">
            <div class="box-footer">
              <div class="row">
                <div class="col-md-6 col-sm-12 mb-25 text-center text-md-start">
                  <p class="font-sm color-text-paragraph-2">© 2022 - <a class="color-brand-2" href="https://themeforest.net/item/jobbox-job-portal-html-bootstrap-5-template/39217891" target="_blank">JobBox </a>Dashboard <span> Made by  </span><a class="color-brand-2" href="http://alithemes.com" target="_blank"> AliThemes</a></p>
                </div>
                <div class="col-md-6 col-sm-12 text-center text-md-end mb-25">
                  <ul class="menu-footer">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Policy</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </main>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.circliful.js"></script>
    <script src="assets/js/main.js?v=1.0"></script>
  </body>
</html>
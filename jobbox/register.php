<!-- Database -->
<?php include("./components/config.php") ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta & Css & js Links -->
    <?php include("./components/links.php") ?>

    <title>Register - Job Portal HTML Template </title>
  </head>
  <body>   
    <main class="main">
      <div class="box-content">
      
      <div class="box-heading">
          <div class="box-title"> 
            <h3 class="mb-35">Create New Account</h3>
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
                              <p class="font-sm text-brand-2">Register </p>
                              <h2 class="mt-10 mb-5 text-brand-1">Start for free Today</h2>
                              <p class="font-sm text-muted mb-30">Access to all features. No credit card required.</p>
                              <button class="btn social-login hover-up mb-20"><img src="assets/imgs/template/icons/icon-google.svg" alt="jobbox"><strong>Sign up with Google</strong></button>
                              <div class="divider-text-center"><span>Or continue with</span></div>
                            </div>
                            <form class="login-register text-start mt-20" method="post" >
                              <div class="form-group">
                                <label class="form-label" for="input-1">Full Name *</label>
                                <input class="form-control" id="input-1" type="text" required="" name="fullname" >
                              </div>
                              <div class="form-group">
                                <label class="form-label" for="input-2">Email *</label>
                                <input class="form-control" id="input-2" type="email" required="" name="emailaddress" >
                              </div>
                              <div class="form-group">
                                <label class="form-label" for="input-3">Username *</label>
                                <input class="form-control" id="input-3" type="text" required="" name="username" >
                              </div>
                              <div class="form-group">
                                <label class="form-label" for="input-4">Password *</label>
                                <input class="form-control" id="input-4" type="password" required="" name="password" >
                              </div>
                              <div class="form-group">
                                <label class="form-label" for="input-5">Re-Password *</label>
                                <input class="form-control" id="input-5" type="password" required="" name="re-password" >
                              </div>
                              <div class="login_footer form-group d-flex justify-content-between">
                                <label class="cb-container">
                                  <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
                                </label><a class="text-muted" href="#">Lean more</a>
                              </div>
                              <div class="form-group">
                                <button class="btn btn-brand-1 hover-up w-100" type="submit" name="signup">Submit &amp; Register</button>
                              </div>
                              <div class="text-muted text-center">Already have an account? <a href="login.php">Sign in</a></div>
                            </form>
                            <!-- Register -->
                            <?php
                            
                            if(isset($_POST["signup"]))
                            {
                                $name = $_POST["fullname"];
                                $email = $_POST["emailaddress"];
                                $uname = $_POST["username"];

                                $pass = $_POST["password"];
                                $repass = $_POST["re-password"];

                                $query = "INSERT INTO `users`(`FullName`, `Username`, `Email`, `Password`) 
                                  VALUES ('$name', '$uname', '$email', '$repass')";
                                  
                                  $result = mysqli_query($conn, $query);

                                  if($result)
                                  {
                                      echo '<script>alert("Successfully Registered")</script>';
                                      
                                      header("refresh:0.2,url='login.php'");
                                        
                                  }
                                  else
                                  {
                                      echo '<script>alert("Something went wrong")</script>';
                                  }
                                
                            }

                            ?>
                            <!-- Register -->
                            
                          </div>
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

        <!-- Footer -->
        <?php include("./components/footer.php") ?>
        
      </div>
    </main>
  </body>
</html>
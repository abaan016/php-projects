<!-- DataBase -->
<?php include("./components/config.php");
session_start();

if(isset( $_SESSION['e']) && isset( $_SESSION['p'])){

$getId = $_SESSION["id"];

$query = "SELECT * FROM `users` WHERE `UserId` = $getId";
$result = mysqli_query($conn, $query);

if($result)
{
  while($row = mysqli_fetch_assoc($result))
  {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta & Css & js Links -->
    <?php include("./components/links.php") ?>

    <title>Jobbox My Resume - Job Portal HTML Template </title>
  </head>
  <body>   
        <!-- Header -->
        <?php include("./components/header.php") ?>

        <!-- Mob header -->
        <?php include("./components/mobile-header.php") ?>


    <main class="main">
      <!-- Sidebar -->
      <?php include("./components/sidebar.php") ?>

      <!-- Content -->
      <div class="box-content">
        <div class="box-heading">
          <div class="box-title"> 
            <h3 class="mb-35">Authentication</h3>
          </div>
          <div class="box-breadcrumb"> 
            <div class="breadcrumbs">
              <ul> 
                <li> <a class="icon-home" href="index.html">Admin</a></li>
                <li><span>Authentication</span></li>
              </ul>
            </div>
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
                            <div class="text-center"><img src="assets/imgs/page/login-register/img-6.svg" alt="JobBox">
                              <h2 class="mt-10 mb-5 text-brand-1">Protected Content</h2>
                              <p class="font-sm text-muted mb-30">
                                 This content is password protected.  <br>To view it please enter your password below</p>
                            </div>
                            <form class="login-register text-start mt-20" method="post">
                              <div class="form-group">
                                <label class="form-label" for="input-1">Your Password *</label>
                                <input class="form-control" id="input-1" type="password" required="" name="password" value="<?php echo $row["Password"] ?>" >
                              </div>
                              <div class="form-group">
                                <button class="btn btn-brand-1 hover-up w-100" type="submit" name="updatepass">Submit</button>
                              </div>
                              <div class="text-muted text-center">Don't Have Passoword?<a href="page-contact.html">Contact Us</a></div>
                            </form>
                            <!-- Update Password -->
                            <?php 
                            
                            if(isset($_POST["updatepass"]))
                            {
                              $pass = $_POST["password"];

                              $query = "UPDATE `users` SET `Password`='$pass' WHERE `UserId` = $getId";

                              if(mysqli_query($conn, $query))
                              {
                                echo '<script>alert("Update Password")</script>';
                              }
                              else
                              {
                                echo '<script>alert("Something went wrong !")</script>';
                              }
                            }

                            ?>
                            <!-- Update Password -->
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
        <!-- Footer -->
        <?php include("./components/footer.php") ?>
      </div>
    </main>

  </body>
</html>

<?php 

    
}
}


}
else{
    header("refresh:0.2,url='login.php'");
}
?>
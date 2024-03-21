<!-- DataBase -->
<?php include("./components/config.php");

session_start();


if(isset( $_SESSION['e']) && isset( $_SESSION['p'])){

$getId = $_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta & Css & js Links -->
    <?php include("./components/links.php") ?>

    <title>Jobbox Dashboard - Job Portal HTML Template </title>
  </head>
  <body>   
    
    <!-- Header -->
    <?php include("./components/header.php") ?>

    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <div class="mobile-search mobile-header-border mb-30">
              <form action="#">
                <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
              </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
              <!-- mobile menu start-->
              <nav>
                <ul class="main-menu">
                  <li> <a class="dashboard2" href="index.html"><img src="assets/imgs/page/dashboard/dashboard.svg" alt="jobBox"><span class="name">Dashboard</span></a>
                  </li>
                  <li> <a class="dashboard2" href="candidates.html"><img src="assets/imgs/page/dashboard/candidates.svg" alt="jobBox"><span class="name">Candidates</span></a>
                  </li>
                  <li> <a class="dashboard2 active" href="recruiters.html"><img src="assets/imgs/page/dashboard/recruiters.svg" alt="jobBox"><span class="name">Recruiters</span></a>
                  </li>
                  <li> <a class="dashboard2" href="my-job-grid.html"><img src="assets/imgs/page/dashboard/jobs.svg" alt="jobBox"><span class="name">My Jobs</span></a>
                  </li>
                  <li> <a class="dashboard2" href="my-tasks-list.html"><img src="assets/imgs/page/dashboard/tasks.svg" alt="jobBox"><span class="name">Tasks List</span></a>
                  </li>
                  <li> <a class="dashboard2" href="profile.html"><img src="assets/imgs/page/dashboard/profiles.svg" alt="jobBox"><span class="name">My Profiles</span></a>
                  </li>
                  <li> <a class="dashboard2" href="my-resume.html"><img src="assets/imgs/page/dashboard/cv-manage.svg" alt="jobBox"><span class="name">CV Manage</span></a>
                  </li>
                  <li> <a class="dashboard2" href="settings.html"><img src="assets/imgs/page/dashboard/settings.svg" alt="jobBox"><span class="name">Setting</span></a>
                  </li>
                  <li> <a class="dashboard2" href="authentication.html"><img src="assets/imgs/page/dashboard/authentication.svg" alt="jobBox"><span class="name">Authentication</span></a>
                  </li>
                  <li> <a class="dashboard2" href="login.html"><img src="assets/imgs/page/dashboard/logout.svg" alt="jobBox"><span class="name">Logout</span></a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="mobile-account">
              <h6 class="mb-10">Your Account</h6>
              <ul class="mobile-menu font-heading">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Work Preferences</a></li>
                <li><a href="#">Account Settings</a></li>
                <li><a href="#">Go Pro</a></li>
                <li><a href="page-signin.html">Sign Out</a></li>
              </ul>
              <div class="mb-15 mt-15"> <a class="btn btn-default icon-edit hover-up" href="post-job.html">Post Job</a></div>
            </div>
            <div class="site-copyright">Copyright 2022 &copy; JobBox. <br>Designed by AliThemes.</div>
          </div>
        </div>
      </div>
    </div>
    <main class="main">
      <!-- Sidebar -->
      <?php include("./components/sidebar.php") ?>

      <!-- Content -->
      <div class="box-content">
        <div class="box-heading">
          <div class="box-title"> 
            <h3 class="mb-35">Recruiters</h3>
          </div>
          <div class="box-breadcrumb"> 
            <div class="breadcrumbs">
              <ul> 
                <li> <a class="icon-home" href="index.php">Admin</a></li>
                <li><span>Recruiters</span></li>
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
                    <div class="row mb-30"> 
                      <div class="col-12"> 
                        <div class="box-list-character">
                          <ul>
                            <li><a class="active" href="#">A</a></li>
                            <li><a href="#">B</a></li>
                            <li><a href="#">C</a></li>
                            <li><a href="#">D</a></li>
                            <li><a href="#">E</a></li>
                            <li><a href="#">F</a></li>
                            <li><a href="#">G</a></li>
                            <li><a href="#">H</a></li>
                            <li><a href="#">I</a></li>
                            <li><a href="#">J</a></li>
                            <li><a href="#">K</a></li>
                            <li><a href="#">L</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">N</a></li>
                            <li><a href="#">O</a></li>
                            <li><a href="#">P</a></li>
                            <li><a href="#">Q</a></li>
                            <li><a href="#">R</a></li>
                            <li><a href="#">S</a></li>
                            <li><a href="#">T</a></li>
                            <li><a href="#">U</a></li>
                            <li><a href="#">V</a></li>
                            <li><a href="#">W</a></li>
                            <li><a href="#">X</a></li>
                            <li><a href="#">Y</a></li>
                            <li><a href="#">Z</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <?php
                        
                        $query = "SELECT * FROM `recruiters`";
                        $result = mysqli_query($conn, $query);

                        if($result)
                        {
                          while($row = mysqli_fetch_assoc($result))
                          {?>

                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                          <div class="card-grid-1 hover-up wow animate__animated animate__fadeIn">
                            <div class="image-box"><a href="#"><img src="assets/imgs/brands/<?php echo $row["Brandlogo"] ?>" alt="jobBox"></a></div>
                            <div class="info-text mt-10">
                              <h5 class="font-bold"><a href="company-details.html"><?php echo $row["Name"] ?></a></h5>
                              <div class="mt-5"><?php for($i=1; $i <= $row["Ratings"]; $i++ ){?> <span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span> <?php }?></div><span class="card-location"><?php echo $row["Location"] ?></span>
                              <div class="mt-30"><a class="btn btn-grey-big" href="jobs-grid.html"><span><?php echo $row["JobOffers"] ?></span><span> Jobs Open        </span></a></div>
                            </div>
                          </div>
                        </div>

                      <?php }
                        }?>

                      <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12"></div>
                    </div>
                    <div class="paginations">
                      <ul class="pager">
                        <li><a class="pager-prev" href="#"></a></li>
                        <li><a class="pager-number" href="#">1</a></li>
                        <li><a class="pager-number" href="#">2</a></li>
                        <li><a class="pager-number" href="#">3</a></li>
                        <li><a class="pager-number" href="#">4</a></li>
                        <li><a class="pager-number" href="#">5</a></li>
                        <li><a class="pager-number active" href="#">6</a></li>
                        <li><a class="pager-number" href="#">7</a></li>
                        <li><a class="pager-next" href="#"></a></li>
                      </ul>
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
else{
    header("refresh:0.2,url='login.php'");
}
?>
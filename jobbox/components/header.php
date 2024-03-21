  
<?php

// Fetch User Data
$getId = $_SESSION["id"];

$query = "SELECT * FROM `users` WHERE UserId = $getId";
$result = mysqli_query($conn, $query);

if($result)
{
  while($row = mysqli_fetch_assoc($result))
  {
?>


<div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="assets/imgs/template/loading.gif" alt="jobBox"></div>
        </div>
      </div>
    </div>
    <header class="header sticky-bar"> 
      <div class="container">
        <div class="main-header">
          <div class="header-left">
            <div class="header-logo"><a class="d-flex" href="index.php"><img alt="jobBox" src="assets/imgs/page/dashboard/logo.svg"></a></div><span class="btn btn-grey-small ml-10"><?php echo $row["UserRole"] ?> area</span>
          </div>
          <div class="header-search"> 
            <div class="box-search"> 
              <form action="">
                <input class="form-control input-search" type="text" name="keyword" placeholder="Search">
              </form>
            </div>
          </div>
          <div class="header-menu d-none d-md-block">
            <ul> 
              <li>        <a href="http://wp.alithemes.com/html/jobbox/demos/index.html">Home </a></li>
              <li> <a href="http://wp.alithemes.com/html/jobbox/demos/page-about.html">About us </a></li>
              <li> <a href="http://wp.alithemes.com/html/jobbox/demos/page-contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="header-right">
            <div class="block-signin"><a class="btn btn-default icon-edit hover-up" href="post-job.php">Post Job</a>
              <div class="dropdown d-inline-block"><a class="btn btn-notify" id="dropdownNotify" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownNotify">
                  <li><a class="dropdown-item active" href="#">10 notifications</a></li>
                  <li><a class="dropdown-item" href="#">12 messages</a></li>
                  <li><a class="dropdown-item" href="#">20 replies</a></li>
                </ul>
              </div>
              <div class="member-login"><img alt="" src="assets/imgs/page/dashboard/<?php echo $row["ProfileImage"] ?>">
                <div class="info-member"> <strong class="color-brand-1"><?php echo $row["FullName"] ?></strong>
                  <div class="dropdown"><a class="font-xs color-text-paragraph-2 icon-down" id="dropdownProfile" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><?php echo $row["UserRole"] ?></a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownProfile">
                      <li><a class="dropdown-item" href="profile.php">Profiles</a></li>
                      <li><a class="dropdown-item" href="my-resume.php">CV Manager</a></li>
                      <li><a class="dropdown-item" href="login.php">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
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
                  <li> <a class="dashboard2" href="index.php"><img src="assets/imgs/page/dashboard/dashboard.svg" alt="jobBox"><span class="name">Dashboard</span></a>
                  </li>
                  <li> <a class="dashboard2" href="candidates.php"><img src="assets/imgs/page/dashboard/candidates.svg" alt="jobBox"><span class="name">Candidates</span></a>
                  </li>
                  <li> <a class="dashboard2" href="recruiters.php"><img src="assets/imgs/page/dashboard/recruiters.svg" alt="jobBox"><span class="name">Recruiters</span></a>
                  </li>
                  <li> <a class="dashboard2" href="my-job-grid.php"><img src="assets/imgs/page/dashboard/jobs.svg" alt="jobBox"><span class="name">My Jobs</span></a>
                  </li>
                  <li> <a class="dashboard2" href="my-tasks-list.php"><img src="assets/imgs/page/dashboard/tasks.svg" alt="jobBox"><span class="name">Tasks List</span></a>
                  </li>
                  <li> <a class="dashboard2" href="profile.php"><img src="assets/imgs/page/dashboard/profiles.svg" alt="jobBox"><span class="name">My Profiles</span></a>
                  </li>
                  <li> <a class="dashboard2" href="my-resume.php"><img src="assets/imgs/page/dashboard/cv-manage.svg" alt="jobBox"><span class="name">CV Manage</span></a>
                  </li>
                  <li> <a class="dashboard2" href="settings.php"><img src="assets/imgs/page/dashboard/settings.svg" alt="jobBox"><span class="name">Setting</span></a>
                  </li>
                  <li> <a class="dashboard2" href="authentication.php"><img src="assets/imgs/page/dashboard/authentication.svg" alt="jobBox"><span class="name">Authentication</span></a>
                  </li>
                  <li> <a class="dashboard2" href="login.php"><img src="assets/imgs/page/dashboard/logout.svg" alt="jobBox"><span class="name">Logout</span></a>
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
                <li><a href="/logout.php">Sign Out</a></li>
              </ul>
              <div class="mb-15 mt-15"> <a class="btn btn-default icon-edit hover-up" href="post-job.php">Post Job</a></div>
            </div>
            <div class="site-copyright">Copyright 2022 &copy; JobBox. <br>Designed by AliThemes.</div>
          </div>
        </div>
      </div>
    </div>


<?php 
}
}
?>
<!-- DataBase -->
<?php include("./components/config.php");
session_start();

if(isset( $_SESSION['e']) && isset( $_SESSION['p'])){
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

    <main class="main">
      <!-- Sidebar -->
      <?php include("./components/sidebar.php") ?>

      <!-- Content -->
      <div class="box-content">
        <div class="box-heading">
          <div class="box-title"> 
            <h3 class="mb-35">Dashboard</h3>
          </div>
          <div class="box-breadcrumb"> 
            <div class="breadcrumbs">
              <ul> 
                <li> <a class="icon-home" href="index.php">Dashboard</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row"> 
          <div class="col-xxl-8 col-xl-7 col-lg-7">
            <div class="section-box">
              <div class="row"> 
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6"> 
                  <div class="card-style-1 hover-up">
                    <div class="card-image"> <img src="assets/imgs/page/dashboard/computer.svg" alt="jobBox"></div>
                    <div class="card-info"> 
                      <div class="card-title">
                        <h3>1568<span class="font-sm status up">25<span>%</span></span>
                        </h3>
                      </div>
                      <p class="color-text-paragraph-2">Interview Schedules</p>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                  <div class="card-style-1 hover-up">
                    <div class="card-image"> <img src="assets/imgs/page/dashboard/bank.svg" alt="jobBox"></div>
                    <div class="card-info"> 
                      <div class="card-title">
                        <h3>284<span class="font-sm status up">5<span>%</span></span>
                        </h3>
                      </div>
                      <p class="color-text-paragraph-2">Applied Jobs</p>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                  <div class="card-style-1 hover-up">
                    <div class="card-image"> <img src="assets/imgs/page/dashboard/lamp.svg" alt="jobBox"></div>
                    <div class="card-info"> 
                      <div class="card-title">
                        <h3>136<span class="font-sm status up">12<span>%</span></span>
                        </h3>
                      </div>
                      <p class="color-text-paragraph-2">Task Bids Won</p>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                  <div class="card-style-1 hover-up">
                    <div class="card-image"> <img src="assets/imgs/page/dashboard/headphone.svg" alt="jobBox"></div>
                    <div class="card-info"> 
                      <div class="card-title">
                        <h3>985<span class="font-sm status up">5<span>%</span></span>
                        </h3>
                      </div>
                      <p class="color-text-paragraph-2">Application Sent</p>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                  <div class="card-style-1 hover-up">
                    <div class="card-image"> <img src="assets/imgs/page/dashboard/look.svg" alt="jobBox"></div>
                    <div class="card-info"> 
                      <div class="card-title">
                        <h3>165<span class="font-sm status up">15<span>%</span></span>
                        </h3>
                      </div>
                      <p class="color-text-paragraph-2">Profile Viewed</p>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                  <div class="card-style-1 hover-up">
                    <div class="card-image"> <img src="assets/imgs/page/dashboard/open-file.svg" alt="jobBox"></div>
                    <div class="card-info"> 
                      <div class="card-title">
                        <h3>2356<span class="font-sm status down">- 2%</span>
                        </h3>
                      </div>
                      <p class="color-text-paragraph-2">New Messages</p>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                  <div class="card-style-1 hover-up">
                    <div class="card-image"> <img src="assets/imgs/page/dashboard/doc.svg" alt="jobBox"></div>
                    <div class="card-info"> 
                      <div class="card-title">
                        <h3>254<span class="font-sm status up">2<span>%</span></span>
                        </h3>
                      </div>
                      <p class="color-text-paragraph-2">Articles Added</p>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-4 col-sm-6">
                  <div class="card-style-1 hover-up">
                    <div class="card-image"> <img src="assets/imgs/page/dashboard/man.svg" alt="jobBox"></div>
                    <div class="card-info"> 
                      <div class="card-title">
                        <h3>548<span class="font-sm status up">48<span>%</span></span>
                        </h3>
                      </div>
                      <p class="color-text-paragraph-2">CV Added</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white">
                  <div class="panel-head"> 
                    <h5>Vacancy Stats</h5><a class="menudrop" id="dropdownMenu2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownMenu2">
                      <li><a class="dropdown-item active" href="#">Add new</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Actions</a></li>
                    </ul>
                  </div>
                  <div class="panel-body"> 
                    <div id="chartdiv"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white">
                  <div class="panel-head"> 
                    <h5>Latest Jobs</h5><a class="menudrop" id="dropdownMenu3" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownMenu3">
                      <li><a class="dropdown-item active" href="#">Add new</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Actions</a></li>
                    </ul>
                  </div>
                  <div class="panel-body">
                    <?php 
                      $sql = "SELECT * FROM `jobs` ORDER BY created_date DESC limit 5";
                      $query = mysqli_query($conn, $sql);

                      if($query)
                      {
                        while($row = mysqli_fetch_assoc($query))
                        {?>

                        <div class="card-style-2 hover-up">
                          <div class="card-head">
                            <div class="card-image"> <img src="assets/imgs/brands/<?php echo $row["Uploadefile"] ?>" alt="jobBox"></div>
                            <div class="card-title"> 
                              <h6><?php echo $row["Jobtitle"] ?></h6><span class="job-type"><?php echo $row["Workplace"] ?></span><span class="time-post"><?php echo $row["created_date"] ?></span><span class="location"><?php echo $row["Joblocation"] ?></span>
                            </div>
                          </div>
                          <div class="card-tags"> <a class="btn btn-tag"><?php echo $row["Tags"] ?></a>
                          </div>
                          <div class="card-price"><strong>$<?php echo $row["Salary"] ?></strong><span class="hour">/Hour</span></div>
                        </div>
                        
                    <?php }
                      } 
                      else 
                      {
                        echo "<h1>No results found</h1>";
                      }?>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-5 col-lg-5">
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white">
                  <div class="panel-head"> 
                    <h5>Top Candidates</h5><a class="menudrop" id="dropdownMenu4" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownMenu4">
                      <li><a class="dropdown-item active" href="#">Add new</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Actions</a></li>
                    </ul>
                  </div>
                  <div class="panel-body">
                    <?php
                      $query = "SELECT * FROM `candidates` order by `Ratings` >= 4 limit 5";
                      $result = mysqli_query($conn, $query);

                      if($result)
                      {
                        while($row = mysqli_fetch_assoc($result))
                        {?>

                        <div class="card-style-3 hover-up">
                          <div class="card-image online"><img src="assets/imgs/page/candidates/<?php echo $row["Profileimage"] ?>" alt="jobBox"></div>
                          <div class="card-title"> 
                            <h6><?php echo $row["Fullname"] ?></h6><span class="job-position"><?php echo $row["Profession"] ?></span>
                          </div>
                          <div class="card-location"> <span class="location"><?php echo $row["Location"] ?></span></div>
                          <div class="card-rating"><?php for($i=1; $i <= $row["Ratings"]; $i++ ){?> <span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span> <?php }?></div>
                        </div>

                      <?php }
                      }?>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white">
                  <div class="panel-head"> 
                    <h5>Top Recruiters</h5><a class="menudrop" id="dropdownMenu5" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownMenu5">
                      <li><a class="dropdown-item active" href="#">Add new</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Actions</a></li>
                    </ul>
                  </div>
                  <div class="panel-body">
                    <div class="row"> 
                      <?php
                          
                          $query = "SELECT * FROM `recruiters`";
                          $result = mysqli_query($conn, $query);

                          if($result)
                          {
                            while($row = mysqli_fetch_assoc($result))
                            {?>

                            <div class="col-lg-6 col-md-6 pr-5 pl-5">
                              <div class="card-style-4 hover-up">
                                <div class="d-flex">
                                  <div class="card-image"><img src="assets/imgs/brands/<?php echo $row["Brandlogo"] ?>" alt="jobBox"></div>
                                  <div class="card-title"> 
                                    <h6><?php echo $row["Name"] ?></h6><?php for($i=1; $i <= $row["Ratings"]; $i++ ){?> <span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span> <?php }?>
                                  </div>
                                </div>
                                <div class="card-location d-flex"><span class="location"><?php echo $row["Location"] ?></span><span class="jobs-number"><?php echo $row["JobOffers"] ?> Open Jobs</span></div>
                              </div>
                            </div>

                      <?php }
                          }?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white">
                  <div class="panel-head"> 
                    <h5>Queries by search</h5><a class="menudrop" id="dropdownMenu6" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownMenu6">
                      <li><a class="dropdown-item active" href="#">Add new</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Actions</a></li>
                    </ul>
                  </div>
                  <div class="panel-body">
                    <div class="card-style-5 hover-up">
                      <div class="card-title"> 
                        <h6 class="font-sm">Developer</h6>
                      </div>
                      <div class="card-progress"> 
                        <div class="number font-sm">2635</div>
                        <div class="progress">
                          <div class="progress-bar" style="width: 100%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="card-style-5 hover-up">
                      <div class="card-title"> 
                        <h6 class="font-sm">UI/Ux Designer</h6>
                      </div>
                      <div class="card-progress"> 
                        <div class="number font-sm">1658</div>
                        <div class="progress">
                          <div class="progress-bar" style="width: 90%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="card-style-5 hover-up">
                      <div class="card-title"> 
                        <h6 class="font-sm">Marketing</h6>
                      </div>
                      <div class="card-progress"> 
                        <div class="number font-sm">1452</div>
                        <div class="progress">
                          <div class="progress-bar" style="width: 80%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="card-style-5 hover-up">
                      <div class="card-title"> 
                        <h6 class="font-sm">Content manager</h6>
                      </div>
                      <div class="card-progress"> 
                        <div class="number font-sm">1325</div>
                        <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="card-style-5 hover-up">
                      <div class="card-title"> 
                        <h6 class="font-sm">Ruby on rain</h6>
                      </div>
                      <div class="card-progress"> 
                        <div class="number font-sm">985</div>
                        <div class="progress">
                          <div class="progress-bar" style="width: 60%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="card-style-5 hover-up">
                      <div class="card-title"> 
                        <h6 class="font-sm">Human hunter</h6>
                      </div>
                      <div class="card-progress"> 
                        <div class="number font-sm">920</div>
                        <div class="progress">
                          <div class="progress-bar" style="width: 50%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="card-style-5 hover-up">
                      <div class="card-title"> 
                        <h6 class="font-sm">Finance</h6>
                      </div>
                      <div class="card-progress"> 
                        <div class="number font-sm">853</div>
                        <div class="progress">
                          <div class="progress-bar" style="width: 40%"></div>
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

<?php 
}
else{
    header("refresh:0.2,url='login.php'");
}
?>
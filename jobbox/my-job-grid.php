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

    <title>My Jobs Grid - Job Portal HTML Template </title>
  </head>
  <body>   
    <!-- Header -->
    <?php include("./components/header.php") ?>

    <!-- Mobile Header -->
    <?php include("./components/mobile-header.php") ?>

    <main class="main">
      <!-- Sidebar -->
      <?php include("./components/sidebar.php") ?>

      <!-- Content -->
      <div class="box-content">
        <div class="box-heading">
          <div class="box-title"> 
            <h3 class="mb-35">My Jobs</h3>
          </div>
          <div class="box-breadcrumb"> 
            <div class="breadcrumbs">
              <ul> 
                <li> <a class="icon-home" href="index.php">Dashboard</a></li>
                <li><span>My Jobs</span></li>
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
                    <div class="box-filters-job">
                      <div class="row">
                        <div class="col-xl-6 col-lg-5">
                          <?php 
                          
                          $query = "SELECT COUNT(*) AS JobsId FROM jobs;";
                          $result = mysqli_query($conn, $query);

                          if($result)
                          {
                            $row = $result->fetch_assoc();
                            $total_jobs = $row["JobsId"];

                            echo '<span class="font-sm text-showing color-text-paragraph">Total '. $total_jobs . ' jobs</span>';
                          }

                          ?>
                        </div>
                        <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                          <div class="display-flex2">
                            <div class="box-border mr-10"><span class="text-sortby">Show:</span>
                              <div class="dropdown dropdown-sort">
                                <button class="btn dropdown-toggle" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>12</span><i class="fi-rr-angle-small-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                                  <li><a class="dropdown-item active" href="#">10</a></li>
                                  <li><a class="dropdown-item" href="#">12</a></li>
                                  <li><a class="dropdown-item" href="#">20</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="box-border"><span class="text-sortby">Sort by:</span>
                              <div class="dropdown dropdown-sort">
                                <button class="btn dropdown-toggle" id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span><i class="fi-rr-angle-small-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                  <li><a class="dropdown-item active" href="?sort=newest">Newest Post</a></li>
                                  <li><a class="dropdown-item" href="?sort=oldest">Oldest Post</a></li>
                                  <li><a class="dropdown-item" href="?sort=newest">Rating Post</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="box-view-type"><a class="view-type" href="my-job-list.php"><img src="assets/imgs/template/icons/icon-list.svg" alt="jobBox"></a><a class="view-type" href="my-job-grid.php"><img src="assets/imgs/template/icons/icon-grid-hover.svg" alt="jobBox"></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">

                      <?php
                      // Default sorting
                      $order_by = "created_date DESC"; 

                      // User Selected sorting
                      if (isset($_GET['sort'])) {
                          $sort_option = $_GET['sort'];

                          switch ($sort_option) {
                              case 'newest':
                                  $order_by = "created_date DESC";
                                  break;
                              case 'oldest':
                                  $order_by = "created_date ASC";
                                  break;
                              case 'top_rated':
                                  $order_by = "rating DESC";
                                  break;
                              default:
                                  $order_by = "created_date DESC";
                                  break;
                          }
                      }

                      // Fatch Data From Database
                      $sql = "SELECT * FROM `jobs` ORDER BY $order_by";
                      $query = mysqli_query($conn, $sql);

                      if($query)
                      {
                        while($row = mysqli_fetch_assoc($query))
                        {?>

                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                          <div class="card-grid-2 hover-up">
                            <div class="card-grid-2-image-left"><span class="flash"></span>
                              <div class="image-box"><img style="width: 50px; height: 50px; object-fit: cover;" src="assets/imgs/brands/<?php echo $row["Uploadefile"] ?>" alt="jobBox"></div>
                              <div class="right-info"><a class="name-job" href="#"><?php echo $row["Compname"] ?></a><span class="location-small"><?php echo $row["Joblocation"] ?></span></div>
                            </div>
                            <div class="card-block-info">
                              <h6><a href="#"><?php echo $row["Jobtitle"] ?></a></h6>
                              <div class="mt-5"><span class="card-briefcase"><?php echo $row["Workplace"] ?></span></div>
                              <p class="font-sm color-text-paragraph mt-15"><?php echo $row["Jobdescription"] ?></p>
                              <div class="mt-30"><a class="btn btn-tag"><?php echo $row["Tags"] ?></a>
                              </div>
                              <div class="card-2-bottom mt-30">
                                <div class="row">
                                  <div class="col-lg-7 col-7"><span class="card-text-price">$<?php echo $row["Salary"] ?></span><span class="text-muted">/Hour</span></div>
                                  <div class="col-lg-5 col-5 text-end">
                                    <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                    <?php }
                      } 
                      else 
                      {
                        echo "<h1>No results found</h1>";
                      }?>

                    </div>
                    <div class="paginations">
                      <ul class="pager">
                        <li><a class="pager-prev" href="#"></a></li>
                        <li><a class="pager-number active" href="#">1</a></li>
                        <li><a class="pager-number" href="#">2</a></li>
                        <li><a class="pager-number" href="#">3</a></li>
                        <li><a class="pager-number" href="#">4</a></li>
                        <li><a class="pager-number" href="#">5</a></li>
                        <li><a class="pager-number " href="#">6</a></li>
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
                    </label><a class="text-muted" href="page-contact.php">Lean more</a>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-default hover-up w-100" type="submit" name="login">Apply Job</button>
                  </div>
                  <div class="text-muted text-center">Do you need support? <a href="page-contact.php">Contact Us</a></div>
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
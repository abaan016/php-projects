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
            <h3 class="mb-35">Post a Job</h3>
          </div>
          <div class="box-breadcrumb"> 
            <div class="breadcrumbs">
              <ul> 
                <li> <a class="icon-home" href="index.php">Admin</a></li>
                <li><span>Post New Job</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row"> 
          <div class="col-lg-12">
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div class="box-padding bg-postjob">
                    <h5 class="icon-edu">Tell us about your role</h5>
                    <div class="row mt-30">
                      <div class="col-lg-9">
                        <div class="row">
                          <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-lg-12">
                              <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">Company title *</label>
                                <input class="form-control" type="text" name="compname" placeholder="Company Name">
                              </div>
                              <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">Job title *</label>
                                <input class="form-control" type="text" name="jobtitle" placeholder="e.g. Senior Product Designer">
                              </div>
                            </div>
                            <div class="col-lg-12"> 
                              <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">Add your job description *</label>
                                <textarea class="form-control" name="message" rows="8"></textarea>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">Job location</label>
                                <input class="form-control" type="text" name="location" placeholder="e.g. &quot;New York City&quot; or &quot;San Francisco”">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Workplace type *</label>
                                <select name="worktype" class="form-control">
                                  <option value="Remote">Remote</option>
                                  <option value="Parttime">Parttime</option>
                                  <option value="Fulltime">Fulltime</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Salary</label>
                                <input class="form-control" type="number" name="Salary"  placeholder="$2200 - $2500">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-30">
                                <label class="font-sm color-text-mutted mb-10">Tags (optional) </label>
                                <input class="form-control" type="text" name="tags" placeholder="Figma, UI/UX, Sketch...">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-30">
                                <div class="box-upload">
                                  <div class="add-file-upload">
                                    <input class="fileupload" type="file" name="file">
                                  </div><a class="btn btn-default">Upload File</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-30 box-file-uploaded d-flex align-items-center"><a class="btn btn-delete">Delete</a></div>
                            </div>
                            <div class="col-lg-12"> 
                              <div class="form-group mt-10">
                                <button class="btn btn-default btn-brand icon-tick" type="submit" name="postJob">Post New Job</button>
                              </div>
                            </div>
                          </form>
                          <!-- Form end -->
                          <!-- Add Job Post -->
                          <?php
                          if(isset($_POST["postJob"]))
                          {
                            $compNam = $_POST["compname"];
                            $title = $_POST["jobtitle"];
                            $desc = $_POST["message"];
                            $locat = $_POST["location"];
                            $type = $_POST["worktype"];
                            $salary = $_POST["Salary"];
                            $tags = $_POST["tags"];

                            $logo = $_FILES["file"]["name"];
                            $temp_name = $_FILES["file"]["tmp_name"];
                            $folder = "assets/imgs/brands/" . $logo;

                            $query = "INSERT INTO `jobs`(`Compname`, `Jobtitle`, `Jobdescription`, `Joblocation`, `Workplace`, `Salary`, `Tags`, `Uploadefile`) 
                            VALUES ('$compNam','$title','$desc','$locat','$type','$salary','$tags', '$logo')";

                            if(mysqli_query($conn, $query) && move_uploaded_file($temp_name, $folder))
                            {
                              echo '<script>alert("Post Uploaded Successfully")</script>';
                            }
                            else
                            {
                              echo '<script>alert("Something Went wrong!")</script>';
                            }
                          }
                          ?>
                          <!-- Add Job Post -->
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
        <!-- footer -->
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
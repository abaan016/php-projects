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
            <h3 class="mb-35">My Resume</h3>
          </div>
          <div class="box-breadcrumb"> 
            <div class="breadcrumbs">
              <ul> 
                <li> <a class="icon-home" href="index.php">Dashboard</a></li>
                <li><span>My Resume</span></li>
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
                    <h5>Update your CV</h5>
                    <div class="row mt-30">
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <form method="post" enctype="multipart/form-data">
                            <div class="box-upload">
                              <div class="add-file-upload">
                                <input class="fileupload" type="file" name="file">
                              </div><button class="btn btn-default" type="submit" name="saveResume">Upload File</button>
                            </div>
                          </form>
                          <!-- Resume Upload -->
                          <?php 
                          
                          if(isset($_POST["saveResume"]))
                          {
                            $cv = $_FILES["file"]["name"];
                            $temp_name = $_FILES["file"]["tmp_name"];
                            $folder = "assets/resume/" . $cv;

                            $update_query = "UPDATE `cvmanage` SET `UploadedFile`='$cv' WHERE `UserId` = $getId";
                                  $result = mysqli_query($conn, $update_query);

                                  if($result && move_uploaded_file($temp_name, $folder))
                                  {
                                      echo '<script>alert("Saved Resume")</script>';
                                  }else{
                                    echo '<script>alert("Resume are not saved")</script>';
                                  }
                           }
                          
                          
                          ?>
                          <!-- Resume Upload -->
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30 d-flex align-items-center box-file-uploaded"><a class="btn btn-delete">Delete</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <h5 class="icon-edu">Education</h5>
                    <div class="row mt-30">
                      <div class="col-lg-9">
                        <div class="row">
                          <form action="" method="post">
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-30"> 
                                  <label class="font-sm color-text-mutted mb-10">From</label>
                                  <input class="form-control" name="from" type="date" data-date-format="DD MMMM YYYY" data-date="17 September 2022"  placeholder="12 September 2008">
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-30"> 
                                  <label class="font-sm color-text-mutted mb-10">To</label>
                                  <input class="form-control" name="to" type="date" data-date-format="DD MMMM YYYY" data-date="17 September 2022"  placeholder="12 September 2008">
                                </div>
                              </div>
                              <div class="col-lg-12"> 
                                <div class="form-group mb-30"> 
                                  <label class="font-sm color-text-mutted mb-10">School or College</label>
                                  <input class="form-control" name="college" type="text">
                                </div>
                              </div>
                              <div class="col-lg-12"> 
                                <div class="form-group mb-30"> 
                                  <label class="font-sm color-text-mutted mb-10">Description</label>
                                  <textarea class="form-control" name="message" rows="5"></textarea>
                                </div>
                              </div>
                              <div class="col-lg-12"> 
                                <div class="form-group mt-10">
                                  <button class="btn btn-default btn-brand icon-tick" type="submit" name="AddEdu">Add Timeline</button>
                                </div>
                            </div>
                          </form>
                          <!-- Insert Education -->
                          <?php
                          
                          if(isset($_POST["AddEdu"]))
                          {
                            $from = $_POST["from"];
                            $to = $_POST["to"];
                            $coll = $_POST["college"];
                            $desc = $_POST["message"];

                            $query = "INSERT INTO `cvmanage`(`Educationfrom`, `Educationto`, `College`, `EducationDescription`, `UserId`) 
                            VALUES ('$from','$to', '$coll','$desc','$getId')";
                            
                            if(mysqli_query($conn, $query))
                            {
                              echo '<script>alert("Successfully Saved")</script>';
                            }
                            else{
                              echo '<script>alert("Something went wrong!")</script>';
                            }

                          }

                          ?>
                          <!-- Insert Education -->
                        </div>
                        <div class="box-timeline mt-50">
                          <?php
                          
                          $query = "SELECT YEAR(`Educationfrom`) as from_year , YEAR(`Educationto`) as to_year, College,`EducationDescription` FROM `cvmanage`;";
                          $result = mysqli_query($conn, $query);

                          if($result)
                          {
                            while($row = mysqli_fetch_assoc($result))
                            {?>

                            <div class="item-timeline"> 
                              <div class="timeline-year"> <span><?php echo $row["from_year"] . "-" . $row["to_year"] ?></span></div>
                              <div class="timeline-info"> 
                              <h5 class="color-brand-1 mb-20"><?php echo $row["College"] ?></h5>
                                <p class="color-text-paragraph-2 fw-bold mb-15"><?php echo $row["EducationDescription"] ?></p>
                              </div>
                              <div class="timeline-actions"> <a class="btn btn-editor"></a><a class="btn btn-remove"></a></div>
                            </div>
                              
                          <?php  }
                          } else { echo'<h5 class="color-brand-1 mb-20">No records found</h5>'; } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <h5 class="icon-edu">Work & Experience</h5>
                    <div class="row mt-30">
                      <div class="col-lg-9">
                        <div class="row">
                          <form enctype="multipart/form-data" method="post">
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">From</label>
                                <input class="form-control" type="date" name="expFrom" data-date-format="DD MMMM YYYY" data-date="17 September 2022">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">To</label>
                                <input class="form-control" type="date" name="expTo" data-date-format="DD MMMM YYYY" data-date="17 September 2022">
                              </div>
                            </div>
                            <div class="col-lg-12"> 
                              <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">Company Name</label>
                                <input class="form-control" name="Company">
                              </div>
                            </div>
                            <div class="col-lg-12"> 
                              <div class="form-group mb-30"> 
                                <label class="font-sm color-text-mutted mb-10">Description</label>
                                <input class="form-control" name="message">
                              </div>
                            </div>
                            <div class="col-lg-12"> 
                              <div class="form-group mt-10">
                                <button class="btn btn-default btn-brand icon-tick" type="submit" name="AddExp">Add Experiance</button>
                              </div>
                            </div>
                          </form>
                          <!-- Add Experiance -->
                          <?php 
                          
                          if(isset($_POST["AddExp"]))
                          {
                            $exfrom = $_POST["expFrom"];
                            $exto = $_POST["expTo"];
                            $com = $_POST["Company"];
                            $exDesc = $_POST["message"];

                            $query = "UPDATE `cvmanage` SET `Experiancefrom`='$exfrom',`Experianceto`='$exto',`Company`='$com',`ExperianceDescription`='$exDesc' WHERE `UserId` = $getId";
                            $result = mysqli_query($conn, $query);

                            if($result)
                            {
                              echo '<script>alert("Successfully Saved")</script>';
                            }
                            else{
                              echo '<script>alert("Something went wrong!")</script>';
                            }

                          }

                          ?>
                          <!-- Add Experiance -->
                        </div>
                        <div class="box-timeline mt-50">
                          <?php 
                          
                          $query = "SELECT YEAR(`Experiancefrom`) as from_year , YEAR(`Experianceto`) as to_year, `Company`,`ExperianceDescription` FROM `cvmanage`";
                          $result = mysqli_query($conn, $query);
                          
                          if($result)
                          {
                            while($row = mysqli_fetch_assoc($result))
                            {?>

                            <div class="item-timeline"> 
                              <div class="timeline-year"> <span><?php echo $row["from_year"] . "-" . $row["to_year"] ?></span></div>
                              <div class="timeline-info"> 
                                <h5 class="color-brand-1 mb-20"><?php echo $row["Company"] ?></h5>
                                <p class="color-text-paragraph-2 mb-15"><?php echo $row["ExperianceDescription"] ?></p>
                              </div>
                              <div class="timeline-actions"> <a class="btn btn-editor"></a><a class="btn btn-remove"></a></div>
                            </div>

                          <?php }
                          }?>
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
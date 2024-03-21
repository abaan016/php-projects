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
            <h3 class="mb-35">My Profile</h3>
          </div>
          <div class="box-breadcrumb"> 
            <div class="breadcrumbs">
              <ul> 
                <li> <a class="icon-home" href="index.php">Dashboard</a></li>
                <li><span>My Profile</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row"> 
                      <?php
                      
                      $getId = $_SESSION["id"];

                      $query = "SELECT * FROM `users` WHERE UserId = $getId";
                      $result = mysqli_query($conn, $query);

                      if($result)
                      {
                        while($row = mysqli_fetch_assoc($result))
                        {
                      ?>
          <div class="col-xxl-9 col-xl-8 col-lg-8">
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <h6 class="color-text-paragraph-2">Update your profile</h6>
                    <div class="box-profile-image"> 
                      <div class="img-profile"> <img style="width: 80px; height: 80px; border-radius: 10rem; object-fit: cover;" src="assets/imgs/page/dashboard/<?php echo $row["ProfileImage"] ?>" alt="jobBox"></div>
                      <form method="post" enctype="multipart/form-data">
                          <div class="info-profile">
                              <input class="btn btn-default me-3 " style="width: 200px;" type="file" name="file" value="Upload Avatar">
                              <button class="btn btn-default" name="saveimage" type="submit">Save</button>
                              <a class="btn btn-link">Delete</a>
                          </div>
                      </form>
                          <!-- Uploaded Profile -->
                          <?php 
                          
                          if(isset($_POST["saveimage"]))
                          {
                            $profImg = $_FILES["file"]["name"];
                            $temp_name = $_FILES["file"]["tmp_name"];
                            $folder = "assets/imgs/page/dashboard/" . $profImg;

                            $update_query = "UPDATE users SET ProfileImage = '$profImg' WHERE UserId = $getId";
                                  $result = mysqli_query($conn, $update_query);

                                  if($result && move_uploaded_file($temp_name, $folder))
                                  {
                                      echo '<script>alert("Saved profile picture")</script>';
                                  }else{
                                    echo '<script>alert("Picture are not saved")</script>';
                                  }
                           }
                          
                          
                          ?>
                          <!-- Uploaded Profile -->
                    </div>
                    <div class="row"> 
                      
                      <!-- Profile form -->
                      <form enctype="multipart/form-data" method="post">
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30"> 
                            <label class="font-sm color-text-mutted mb-10">Full Name *</label>
                            <input class="form-control" type="text" value="<?php echo $row["FullName"] ?>">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Email *</label>
                            <input class="form-control" type="text" value="<?php echo $row["Email"] ?>" placeholder="example@gmail.com">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Contact number</label>
                            <input class="form-control" type="text" name="Contact" value="<?php echo $row["Phone"] ?>" placeholder="01 - 234 567 89">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Personal website</label>
                            <input class="form-control" type="text" name="website" value="<?php echo $row["Website"] ?>" placeholder="https://alithemes.com">
                          </div>
                        </div>
                        <div class="col-lg-12"> 
                          <div class="form-group mb-30"> 
                            <label class="font-sm color-text-mutted mb-10">Bio</label>
                            <textarea class="form-control" name="message" value="<?php echo $row["Bio"] ?>" rows="5"><?php echo $row["Bio"] ?></textarea>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30"> 
                            <label class="font-sm color-text-mutted mb-10">Experience</label>
                            <input class="form-control" type="text" name="Experiance" value="<?php echo $row["Experiance"] ?>" placeholder="1 - 5 Years">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Education Levels</label>
                            <input class="form-control" type="text" name="Education" value="<?php echo $row["Education"] ?>" placeholder="Certificate">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Languages</label>
                            <input class="form-control" type="text" name="Languages" value="<?php echo $row["Languages"] ?>" placeholder="English, French">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Categories </label>
                            <input class="form-control" type="text" name="Categories" value="<?php echo $row["Categories"] ?>" placeholder="UI/UX designer">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Current Salary($)</label>
                            <input class="form-control" type="text" name="Csalary" value="<?php echo "$". $row["CurrentSalary"] ?>" >
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Expected Salary($) </label>
                            <input class="form-control" type="text" name="Esalary" value="<?php echo "$". $row["ExpectedSalary"] ?>" placeholder="$3500">
                          </div>
                        </div>
                        <div class="col-lg-12"> 
                          <div class="form-group mt-10">
                            <button class="btn btn-default btn-brand icon-tick" type="submit" name="updateprofile">Save Change</button>
                          </div>
                        </div>
                      </form>
                      <!-- Profile Form end -->
                      <?php                           
                        }
                      }
                        // Update Profile Code
                        if(isset($_POST["updateprofile"]))
                        {
                          $num = $_POST["Contact"];
                          $web = $_POST["website"];
                          $Bio = $_POST["message"];
                          $Exp = $_POST["Experiance"];
                          $Edu = $_POST["Education"];
                          $Lang = $_POST["Languages"];
                          $Categ = $_POST["Categories"];
                          $Csal = $_POST["Csalary"];
                          $Esal = $_POST["Esalary"];

                          $sql = "UPDATE `users` SET `Phone`=?, `Website`=?, `Bio`=?, `Experiance`=?, `Education`=?, `Languages`=?, `Categories`=?, `CurrentSalary`=?, `ExpectedSalary`=? WHERE `UserId` = ?";

                          $stmt = mysqli_prepare($conn, $sql);
                          mysqli_stmt_bind_param($stmt, "sssssssssi", $num, $web, $Bio, $Exp, $Edu, $Lang, $Categ, $Csal, $Esal, $getId);

                          if(mysqli_stmt_execute($stmt))
                          {
                            echo '<script>alert("Profile Updated")</script>';
                          }
                          else
                          {
                            echo '<script>alert("Something Went wrong!")</script>';
                          }
                          mysqli_stmt_close($stmt);
                        }
                        
                       ?>
                    </div>
                  </div>
                </div>
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <h6 class="color-text-paragraph-2">Contact Information</h6>
                    <div class="row mt-30">
                      <form method="post">
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30"> 
                            <label class="font-sm color-text-mutted mb-10">Country</label>
                            <input class="form-control" type="text" name="country" required placeholder="United States of America">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">City</label>
                            <input class="form-control" type="text" name="city" required placeholder="Chicago">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Complete Address</label>
                            <input class="form-control" type="text" name="address" required placeholder="205 North Michigan Avenue, Suite 810, Chicago, 60601, USA">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Find On Map</label>
                            <input class="form-control" type="text" name="map" placeholder="205 North Michigan Avenue, Suite 810, Chicago, 60601, USA">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Google Map</label>
                            <div class="box-map"> 
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.4860084541583!2d-87.62575418429162!3d41.88608087922149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca8b34afe61%3A0x6caeb5f721ca846!2s205%20N%20Michigan%20Ave%20Suit%20810%2C%20Chicago%2C%20IL%2060601%2C%20Hoa%20K%E1%BB%B3!5e1!3m2!1svi!2s!4v1663165156864!5m2!1svi!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12"> 
                          <div class="form-group mt-0">
                            <button class="btn btn-default btn-brand icon-tick" type="submit" name="SendContact">Save Change</button>
                          </div>
                        </div>
                      </form>
                      <!-- Contact Info -->
                      <?php 
                      
                      if(isset($_POST["SendContact"]))
                      {
                        $country = $_POST["country"];
                        $city = $_POST["city"];
                        $address = $_POST["address"];
                        $onmap = $_POST["map"];

                        $query = "INSERT INTO `contactinfo`(`Country`, `City`, `Address`, `Map`, `UserId`) 
                        VALUES ('$country','$city','$address','$onmap', '$getId')";

                        if(mysqli_query($conn, $query))
                        {
                          echo '<script>alert("Save Contact Info")</script>';
                        }
                        else
                        {
                          echo '<script>alert("Something Went wrong!")</script>';
                        }
                        
                      }

                      ?>
                      <!-- Contact Info -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-4">
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white">
                  <div class="panel-head"> 
                    <h5>Social Network</h5><a class="menudrop" id="dropdownMenu3" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownMenu3">
                      <li><a class="dropdown-item active" href="#">Add new</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Actions</a></li>
                    </ul>
                  </div>
                  <div class="panel-body pt-20">
                    <div class="row">
                      <form method="post">
                        <div class="col-lg-12"> 
                          <div class="form-group mb-30"> 
                            <label class="font-sm color-text-mutted mb-10">Facebook</label>
                            <input class="form-control" type="text" name="fb" placeholder="https://www.facebook.com">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Twitter</label>
                            <input class="form-control" type="text" name="twit" placeholder="https://twitter.com">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Instagram</label>
                            <input class="form-control" type="text" name="insta" placeholder="https://www.instagram.com">
                          </div>
                        </div>
                        <div class="col-lg-12"> 
                          <div class="form-group mt-0">
                            <button class="btn btn-default btn-brand icon-tick" type="submit" name="saveSocial">Save Change</button>
                          </div>
                        </div>
                      </form>
                      <!-- Social -->
                      <?php 
                      
                      if(isset($_POST["saveSocial"]))
                      {
                        $facebook = $_POST["fb"];
                        $Twitter = $_POST["twit"];
                        $Instagram = $_POST["insta"];

                        $query = "INSERT INTO `socialnetwork`( `Facebook`, `Twitter`, `Instagram`, `UserId`) 
                        VALUES ('$facebook','$Twitter','$Instagram','$getId')";

                        if(mysqli_query($conn, $query))
                        {
                          echo '<script>alert("Save Social Info")</script>';
                        }
                        else
                        {
                          echo '<script>alert("Something Went wrong!")</script>';
                        }

                      }

                      ?>
                      <!-- Social -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white">
                  <div class="panel-head"> 
                    <h5>My Skill</h5><a class="menudrop" id="dropdownMenu3" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"></a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownMenu3">
                      <li><a class="dropdown-item active" href="#">Add new</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Actions</a></li>
                    </ul>
                  </div>
                  <div class="panel-body pt-20">
                    <div class="row">
                      <div class="col-lg-12"> 
                        <div class="form-group mb-30"> 
                          <input class="form-control icon-search-right" type="text" placeholder="E.g. Angular, Laravel...">
                        </div>
                      </div>
                      <div class="col-lg-12"> 
                        <div class="mb-20"><a class="btn btn-tag tags-link">Figma<span></span></a><a class="btn btn-tag tags-link">Adobe XD<span></span></a><a class="btn btn-tag tags-link">NextJS<span></span></a><a class="btn btn-tag tags-link">React<span></span></a><a class="btn btn-tag tags-link">App<span></span></a><a class="btn btn-tag tags-link">Digital<span></span></a><a class="btn btn-tag tags-link">NodeJS<span></span></a></div>
                        <div class="mt-30 mb-40"> <span class="info-icon font-sm color-text-paragraph-2">You can add up to 15 skills</span></div>
                      </div>
                      <div class="col-lg-12"> 
                        <div class="form-group mt-0">
                          <button class="btn btn-default btn-brand icon-tick">Save Change</button>
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
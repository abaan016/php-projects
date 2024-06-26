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
            <h3 class="mb-35">Setting</h3>
          </div>
          <div class="box-breadcrumb"> 
            <div class="breadcrumbs">
              <ul> 
                <li> <a class="icon-home" href="index.php">Dashboard</a></li>
                <li><span>Setting</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row"> 
          <div class="col-xxl-9 col-xl-8 col-lg-8">
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <h6 class="color-text-paragraph-2">Update your profile</h6>
                    <div class="box-profile-image"> 
                      <div class="img-profile"> <img src="assets/imgs/page/dashboard/img3.png" alt="jobBox"></div>
                      <div class="info-profile"> <a class="btn btn-default">Company Logo / Brand</a><a class="btn btn-link">Delete</a></div>
                    </div>
                    <div class="row"> 
                      <form method="post"> 
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30"> 
                            <label class="font-sm color-text-mutted mb-10">Company Name *</label>
                            <input class="form-control" type="text" placeholder="WillowTree">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Email *</label>
                            <input class="form-control" type="text" placeholder="willowtree@gmail.com">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Contact number</label>
                            <input class="form-control" type="text" placeholder="01 - 234 567 89">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Website</label>
                            <input class="form-control" type="text" placeholder="https://alithemes.com">
                          </div>
                        </div>
                        <div class="col-lg-12"> 
                          <div class="form-group mb-30"> 
                            <label class="font-sm color-text-mutted mb-10">Bio</label>
                            <textarea class="form-control" name="message" rows="5">We are AliThemes , a creative and dedicated group of individuals who love web development almost as much as we love our customers. We are passionate team with the mission for achieving the perfection in web design.</textarea>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30"> 
                            <label class="font-sm color-text-mutted mb-10">Experience</label>
                            <input class="form-control" type="text" placeholder="1 - 5 Years">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Number of employees</label>
                            <input class="form-control" type="text" placeholder="1-50 employees">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Languages</label>
                            <input class="form-control" type="text" placeholder="English, French">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Categories </label>
                            <input class="form-control" type="text" placeholder="UI/UX, Web Design, Brand identity">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Working time</label>
                            <input class="form-control" type="text" placeholder="Full time">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group mb-30">
                            <label class="font-sm color-text-mutted mb-10">Average wage </label>
                            <input class="form-control" type="text" placeholder="$3500">
                          </div>
                        </div>
                        <div class="col-lg-12"> 
                          <div class="form-group mt-10">
                            <button class="btn btn-default btn-brand icon-tick">Save Change</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="panel-white mb-30">
                  <div class="box-padding">
                    <h6 class="color-text-paragraph-2">Contact Information</h6>
                    <div class="row mt-30">
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Country</label>
                          <input class="form-control" type="text" placeholder="United States of America">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">City</label>
                          <input class="form-control" type="text" placeholder="Chicago">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Complete Address</label>
                          <input class="form-control" type="text" placeholder="205 North Michigan Avenue, Suite 810, Chicago, 60601, USA">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Find On Map</label>
                          <input class="form-control" type="text" placeholder="205 North Michigan Avenue, Suite 810, Chicago, 60601, USA">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Latitude</label>
                          <input class="form-control" type="text" placeholder="41.881832">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Longitude</label>
                          <input class="form-control" type="text" placeholder=" -87.623177">
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
                          <button class="btn btn-default btn-brand icon-tick">Save Change</button>
                        </div>
                      </div>
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
                      <div class="col-lg-12"> 
                        <div class="form-group mb-30"> 
                          <label class="font-sm color-text-mutted mb-10">Facebook</label>
                          <input class="form-control" type="text" placeholder="https://www.facebook.com">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Twitter</label>
                          <input class="form-control" type="text" placeholder="https://twitter.com">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group mb-30">
                          <label class="font-sm color-text-mutted mb-10">Instagram</label>
                          <input class="form-control" type="text" placeholder="https://www.instagram.com">
                        </div>
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
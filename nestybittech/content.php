<!DOCTYPE html>
<html lang="en">
<head>

<!-- LINK -->
<?php require_once("links.php")?>
<!-- LINK -->

<style>

.stats-card {
  margin-bottom: 20px;
}

.stats {
  text-align: center;
  padding: 20px;
  border: 1px solid var(--body);
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
}

.stats:hover {
  transform: scale(1.05);
}

.counting {
  font-size: 36px;
  font-weight: bold;
  color: var(--primary);
}

</style>

<title>Content</title>
</head>
<body>

  <!-- HERO -->
  <div class="hero vh-100 d-flex align-items-center" id="home">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx-auto text-center">
          <img src="assets/images/nblog2.png" class="img-fluid " style="width: 200px;" alt="">
          <p class="text-white mb-4">Trust Nestybit Tech to transform your digital ideas into reality with our expertise and dedication to excellence</p>
          <a href="#" class="btn me-2 btn-custom">Get Started</a>
          <a href="#" class="btn btn-outline-light">Portfolio</a>
        </div>
      </div>
    </div>
  </div>
  <!-- HERO END -->

  <!-- ADS -->
  <!-- ADS -->

  <!-- SERVICES -->
  <section id="service" class="bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-8 mx-auto text-center">
          <h1>Our Services</h1>
          <p>Innovative Solutions for a Digital World - NestyBit Tech, Where Software Expertise Meets Your Unique Needs, Leading the Way Forward</p>
        </div>
      </div>
      <div class="row g-4 text-center">
        <div class="col-lg-6 col-sm-12">
          <div class="service card-effect p-5 bg-white">
            <div class="iconbox mx-auto">
              <i class='fa-sharp fa-solid fa-pen-nib'></i>
            </div>
            <h5 class="mt-4 mb-2">Graphics Design</h5>
            <p>Transforming Ideas into Visual Excellence, Your Trusted Graphic Design Service Company</p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#graphicModal">Read more</a>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="service card-effect p-5 bg-white">
            <div class="iconbox mx-auto">
              <i class='fa-solid fa-laptop'></i>
            </div>
            <h5 class="mt-4 mb-2">Website Design & Development</h5>
            <p>Building Digital Wonders, NestyBit Tech's Web Design and <br> Development Marvels</p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#webdesignModal">Read more</a>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="service card-effect p-5 bg-white">
            <div class="iconbox mx-auto">
              <i class='fa-brands fa-wordpress'></i>
            </div>
            <h5 class="mt-4 mb-2">Wordpress Development</h5>
            <p>Elevate Your Web Presence with NestBit Tech's <br> WordPress Mastery</p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#wordpressModal">Read more</a>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="service card-effect p-5 bg-white">
            <div class="iconbox mx-auto">
              <i class='fa-solid fa-film'></i>
            </div>
            <h5 class="mt-4 mb-2">Video Editing & Ads</h5>
            <p>Breathing Life into Your Vision, NestyBit Tech's Artistry in Video Editing and Ads Creation</p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal">Read more</a>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="service card-effect p-5 bg-white">
            <div class="iconbox mx-auto">
              <i class='fa-sharp fa-solid fa-bullhorn'></i>
            </div>
            <h5 class="mt-4 mb-2">Digital Marketing</h5>
            <p>Navigating the Digital Horizon, Unleashing Potential with NestyBit Tech's Marketing Expertise</p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#digiModal">Read more</a>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="service card-effect p-5 bg-white">
            <div class="iconbox mx-auto">
              <i class='fa-solid fa-wand-magic-sparkles'></i>
            </div>
            <h5 class="mt-4 mb-2">UI/UX Design</h5>
            <p>Elevating User Experiences, NestyBit Tech's UI/UX Design <br> Excellence</p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#uidesignModal">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SERVICES -->

  <!-- WORK -->
<section id="portfolio">
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-md-8 mx-auto text-center project">
          <h1>Our Recent Work</h1>
          <p>Our Most Recent Successes: NestyBit Tech's Most Recent Efforts to Transform Ideas into Exceptional Digital Solutions</p>
        </div>
      </div>
    <?php
    $projects = json_decode('[
  {"title": "Skull", "imageSrc": "assets/images/skulllogo.jpg", "category": "Logo Design", "link": ""},
  {"title": "Durable Furniture", "imageSrc": "assets/images/durable.png", "category": "Website Design", "link": "https://abaan016.github.io/durable-furniture/"},
  {"title": "Wolf", "imageSrc": "assets/images/wolflogo.jpg", "category": "Logo Design", "link": ""},
  {"title": "Nature", "imageSrc": "assets/images/nature.png", "category": "Website Design", "link": "https://abaan016.github.io/Nature/"},
  {"title": "Kreative", "imageSrc": "assets/images/kreativ.png", "category": "Website Design", "link": "https://abaan016.github.io/Kreatives/"},
  {"title": "Eagle Game", "imageSrc": "assets/images/yellowbaner.jpg", "category": "Banner Design", "link": ""}
    ]', true);

    echo '<div class="owl-carousel">'; 
    foreach ($projects as $project) {
    echo '<div class="item">';
    echo '<div class="col-lg-12 col-md-6">';
    echo '<a href="' . $project['link'] . '" target="_blank">'; // Wrap image and details inside anchor
        echo '<div class="project">';
    echo '<img src="' . $project['imageSrc'] . '" class="img-fluid" style="width: 100%; height: 350px;" alt="">';
    echo '<div class="overlay">';
    echo '<div>';
    echo '<h4 class="text-white">' . $project['title'] . '</h4>';
    echo '<h6 class="text-white">' . $project['category'] . '</h6>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</a>';
    echo '</div>';
    echo '</div>';
    }
    echo '</div>';
    ?>
    </div>
</section>
  <!-- WORK -->

  <!-- ABOUT -->
<section id="about">
  <div class="container">

      <!-- HEADING -->
      <div class="row mb-5">
          <div class="col-md-8 mx-auto text-center">
            <h1>About us</h1>
            <p>Thoughts, Stories, and a Dash of Creativity</p>
          </div>
      </div>

      <!-- HERO  -->
    <div class="row">

        <div class="col-md-6 text-center">
          <img src="assets/images/aboutpng.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6">

            <h2 class="my-4">Welcome to NestyBit Tech: Pioneering Innovation Globally</h2>
            <p class="lead">At NestyBit Tech, we transcend boundaries with technology. Established with a vision to redefine excellence in the world of software solutions, we are a dynamic and forward-thinking company committed to delivering cutting-edge products and services.</p>
            <p class="lead">Founded just a short while ago, NestyBit Tech has swiftly evolved into a hub of innovation and expertise. From the inception, our focus has been clear — to elevate your digital experience and propel businesses to new heights.</p>
            <a href="#portfolio" class="btn btn-custom">Explore Our Work</a>

        </div>

      </div> <!--Row CLose Div-->

    </div>

    <!-- PROJECT STATICTS -->
    <div class="container my-5">
      <div class="row">

            <div class="col-lg-3 stats-card">
            <div class="stats">
              <div class="iconbox mx-auto">
              <i class="fa fa-code" aria-hidden="true"></i>
              </div>
              <div class="counting" data-count="900000">0</div>
              <h5>Lines of code</h5>
            </div>
          </div>

          <div class="col-lg-3 stats-card">
            <div class="stats">
              <div class="iconbox mx-auto">
              <i class="fa fa-check" aria-hidden="true"></i>
              </div>
              <div class="counting" data-count="280">0</div>
              <h5>Projects done</h5>
            </div>
          </div>

          <div class="col-lg-3 stats-card">
            <div class="stats">
              <div class="iconbox mx-auto">
              <i class="fa fa-user" aria-hidden="true"></i>
              </div>
              <div class="counting" data-count="75">0</div>
              <h5>Happy clients</h5>
            </div>
          </div>

          <div class="col-lg-3 stats-card">
            <div class="stats">
              <div class="iconbox mx-auto">
              <i class="fa fa-coffee" aria-hidden="true"></i>
              </div>
              <div class="counting" data-count="999">0</div>
              <h5>Cups of coffee</h5>
            </div>
          </div>


      </div>
      <!-- end row -->

      
    </div>
    <!-- end container -->

    <!-- TEAM -->

    <div class="container">
      <div class="row">

        <div class="col-lg-3">
          <div class="card team-card">
            <div class="team-img mx-auto text-center">
            <img src="assets/images/user2.jpg" class="img-fluid" alt="">
            </div>
            <h3 class="mt-3" style="color: var(--primary);">John Doe</h3>
            <p class="lead">Web Designer</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card team-card">
            <div class="team-img mx-auto text-center">
            <img src="assets/images/user2.jpg" class="img-fluid" alt="">
            </div>
            <h3 class="mt-3" style="color: var(--primary);">John Doe</h3>
            <p class="lead">Web Designer</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card team-card">
            <div class="team-img mx-auto text-center">
            <img src="assets/images/user2.jpg" class="img-fluid" alt="">
            </div>
            <h3 class="mt-3" style="color: var(--primary);">John Doe</h3>
            <p class="lead">Web Designer</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card team-card">
            <div class="team-img mx-auto text-center">
            <img src="assets/images/user2.jpg" class="img-fluid" alt="">
            </div>
            <h3 class="mt-3" style="color: var(--primary);">John Doe</h3>
            <p class="lead">Web Designer</p>
          </div>
        </div>

      </div>
    </div>

    <!-- TEAM -->



</section>
    <!-- ABOUT -->


    <!-- CONTACT -->
  <section id="contact" class="bg-light">
    <div class="container-fluid">
    <div class="row mb-3">
                  <div class="col-md-8 mx-auto text-center project">
                      <h6>Contact</h6>
                      <h1>Get In Touch</h1>
                  </div>
              </div> 
        <div class="row ">
        <div class="col-lg-7 mt-5">


          <form method="post" class="row g-3 justify-content-center">
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Name" name="Name" required>
          </div>
          <div class="col-md-5">
            <input type="email" class="form-control" placeholder="Enter E-mail" name="email" required>
          </div>
          <div class="col-md-10">
            <select class="form-control" name="project" required>
              <option>Select Project type</option>
              <option>Graphic Design</option>
              <option>Website Deisgn & Development</option>
              <option>Wordpress Developer</option>
              <option>Video Editing & Ads</option>
              <option>Digital Marketing</option>
              <option>UI/UX Design</option>
            </select>
          </div>
          <div class="col-md-10">
          <select class="form-select" id="country" name="country" required>
            <option>select country</option>
            <option value="AF">Afghanistan</option>
            <option value="AX">Aland Islands</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AO">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AQ">Antarctica</option>
            <option value="AG">Antigua and Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AM">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia</option>
            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BV">Bouvet Island</option>
            <option value="BR">Brazil</option>
            <option value="IO">British Indian Ocean Territory</option>
            <option value="BN">Brunei Darussalam</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="CA">Canada</option>
            <option value="CV">Cape Verde</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CX">Christmas Island</option>
            <option value="CC">Cocos (Keeling) Islands</option>
            <option value="CO">Colombia</option>
            <option value="KM">Comoros</option>
            <option value="CG">Congo</option>
            <option value="CD">Congo, Democratic Republic of the Congo</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CI">Cote D'Ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CW">Curacao</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FK">Falkland Islands (Malvinas)</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="TF">French Southern Territories</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GG">Guernsey</option>
            <option value="GN">Guinea</option>
            <option value="GW">Guinea-Bissau</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HM">Heard Island and Mcdonald Islands</option>
            <option value="VA">Holy See (Vatican City State)</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IR">Iran, Islamic Republic of</option>
            <option value="IQ">Iraq</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="KP">Korea, Democratic People's Republic of</option>
            <option value="KR">Korea, Republic of</option>
            <option value="XK">Kosovo</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Lao People's Democratic Republic</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libyan Arab Jamahiriya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
            <option value="MG">Madagascar</option>
            <option value="MW">Malawi</option>
            <option value="MY">Malaysia</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="YT">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="FM">Micronesia, Federated States of</option>
            <option value="MD">Moldova, Republic of</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="ME">Montenegro</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Namibia</option>
            <option value="NR">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="NL">Netherlands</option>
            <option value="AN">Netherlands Antilles</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NU">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestinian Territory, Occupied</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PN">Pitcairn</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="RE">Reunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="RW">Rwanda</option>
            <option value="BL">Saint Barthelemy</option>
            <option value="SH">Saint Helena</option>
            <option value="KN">Saint Kitts and Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="MF">Saint Martin</option>
            <option value="PM">Saint Pierre and Miquelon</option>
            <option value="VC">Saint Vincent and the Grenadines</option>
            <option value="WS">Samoa</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome and Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="CS">Serbia and Montenegro</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SX">Sint Maarten</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="SO">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="GS">South Georgia and the South Sandwich Islands</option>
            <option value="SS">South Sudan</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SJ">Svalbard and Jan Mayen</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syrian Arab Republic</option>
            <option value="TW">Taiwan, Province of China</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania, United Republic of</option>
            <option value="TH">Thailand</option>
            <option value="TL">Timor-Leste</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad and Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TM">Turkmenistan</option>
            <option value="TC">Turks and Caicos Islands</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela</option>
            <option value="VN">Viet Nam</option>
            <option value="VG">Virgin Islands, British</option>
            <option value="VI">Virgin Islands, U.s.</option>
            <option value="WF">Wallis and Futuna</option>
            <option value="EH">Western Sahara</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
        </select>
          </div>
          <div class="col-md-10">
            <textarea required name="msg" id="" cols="30" rows="5" class="form-control w-100" placeholder="Enter Message"></textarea>
          </div>
          <div class="col-md-10 d-grid">
                  <button class="btn btn-custom" name="submit">Submit</button>
                </div>
          </form>

          <!-- PHP START -->

          <?php

          require_once("db.php");
          
          if(isset($_POST['submit']))
          {
            $name=$_POST['Name'];
            $email=$_POST['email'];
            $project=$_POST['project'];
            $country=$_POST['country'];
            $message=$_POST['msg'];

            $sql="INSERT INTO `tblcontact`(`Name`, `Email`, `Project`, `Country`, `Message`) 
            VALUES ('$name','$email','$project','$country','$message')";

            $exe=mysqli_query($con,$sql);
            if($exe)
            {
              echo "<script>alert(swal({
                title: ''Thank You!,
                text: 'Your Request are successfully!',
                icon: 'Submitted',
                button: 'OK!',
              });)</script>";
            }
            else{
              echo "<script>alert(swal({
                title: ''Sorry!,
                text: 'Your Request are corrupt!',
                icon: 'Error',
                button: 'OK!',
              });)</script>";
            }
          }

          ?>

          <!-- PHP END -->


        </div>

        <div class="col-lg-5">
          <img src="assets/images/contact.jpeg" style="height: 350px; width: 100%;" class="img-fluid mt-5" alt="">
        </div>

      </div>
        </div>
  </section>
    <!-- CONTACT -->


    <!-- REVIEWS -->
  <section id="review">

    <div class="container">

    <div class="row ">
    <div class="col-md-8 mx-auto text-center">
      <h1>Reviews</h1>
      <p>Our recent happy clients reviews</p>
    </div>
  </div>

  <!-- contact -->
    <!-- Modal -->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Feedback Form</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <!-- Your feedback form goes here -->
      <form method="post" class="row g-3 justify-content-center">
        <div class="col-md-5">
          <input type="text" class="form-control" placeholder="Name" name="Name" required>
        </div>
        <div class="col-md-5">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
        </div>
        <div class="col-md-10">
          <textarea required name="feedback" id="" cols="30" rows="5" class="form-control w-100" placeholder="Enter your feedback"></textarea>
        </div>
        <div class="col-md-10 d-grid">
          <button class="btn btn-custom" name="submit" style="border-radius: 2rem;">Submit</button>
        </div>
      </form>
    </div>
  </div>
    </div>
    </div>

    <!-- review -->

    <div class="container">
        <div class="row">
                <div id="feedbackCarousel" class="carousel slide text-dark" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <?php
                        require_once("db.php");

                        $sql = "SELECT * FROM `tblfeedback`";
                        $result = $con->query($sql);
                        $active = true;

                        if ($result->num_rows > 0) {
                            echo '<div class="owl-carousel">';
                            
                            while ($row = $result->fetch_assoc()) {
                                $activeClass = ($active) ? 'active' : '';
                                echo '<div class="col-md-12 mb-4 mb-md-0">';
                                echo '<div class="item ' . $activeClass . '">';
                                echo '<div class="card">';
                                echo '<div class="card-body">';
                                echo '<h4 class="card-title">' . $row["Name"] . '</h4>'; // Updated column name
                                echo '<h6>' . $row["Email"] . '</h6>'; // Updated column name
                        
                                // Displaying feedback with a fixed height and Read More option
                                $feedback = $row["Feedback"];
                                $maxLength = 120; // Set your desired maximum length
                                $feedbackId = 'feedback_' . $active; // Create a unique ID for each feedback
                        
                                echo '<div id="' . $feedbackId . '" class="feedback-container" style="max-height: 100px; overflow: hidden;">'; // Adjust the height as needed
                                echo substr($feedback, 0, $maxLength);
                                if (strlen($feedback) > $maxLength) {
                                    echo '... <a href="#" class="read-more" data-fulltext="' . htmlspecialchars($feedback) . '" data-target="' . $feedbackId . '">Read More</a>';
                                }
                                echo '</div>';
                        
                                echo '<p class="font-italic font-weight-normal mb-0">- ' . $row["Name"] . '</p>'; // Displaying name again, you can customize this as needed
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                $active = false;
                            }
                            
                            echo '</div>'; // Close Owl Carousel container
                        } else {
                            echo "No records found";
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- review -->

    <div class="mm text-center">
    <button type="button" class="btn btn-custom mt-5" data-bs-toggle="modal" data-bs-target="#feedbackModal">
      Give me Your Feedback
    </button>
    </div>

    </section>

    <!-- PHP START -->

    <?php
      
      require_once("db.php");

    if(isset($_POST['submit'])) {
      $name = mysqli_real_escape_string($con, $_POST['Name']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $message = mysqli_real_escape_string($con, $_POST['feedback']);

      $feedsql = "INSERT INTO `tblfeedback`(`Name`, `Email`, `Feedback`) 
                  VALUES ('$name','$email','$message')";

      $exe = mysqli_query($con, $feedsql);
      if($exe) {
          echo "<script>alert('Thank You 🤗 for your feedback')</script>";
      } else {
          echo "<script>alert('Sorry! Check Fields!')</script>";
      }
    }

          ?>

          <!-- PHP END -->

    
    
      </div>
</section>
  <!-- REVIEWS -->

<!-- DESCRIPTION MODALS -->

<!-- Graphic Design -->
<div class="modal fade" id="graphicModal" tabindex="-1" aria-labelledby="graphicModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="graphicModalLabel">Graphic Designing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto text-center">
                            <h1>Graphic Designing</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">

                    <p class="lead mt-5">In the visual-centric world of today, graphic design is the art that breathes life into ideas, transforms concepts into compelling visuals, and communicates messages with impact. Whether you're a business looking to make a strong impression or an individual with a creative vision, graphic design is a key element in capturing attention and conveying your message effectively. In this article, we'll explore the world of graphic design, uncover its significance, and share insights on how to harness its power to create stunning visuals.</p>

                    <h2 class="text-danger">The Impact of Graphic Design</h2>

                    <h3>Visual Communication</h3>
                    <p class="lead">Graphic design is a universal language that transcends barriers. It enables you to communicate complex ideas, emotions, and messages through imagery, color, typography, and layout. Effective graphic design captivates and engages your audience, leaving a memorable impression.</p>

                    <h3>Brand Identity</h3>
                    <p class="lead">Your brand's visual identity is often the first interaction customers have with your business. A well-crafted logo, consistent color schemes, and visually appealing marketing materials can instill trust, recognition, and loyalty.</p>

                    <h3>Web and Digital Presence</h3>
                    <p class="lead">In the digital age, your online presence is crucial. A well-designed website, engaging social media graphics, and eye-catching banners enhance user experience and contribute to better online visibility.</p>

                    <h2 class="text-danger">The Role of Graphic Design</h2>

                    <h3>Logo Design</h3>
                    <p class="lead">A logo is the cornerstone of your brand's visual identity. It should be unique, memorable, and instantly recognizable. Graphic designers work to create logos that encapsulate your brand's essence.</p>

                    <h3>Print Materials</h3>
                    <p class="lead">From business cards and brochures to posters and flyers, graphic design is instrumental in creating print materials that convey your message effectively and professionally.</p>

                    <h2 class="text-danger">The Art of Graphic Design</h2>

                    <h3>Understanding the Audience</h3>
                    <p class="lead">Successful graphic design begins with understanding your target audience. Knowing their preferences, needs, and demographics helps in creating designs that resonate.</p>

                    <h3>Creativity and Innovation</h3>
                    <p class="lead">Graphic designers are artists who constantly seek creative solutions. They experiment with color, typography, and layout to produce visually striking and unique designs.</p>

                    <h3>Attention to Detail</h3>
                    <p class="lead">Graphic designers pay meticulous attention to every element of a design, from pixel-perfect alignment to choosing the right typeface. Details matter in creating a polished final product.</p>

                    <h3>Adaptability</h3>
                    <p class="lead">Graphic designers stay current with design trends and adapt their style to suit the project and client's needs, whether it's creating a vintage-inspired poster or a modern, minimalist logo.</p>

                    <h2 class="text-danger">Our Expertise in Graphic Design</h2>
                    <p class="lead">At NestyBitTech, we are passionate about turning your vision into visually stunning reality. Our team of skilled graphic designers understands the nuances of design and branding, ensuring that your visual identity stands out in a crowded marketplace.</p>

                    <h3>Our graphic design services include:</h3>
                    <ul>
                        <li class="lead">- Logo Design and Branding</li>
                        <li class="lead">- Print and Marketing Materials</li>
                        <li class="lead">- Web and Social Media Graphics</li>
                        <li class="lead">- Illustrations and Digital Art</li>
                    </ul>

                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------- -->

<!-- WEB DESIGN -->
<div class="modal fade" id="webdesignModal" tabindex="-1" aria-labelledby="webdesignModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="webdesignModalLabel">Website Design & Development</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto text-center">
                            <h1>Website Design & Development</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">

                    <p class="lead mt-5">In today's digital age, a strong online presence is essential for businesses and individuals alike. Your website serves as your virtual storefront, and it's often the first impression people have of your brand. At NestyBitTech, we understand the significance of web design and development in creating a lasting impact on your audience. In this article, we delve into the world of website design and development, exploring its importance and offering insights into how you can make the most of it.</p>

                    <h2 class="text-danger">The Power of Website Design</h2>
                    <p class="lead">Your website's design is the visual representation of your brand's identity. It's not just about aesthetics; it's about conveying your message effectively. Here are some key aspects to consider:</p>

                    <h3>1. User Experience (UX)</h3>
                    <p class="lead">User experience is at the heart of good web design. A user-friendly website is easy to navigate, loads quickly, and provides valuable content. A well-structured site with intuitive menus and clear calls-to-action can significantly improve user satisfaction.</p>

                    <h3> 2. Mobile Responsiveness</h3>
                    <p class="lead">With the majority of internet traffic coming from mobile devices, ensuring your website is responsive is crucial. Responsive design adapts your site's layout to different screen sizes, providing a seamless experience for users on smartphones, tablets, and desktops.</p>

                    <h3>3. Visual Appeal</h3>
                    <p class="lead">Your website's visual elements, including colors, fonts, images, and videos, should align with your brand's identity. Consistency in design elements across your site helps in building brand recognition.</p>

                    <h2 class="text-danger">The Role of Web Development</h2>
                    <p class="lead">While design captures attention, web development brings functionality to your site. Here are some key aspects of web development:</p>

                    <h3>1. Content Management Systems (CMS)</h3>
                    <p class="lead">A CMS like WordPress, Drupal, or Joomla simplifies content updates and website maintenance. It allows you to add, edit, and organize content without needing extensive technical knowledge.</p>

                    <h3>2. E-Commerce Integration</h3>
                    <p class="lead">For businesses, e-commerce integration is vital. It enables you to sell products or services online, manage inventory, and process payments securely.</p>

                    <h3>3. SEO Optimization</h3>
                    <p class="lead">Search engine optimization (SEO) is essential for increasing your website's visibility in search engine results. Proper coding, meta tags, and keyword optimization are crucial aspects of web development that impact SEO.</p>

                    <h2 class="text-danger">NestyBitTech: Your Partner in Web Success</h2>
                    <p class="lead">At NestyBitTech, we specialize in creating websites that not only look great but also perform exceptionally. Our team of skilled designers and developers work together to ensure your website not only captures your brand's essence but also functions seamlessly.</p>

                    <h3>Our services include:</h3>
                    <ul>
                        <li class="lead">Custom Web Design: Tailored designs that resonate with your brand.</li>
                        <li class="lead">Web Development: Robust and responsive websites built to perform.</li>
                        <li class="lead">E-Commerce Solutions: Secure online stores for businesses.</li>
                        <li class="lead">SEO Services: Optimizing your site for better search engine rankings.</li>
                    </ul>

                    <p class="lead">In conclusion, your website is your digital identity, and its design and development are critical to your online success. Whether you're a business looking to expand your online presence or an individual showcasing your portfolio, NestyBitTech is here to help you craft a compelling web presence that leaves a lasting impact.</p>

                    

                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------- -->

<!-- WORDPRESS -->
<div class="modal fade" id="wordpressModal" tabindex="-1" aria-labelledby="wordpressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="wordpressModalLabel">WordPress Development</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto text-center">
                            <h1>WordPress Development</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">

                    <p class="lead mt-5">In today's digital landscape, having a strong online presence is crucial, and your website serves as the gateway to the virtual world. WordPress, a versatile and user-friendly content management system (CMS), has emerged as a powerful tool for building websites that are not only visually appealing but also highly functional. In this article, we'll explore the world of WordPress development, highlighting its importance and sharing insights on how it can empower your online endeavors.</p>

                    <h2 class="text-danger">Unleashing the Power of WordPress</h2>

                    <h3>What is WordPress?</h3>
                    <p class="lead">WordPress is an open-source CMS that empowers individuals, businesses, and organizations to create and manage websites with ease. It is known for its flexibility, scalability, and a vast ecosystem of themes and plugins that extend its functionality.</p>

                    <h3>User-Friendly Content Management</h3>
                    <p class="lead">One of the key strengths of WordPress is its intuitive content management system. Non-technical users can easily add, edit, and organize content, making it an ideal choice for businesses and bloggers.</p>

                    <h3>Versatility and Customization</h3>
                    <p class="lead">WordPress is highly customizable. You can choose from thousands of themes and plugins to tailor your website to your specific needs, whether you're creating a blog, e-commerce store, portfolio, or corporate site.</p>

                    <h2 class="text-danger">The Art of WordPress Development</h2>

                    <h3>Custom Themes and Designs</h3>
                    <p class="lead">While WordPress offers a variety of ready-made themes, many businesses and individuals opt for custom themes to stand out in a crowded online space. WordPress developers create bespoke designs that reflect your brand's identity and vision.</p>

                    <h3>Functionality and Plugins</h3>
                    <p class="lead">WordPress plugins are like apps for your website, adding a wide range of features and functionality. Developers can create custom plugins to meet your unique requirements, from e-commerce solutions to advanced forms and membership systems.</p>

                    <h3>Performance Optimization</h3>
                    <p class="lead">Website speed and performance are critical for user experience and SEO. WordPress developers optimize your site's performance by fine-tuning code, implementing caching solutions, and ensuring fast loading times.</p>

                    <h3>Security</h3>
                    <p class="lead">Security is a top concern in the digital world. WordPress developers take measures to safeguard your website, implementing security best practices and regularly updating your site to protect against vulnerabilities.</p>

                    <h2 class="text-danger">Our Expertise in WordPress Development</h2>

                    <p class="lead">At NestyBitTech, we specialize in harnessing the full potential of WordPress to create websites that not only look great but also perform exceptionally. Our team of skilled WordPress developers and designers collaborate to ensure your website stands out in the digital landscape.</p>

                    <h3>Our WordPress development services include:</h3>
                    <ul>
                        <li class="lead">Custom WordPress Themes</li>
                        <li class="lead">Plugin Development and Integration</li>
                        <li class="lead">Website Performance Optimization</li>
                        <li class="lead">Security and Maintenance</li>
                    </ul>

                    <p class="lead">In conclusion, WordPress development is the key to unlocking a robust online presence. With NestyBitTech, you can harness the power of WordPress to create a website that empowers your online endeavors.</p>

                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------- -->

<!-- VIDEO -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Video Editing & Ads</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto text-center">
                            <h1>Video Editing & Ads</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">

                    <p class="lead mt-5">In today's digital age, video has become the king of content. Whether you're a business looking to capture your audience's attention or an individual sharing your creative vision, video editing and ad creation play a pivotal role in making your content shine. In this article, we'll delve into the world of video editing and ad creation, uncovering their importance and offering insights on how to create captivating videos that leave a lasting impact.</p>

                    <h2 class="text-danger">The Power of Video</h2>
                    
                    <h3>Video as a Medium</h3>
                    <p class="lead">Video is a dynamic and versatile medium that allows you to convey complex messages, tell stories, and connect with your audience on a personal level. It combines visuals, audio, and motion to create a multi-sensory experience.</p>

                    <h3>Video Marketing</h3>
                    <p class="lead">Video marketing has become an essential part of any successful marketing strategy. Engaging videos can boost brand awareness, drive traffic, and increase conversions. They are highly shareable and have the potential to go viral, expanding your reach exponentially.</p>

                    <h2 class="text-danger">The Art of Video Editing</h2>

                    <h3>Crafting a Narrative</h3>
                    <p class="lead">Effective video editing is more than just cutting and stitching footage together. It's about crafting a narrative that engages viewers from start to finish. Key aspects of video editing include:</p>

                    <p class="lead"><span class="fw-bold">Storytelling:</span> Structuring your video to tell a compelling story.</p>
                    <p class="lead"><span class="fw-bold">Visual Flow:</span> Ensuring smooth transitions and continuity.</p>
                    <p class="lead"><span class="fw-bold">Timing:</span> Perfecting the pacing of your video for maximum impact.</p>
                    <p class="lead"><span class="fw-bold">Sound Design:</span> Enhancing the viewer's auditory experience with music, sound effects, and voiceovers.</p>

                    <h3>Enhancing Visual Appeal</h3>
                    <p class="lead">Video editing allows you to enhance the visual appeal of your content. You can color correct, add special effects, overlay text and graphics, and apply creative filters to create a unique visual style.</p>

                    <h3>Optimizing for Different Platforms</h3>
                    <p class="lead">Different platforms have varying requirements for video content. Skilled video editors understand these nuances and can optimize videos for platforms like YouTube, Instagram, TikTok, and more.</p>

                    <h2 class="text-danger">Creating Engaging Ads</h2>

                    <h3>Know Your Audience</h3>
                    <p class="lead">Effective ads are tailored to your target audience. Understanding your audience's preferences, pain points, and behavior helps in creating ads that resonate.</p>

                    <h3>Crafting a Strong Message</h3>
                    <p class="lead">In the world of ads, brevity is key. Craft a clear and concise message that communicates the value of your product or service within seconds.</p>

                    <h3>Visual Appeal</h3>
                    <p class="lead">Ads should be visually appealing and attention-grabbing. Use eye-catching visuals, animations, and graphics to make your ad stand out</p>

                    <h3>Call to Action (CTA)</h3>
                    <p class="lead">Every ad should have a clear CTA that guides the viewer on the desired action, whether it's making a purchase, signing up, or contacting you.</p>

                    <h2 class="text-danger">Our Expertise in Video Editing and Ad Creation</h2>

                    <p class="lead">At NestyBitTech, we specialize in turning your video ideas into captivating visual stories. Our experienced video editors and content creators understand the nuances of video editing and ad creation, ensuring your content not only looks great but also drives results.</p>

                    <h3>Our video services include:</h3>
                    <ul>
                        <li class="lead">Professional Video Editing</li>
                        <li class="lead">Ad Creation and Optimization</li>
                        <li class="lead">Video Marketing Strategy</li>
                        <li class="lead">Visual Effects and Animation</li>
                    </ul>

                    <p class="lead">In conclusion, video editing and ad creation are powerful tools to connect with your audience and achieve your goals, whether it's building brand awareness, increasing sales, or sharing your creative vision. With NestyBitTech, you can bring your ideas to life and make a lasting impression in the digital world.</p>


                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------- -->

<!-- DIGI -->
<div class="modal fade" id="digiModal" tabindex="-1" aria-labelledby="digiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="digiModalLabel">Digital Marketing</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto text-center">
                            <h1>Digital Marketing</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">

                        <p class="lead mt-5">In today's fast-paced, technology-driven world, traditional marketing alone can't propel your brand to new heights. Enter digital marketing, the dynamic field that leverages online channels to connect with your audience, boost brand awareness, and drive business growth. In this article, we explore the world of digital marketing, shedding light on its importance and strategies to succeed.</p>
                        
                        <h2 class="text-danger">Understanding Digital Marketing</h2>

                        <p class="lead">Digital marketing encompasses a wide range of online tactics and channels to promote products, services, or brands. It's a versatile and powerful tool in your marketing arsenal. Here are some key components:</p>

                        <h3>Search Engine Optimization (SEO)</h3>
                        <p class="lead">SEO is the process of optimizing your website to rank higher in search engine results. It involves keyword research, on-page optimization, quality content creation, and building authoritative backlinks. A well-optimized website attracts organic traffic and increases visibility.</p>

                        <h3>Content Marketing</h3>
                        <p class="lead">Quality content is king in the digital realm. Content marketing involves creating and sharing valuable, relevant, and consistent content to engage and educate your audience. This includes blog posts, videos, infographics, and more.</p>

                        <h3>Social Media Marketing</h3>
                        <p class="lead">Social media platforms provide a direct line to your audience. Effective social media marketing involves creating and sharing content, engaging with your followers, and using paid advertising to expand your reach.</p>

                        <h3>Email Marketing</h3>
                        <p class="lead">Email marketing remains a potent tool for nurturing leads and maintaining customer relationships. It's cost-effective and can be highly personalized to deliver relevant content to your subscribers.</p>

                        <h3>Pay-Per-Click (PPC) Advertising</h3>
                        <p class="lead">PPC advertising, such as Google Ads and Facebook Ads, allows you to target specific keywords and demographics. You pay only when a user clicks on your ad, making it a cost-efficient way to drive traffic and conversions.</p>

                        <h2 class="text-danger">Crafting a Digital Marketing Strategy</h2>

                        <p class="lead">To succeed in the digital landscape, a well-defined strategy is crucial. Here's a roadmap to get you started:</p>

                        <h3>Set Clear Goals</h3>
                        <p class="lead">Begin by defining your objectives. Are you looking to increase website traffic, generate leads, boost sales, or enhance brand awareness? Knowing your goals helps shape your strategy.</p>

                        <h3>Know Your Audience</h3>
                        <p class="lead">Understanding your target audience is key to delivering relevant content and messaging. Create buyer personas to guide your efforts.</p>

                        <h3>Choose the Right Channels</h3>
                        <p class="lead">Select the digital channels that align with your goals and audience. Not all platforms may be suitable for your business.</p>

                        <h3>Create High-Quality Content</h3>
                        <p class="lead">Content is the foundation of digital marketing. Produce valuable, informative, and engaging content that resonates with your audience.</p>

                        <h3>Monitor and Analyze</h3>
                        <p class="lead">Regularly track your digital marketing efforts. Tools like Google Analytics provide insights into website traffic and user behavior. Use these insights to refine your strategy.</p>

                        <h2 class="text-danger">Ann: Your Digital Marketing Partner</h2>

                        <p class="lead">At Ann, we specialize in helping businesses navigate the digital landscape. Our team of experienced digital marketers can assist you in:</p>
                        <ul>
                            <li class="lead">Crafting a tailored digital marketing strategy.</li>
                            <li class="lead">Optimizing your website for search engines (SEO).</li>
                            <li class="lead">Creating compelling content that drives engagement.</li>
                            <li class="lead">Managing social media campaigns for maximum impact.</li>
                            <li class="lead">Running targeted PPC advertising campaigns.</li>
                        </ul>

                        <p class="lead">In conclusion, digital marketing is not just a buzzword; it's an essential part of modern marketing. To thrive in today's competitive landscape, you need a robust online presence. Ann is here to guide you on your journey to digital marketing success.</p>

                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------- -->

<!-- UI UX -->
<div class="modal fade" id="uidesignModal" tabindex="-1" aria-labelledby="uidesignModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uidesignModalLabel">UI UX Design</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto text-center">
                            <h1>UI UX Design</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">

                        <p class="lead mt-5">In the digital realm, the success of an application or website hinges on more than just functionality; it's about delivering exceptional user experiences. This is where UI (User Interface) and UX (User Experience) design come into play. In this article, we'll explore the fascinating world of UI/UX design, highlighting its significance and sharing insights on how to create designs that captivate and engage your audience.</p>

                        <h2 class="text-danger">Understanding UI/UX Design</h2>

                        <h3>UI (User Interface) Design</h3>
                        <p class="lead">UI design focuses on the aesthetics and visual elements of a digital product. It's all about creating an intuitive and visually appealing interface that users can interact with seamlessly. Key aspects of UI design include:</p>
                        <ul>
                            <li class="lead"><span class="fw-bold">Visual Elements:</span> Choosing colors, typography, icons, and images that reflect the brand's identity and resonate with users.</li>
                            <li class="lead"><span class="fw-bold">Layout and Composition:</span> Arranging elements on the screen in a logical and aesthetically pleasing manner.</li>
                            <li class="lead"><span class="fw-bold">Interactivity:</span> Designing buttons, navigation menus, and interactive elements that are easy to understand and use.</li>
                        </ul>

                        <h3>UX (User Experience) Design</h3>

                        <p class="lead">UX design takes a broader approach. It's concerned with the overall experience a user has when interacting with a digital product. A well-designed user experience should be:</p>
                        <ul>
                            <li class="lead"><span class="fw-bold">User-Centric:</span> Understanding and empathizing with the needs, goals, and pain points of the users.</li>
                            <li class="lead"><span class="fw-bold">Intuitive:</span> Creating a product that's easy to navigate, reducing friction, and minimizing user frustration.</li>
                            <li class="lead"><span class="fw-bold">Engaging:</span> Encouraging users to stay and interact with the product, fostering a positive connection.</li>
                        </ul>

                        <h2 class="text-danger">The Art of UI/UX Design</h2>

                        <p class="lead">Creating a harmonious marriage between UI and UX design requires careful planning and execution. Here are some key principles to consider:</p>

                        <h3>Know Your Audience</h3>
                        <p class="lead">Understanding your target audience is paramount. Conduct user research, create user personas, and gather feedback to tailor your design to user needs.</p>

                        <h3>Simplicity Is Key</h3>
                        <p class="lead">Keep your design clean and uncluttered. Avoid unnecessary complexity that can overwhelm users. Simplicity often leads to better usability.</p>

                        <h3>Consistency Matters</h3>
                        <p class="lead">Maintain consistency in design elements such as colors, fonts, and icons throughout the interface. Consistency enhances usability and strengthens brand identity.</p>

                        <h3>Prioritize Mobile Responsiveness</h3>
                        <p class="lead">In the mobile-first era, ensure your designs are responsive to various screen sizes and devices. Mobile users should have an equally pleasant experience.</p>

                        <h3>User Testing</h3>
                        <p class="lead">Regularly test your designs with real users to gather feedback and make improvements. This iterative process helps refine the user experience.</p>

                        <h2 class="text-danger">Our Commitment to UI/UX Excellence</h2>

                        <p class="lead">At NestyBitTech, we take pride in our dedication to crafting exceptional UI/UX designs. Our team of skilled designers and user experience experts work collaboratively to ensure that your digital products not only look stunning but also provide intuitive and delightful user experiences.</p>

                        <h3>Our UI/UX services include:</h3>
                        <ul>
                            <li class="lead">User Research and Persona Development</li>
                            <li class="lead">Wireframing and Prototyping</li>
                            <li class="lead">Visual Design and Branding</li>
                            <li class="lead">Usability Testing and Optimization</li>
                        </ul>

                        <p class="lead">In conclusion, UI/UX design is the cornerstone of creating digital products that resonate with users. By focusing on aesthetics, usability, and user-centered design principles, you can captivate your audience and elevate your brand.</p>

                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------- -->

<!-- DESCRIPTION MODALS -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

<script>

$(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay: true,         
            autoplayTimeout: 2000,  
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
    // Add event listeners to Read More links
    var readMoreLinks = document.querySelectorAll('.read-more');
    readMoreLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            var feedbackId = this.getAttribute('data-target');
            var fullText = this.getAttribute('data-fulltext');
            var feedbackContainer = document.getElementById(feedbackId);
            feedbackContainer.style.maxHeight = null; // Remove max-height to show full text
            feedbackContainer.innerHTML = fullText;
            });
        });
    });

  // STATISTCS

  $('.counting').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 3000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  

});




</script>

</html>
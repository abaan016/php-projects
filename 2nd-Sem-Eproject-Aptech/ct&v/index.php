<!DOCTYPE html> 
<html lang="en">

<style>
/** coronata section **/

.coronata {
    background: #fff;
   padding-top: 100px;
  
}

.coronata .titlepage {
     padding-bottom: 0;
}

.coronata .titlepage p {
    font-weight: normal;
    font-size: 17px;
    line-height: 30px;
    color: #111111;
    padding: 35px 0px 50px 0px;
}


.coronata_img figure {
     margin: 0;
}

/** end coronata section **/

/** banner section **/

.hero{
  background-image: url(assets/img/homebg.jpg);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  position: relative;
  height: 400px;
}

/** end banner section **/

/*doctor*/

.doctors {
    background: #fff;
   
   padding-top: 50px;
   position: relative;


}


.reader {
    margin-top: 45px;
    background: #fff;
    padding: 0px 30px 60px 30px;
    box-shadow: 3px 0 62px rgba(13, 3, 3, 0.20);
    border-radius: 10px;
     transition: ease-in all 0.5s;
     margin-bottom: 30px;
}




.reader i {
    margin: 0;
}

.reader i img {
	width: 130px;
   border-radius: 50%;  
       box-shadow: 3px 0 62px rgba(13, 3, 3, 0.18);  margin-top: -50px;  
}



.reader h3 {
    color: #151515;
    font-size: 20px;
    line-height: 20px;
    font-weight: bold;
    padding-top: 42px;
    text-transform: uppercase;
}

.reader p {
    padding: 20px 0 40px 0;
    color: #0f100d;
    line-height: 28px;
    font-weight: normal;
}

#ho_efcet:hover .reader {background: #fafaf9;  transition: ease-in all 0.5s;}





.doctors::before {
    position: absolute;
    content: "";
    right: 4%;
    background: url(../images/case.png);
    top: 34%;
    width: 120px;
    height: 121px;
}


</style>
	
<!-- doccure/  30 Nov 2019 04:11:34 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>CT & V</title>
		
		<!-- LINKS -->
		<?php require_once("links.php") ?>
		<!-- LINKS -->
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<?php require_once("header.php") ?>
			<!-- /Header -->
			
			<!-- Home Banner -->
			<div class="hero d-flex align-items-center" id="home">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<h1 class="display-4 text-white">Care early <span class="badge bg-primary text-dark">coronavirus</span></h1>
                    		<a href="hospitals.php" class="btn btn-outline-light mt-3">Explore Hospitals</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /Home Banner -->
			  
			<!-- Clinic and Specialities -->
			<div class="coronata">
				<div class="container my-1">
					<div class="row d_flex grid">
					<div class="col-md-5 oder1 ">
						<div class="titlepage text_align_left">
							<h2> What is coronavirus?</h2>
							<p>The virus can spread from an infected person’s mouth or nose in small liquid particles when they cough, sneeze, speak, sing or breathe. These particles range from larger respiratory droplets to smaller aerosols.

							</p>
						
						</div>
					</div>
					<div class="col-md-7 mt-3">
						<div class="coronata_img text_align_center">
							<figure><img src="assets/img/corona.png" class="img-fluid" alt="#"/></figure>
						</div>
					</div>
					</div>
				</div>
			</div> 
			<!-- Clinic and Specialities -->
		  
			<!-- Popular Section -->
			<section class="section section-doctor">
				<div class="container-fluid">
				   <div class="row">
						<div class="col-lg-4">
							<div class="section-header ">
								<h2>Save Your Life</h2>
								<h3 class="mt-3">HOW TO PROTECT YOURSELF</h3>
							</div>
							<div class="about-content text-center">
								<p class="lead">COVID-19, also known as the coronavirus has spread rapidly across the world, leading to a global pandemic and causing significant illness and death. During Christmas 2022 and New Year 2023 parties, it is important to take steps to reduce the risk of covid infection and transmission.</p>
								<img src="assets/img/protectpng.png" class="img-fluid me-5" style="width: 180px;" alt="">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="doctor-slider slider">
							
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="#">
											<img class="img-fluid" alt="User Image" src="assets/img/wearmask.jpg">
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<h4>Wear Mask</h4>
										</h3>
										<p class="text-muted"> Wash your hands before and after touching the mask.Wash reusable masks after each use.</p>
									</div><br>
								</div>
								<!-- /Doctor Widget -->

								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="#">
											<img class="img-fluid" alt="User Image" src="assets/img/washhands.jpg">
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<h4>Wash Your Hands</h4>
										</h3>
										<p class="text-muted">Wash hands with soap and water for at least 20 seconds. Use the cleanest water possible, for example from an improved source</p>
									</div>
								</div>
								<!-- /Doctor Widget -->

								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="#">
											<img class="img-fluid" alt="User Image" src="assets/img/stayhome.png">
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<h4>Stay at Home</h4>
										</h3>
										<p class="text-muted">Stay home and separate from others · Improve ventilation (air flow) at home to help prevent COVID-19 from spreading to other people· </p>
									</div>
								</div>
								<!-- /Doctor Widget -->
								
							</div>
						</div>
				   </div>
				</div>
			</section>
			<!-- /Popular Section -->
		   
		   <!-- doctors -->
		   <div class="doctors mt-5">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text-center ">
                     <h2>What doctors say..</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex mt-5">
               <div class=" col-md-6">
                     <div id="ho_efcet" class="reader text-center">
                        <i><img src="assets/img/doctor1.jpg" class="img-fluid" alt="#"/></i>
                        <h3>Dr.Rayyan</h3>
                        <p>This study aimed to describe the dealings of 20 biomedical doctors with coronavirus disease-19 (COVID-19) in the Sindh province of Pakistan. Focusing on physicians from three different hospitals, we describe their challenges, emotions, and views concerning the pandemic.</p>
                       
                     </div>
                  </div>
                          <div class=" col-md-6">
                     <div id="ho_efcet" class="reader text-center">
                        <i><img src="assets/img/doctor2.jpg" class="img-fluid" alt="#"/></i>
                        <h3>Dr.Maria</h3>
                        <p> Furthermore, these care providers faced a great fear of infection and an even greater fear of transmitting the virus to their families and friends. A few also feared stigmatization as viral carriers. Whether they experienced fear or not, all of our physician interlocutors emphasized their sense of responsibility.</p>
                       
                     </div>
                  </div>
               </div>
         </div>
      </div>


	  		<!-- REVIEWS -->
			<?php require_once("review.php") ?>
	  		<!-- REVIEWS -->
			
			<!-- Footer -->
			<?php require_once("footer.php") ?>
			<!-- /Footer -->
		   
	   </div>
	   <!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/  30 Nov 2019 04:11:53 GMT -->
</html>
<?php 
session_start();
require_once("config.php");
?>


<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/appointments.html  30 Nov 2019 04:12:09 GMT -->
<head>
		<meta charset="utf-8">
		<title>CT & V</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
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
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Book an Appointments</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						
						<!-- Profile Sidebar -->
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="assets/img/user.png" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><?php echo $_SESSION['n']; ?></h3>
											<div class="patient-details">
												<h5 class="mb-0"><?php echo $_SESSION['e']; ?></h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="">
												<a href="patient-dashboard.php">
													<i class="fas fa-columns"></i>
													<span>My Profile</span>
												</a>
											</li>
											<li>
												<a href="pmyapp.php">
													<i class="fas fa-sign-out-alt"></i>
													<span>My Apointments</span>
												</a>
											</li>
											<li>
												<a href="pbookapp.php">
													<i class="fas fa-sign-out-alt"></i>
													<span>Book an Appointment</span>
												</a>
											</li>
											<li>
												<a href="plogin.php">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>
						<!-- / Profile Sidebar -->
			<div class="col-lg-8 col-md-8 col-sm-10 ml-5">
               <h2 class="text-uppercase">Book an Appointment</h2>
               <br>
               <br>

			   <?php { ?>

               <form class=" my-5" method="post">
              
               <div class="mb-3 mt-3">
               <label for="id">Patient ID</label>
            
               <input type="number" name="user_id"  class="form-control" value="<?php echo $_SESSION['id'];?>">
            </div>

               <div class="mb-3 mt-3">
               <label for="email">Name:</label>
            
               <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
                        
                        <div class="mb-3 mt-3">
               <label for="email">Email:</label>
               <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
               <label for="pwd">Phone Number:</label>
               <input type="number" class="form-control" id="pwd" placeholder="Enter phone number" name="p_num">
            </div>

            <!-- HOSPITAL DROPDOWN COMING FROM DATABASE PHP -->

            <?php
            $sql = "SELECT `Hid`,`HospitalName` FROM `reghospital`";
            $result = mysqli_query($con, $sql);
            if($result->num_rows>0){
               $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
            }
               ?>
                  <div class="mb-3">
                  <label for="pwd">Hospital Names</label>
                  <br>
                  <select class="form-select" aria-label="Default select example" name="hospital">
                  <option value="selected">Select Hospital</option>
                  <?php 
                  foreach ($row as $rows) {
                  ?>
                     <option><?php echo $rows['Hid'] .$rows['HospitalName']; ?> </option>
                     <?php 
                     }
                     ?>
                  </select>
                  </div>

                   <!-- VACCINE DROPDOWN COMING FROM DATABASE PHP -->

            <?php
            $sql = "SELECT `VaccineID`,`VaccineName` FROM `vaccines`";
            $result = mysqli_query($con, $sql);
            if($result->num_rows>0){
               $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
            }
               ?>
                  <div class="mb-3">
                  <label for="pwd">Vaccine Name</label>
                  <br>
                  <select class="form-select" aria-label="Default select example" name="vaccine">
                  <option value="selected">Select Vaccine</option>
                  <?php 
                  foreach ($row as $rows) {
                  ?>
                     <option><?php echo $rows['VaccineID'] .$rows['VaccineName']; ?> </option>
                     <?php 
                     }
                     ?>
                  </select>
                  </div>


                  <div class="mb-3 mt-3">
               <label for="date">Select date</label>
               <input type="date" class="form-control" name="date">
            </div>

            <div class="mb-3 mt-3">
               <label for="Select Time">Select Time</label>
               <input type="time" class="form-control" id="email"  name="time">
                  </div>
				  
				  <button type="submit" class="btn btn-primary w-100" name="book">Book Now</button>
                </div>
              </div>
       </form>

	   <!-- FORM INSERT DATA PHP -->

	   <?php 
	 	if(isset($_POST['book']))
		 {
			 $name=$_POST['name'];
			 $email=$_POST['email'];
			 $number=$_POST['p_num'];
			 $hospital=$_POST['hospital'];
			 $vaccine=$_POST['vaccine'];
			 $date=$_POST['date'];
			 $time=$_POST['time'];
			 $SQL="INSERT INTO `bookings`(`Name`, `Email`, `Phone`, `HospitalName`, `VaccineName`, `AppointmentDate`, `S_Time`) 
			 VALUES ('$name','$email','$number','$hospital','$vaccine','$date','$time');";
			 $EXE=mysqli_query($con,$SQL);
			 if($EXE)
			 {
				 echo "<script>alert(
					'Thank You!',
					'You Appointment is pending!',
					'success'
				  );
				 window.location='patient-dashboard.php'
				 </script>";
			 }
			 else
			 {
				 echo "<script>alert(
					'Oops!',
					'Something Went Wrong!'
				  );</script>";
			 }

		 }
					 
	 
	   ?>

	   <!-- FORM INSERT DATA PHP -->

	   <?php } ?>
     </div>
   </div>
			<!-- /Page Content -->
   
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
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

		
	</body>

<!-- doccure/appointments.html  30 Nov 2019 04:12:09 GMT -->
</html>


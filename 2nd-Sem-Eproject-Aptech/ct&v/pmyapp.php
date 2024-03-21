<?php 
session_start();
require_once("config.php");
?>



<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/appointments.html  30 Nov 2019 04:12:09 GMT -->
<head>
		<meta charset="utf-8">
		<title>Doccure</title>
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
							<h2 class="breadcrumb-title">My Appointments</h2>
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
													<i class="fas fa-calendar-check"></i>
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
						
						
						<div class="col-md-6 col-lg-8 col-xl-9">
							<div class="appointments">
							
								<!-- Appointment List -->
                                <h2 class="text-uppercase text-primary">My Appointments</h2>
                                <br>
                                <h5>Patient: <span class="text-primary"><?php echo $_SESSION['n'];?></span></h5>
                                <br>
                                <br>
                                <table class="table table=bordered">
                                <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Hospital</th>
                                    <th>Vaccine</th>
                                    <th>Selected Date</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                <?php
							//    $sql = "SELECT `BookingID`, `Name`,`Phone`, `HospitalName`, `VaccineName`, `AppointmentDate`, `BookingStatus` FROM `bookings` WHERE PatientID = '" . mysqli_real_escape_string($con, $name) . "' AND BookingStatus = 1";
							   $sql = "SELECT * FROM `bookings` WHERE `Email`='$_SESSION[e]'";


							   $result = mysqli_query($con, $sql);
							   
							   while ($row = mysqli_fetch_assoc($result)) {
								   ?>
								   <tr>
									   <td><?php echo $row['BookingID']; ?></td>
									   <td><?php echo $row['Name']; ?></td>
									   <td><?php echo $row['Phone']; ?></td>
									   <td><?php echo $row['HospitalName']; ?></td>
									   <td><?php echo $row['VaccineName']; ?></td>
									   <td><?php echo $row['AppointmentDate']; ?></td>
									   <td><?php
									 	if($row['BookingStatus']==1)
										{
											echo "<script>alert('Your appointment are aproved by admin')</script><span class='badge bg-success'>Accepted</span>";
										} 
										else if($row['BookingStatus']==2){echo "<script>alert('Your appointment are Rejected by admin')</script><span class='badge bg-danger'>Rejected</span>";}
										else{echo "<span class='badge bg-warning'>Pending</span>";}
									   ?></td>
								   </tr>
								   <?php
							   		}
									?>
							   		
							   
                                    </tbody>
                                </table>

                                </div>
								<!-- /Appointment List -->
							
								
								
							</div>
						</div>

                    </div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<?php require_once("footer.php") ?>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
		
		<!-- Appointment Details Modal -->
		<div class="modal fade custom-modal" id="appt_details">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Appointment Details</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<ul class="info-details">
							<li>
								<div class="details-header">
									<div class="row">
										<div class="col-md-6">
											<span class="title">#APT0001</span>
											<span class="text">21 Oct 2019 10:00 AM</span>
										</div>
										<div class="col-md-6">
											<div class="text-right">
												<button type="button" class="btn bg-success-light btn-sm" id="topup_status">Completed</button>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<span class="title">Status:</span>
								<span class="text">Completed</span>
							</li>
							<li>
								<span class="title">Confirm Date:</span>
								<span class="text">29 Jun 2019</span>
							</li>
							<li>
								<span class="title">Paid Amount</span>
								<span class="text">$450</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Appointment Details Modal -->
	  
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
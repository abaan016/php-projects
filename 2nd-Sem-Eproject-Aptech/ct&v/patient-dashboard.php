<?php require_once("config.php");
session_start();
if(isset( $_SESSION['e']) && isset( $_SESSION['p'])){
?>

<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/patient-dashboard.html  30 Nov 2019 04:12:16 GMT -->
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
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
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
											<li class="active">
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
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body pt-0">
								
																		
									<!-- Tab Content -->
									<div class="tab-content pt-0">
										
										<!-- Profile Tab -->
										<div class="col-lg-4 col-md-6 col-sm-12 my-4">
											<h4 class="text-primary">Personal Information</h4>
											<br>
											<h6 class="font-weight-bold">Patient ID</h6>
											<p><?php echo $_SESSION['id']; ?></p>
											<?php 
											$id = $_SESSION['id'];
											
											$sql = "SELECT * FROM `patients` WHERE PatientID = " . intval($id);
											$result = mysqli_query($con, $sql);

											if ($row = mysqli_fetch_assoc($result)) {
											?>
												<h6 class="font-weight-bold">Patient Name</h6>
												<p><?php echo $row['FullName'] ?></p>

												<h6 class="font-weight-bold">Patient Email</h6>
												<p><?php echo $row['Email'] ?></p>

												<h6 class="font-weight-bold">Patient Date of Birth</h6>
												<p><?php echo $row['Dof'] ?></p>

												<h6 class="font-weight-bold">Patient Gender</h6>
												<p><?php echo $row['Gender'] ?></p>

												<h6 class="font-weight-bold">Patient Number</h6>
												<p><?php echo $row['Number'] ?></p>

												<h6 class="font-weight-bold">Patient Address</h6>
												<p><?php echo $row['Address'] ?></p>

											<?php
											}
											?>
										</div>
										<!-- /Appointment Tab -->
										
									</div>
									<!-- Tab Content -->
									
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

<!-- doccure/patient-dashboard.html  30 Nov 2019 04:12:16 GMT -->
</html>

<?php 
}
else{
    header("refresh:0.2,url='plogin.php'");
}
?>
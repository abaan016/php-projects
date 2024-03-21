<?php 
include("db.php");
session_start();
if(isset( $_SESSION['e']) && isset( $_SESSION['p'])){
?>

<?php require_once("otherdb.php") ?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>CT&V - Admin Dashboard</title>
		
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
			
			<!-- Sidebar -->
            <?php require_once("sidebar.php") ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome <span class="text-primary"><?php echo $_SESSION['n']; ?></span> Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
										<i class="fa fa-hospital"></i>
										</span>
										<div class="dash-count">
										<?php
											include("otherdb.php");
											// Fetch the total number of patients
											$sql = "SELECT COUNT(*) AS totalhospital FROM reghospital;";
											$result = $conn->query($sql);

											if ($result->num_rows > 0) {
												$row = $result->fetch_assoc();
												$totalhospital = $row['totalhospital'];

												echo "<h3>$totalhospital</h3>";
											} else {
												echo "<p>0</p>";
											}

											?>
										</div>
									</div>
									<div class="dash-widget-info">
										<h6 class="text-muted">Hospitals</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
									<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-users"></i>
										</span>
										<div class="dash-count">
												<?php

												// Fetch the total number of patients
												$sql = "SELECT COUNT(*) AS totalPatients FROM Patients";
												$result = $conn->query($sql);

												if ($result->num_rows > 0) {
													$row = $result->fetch_assoc();
													$totalPatients = $row['totalPatients'];

													echo "<h3>$totalPatients</h3>";
												} else {
													echo "<p>No patients found</p>";
												}

												?>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">Patients</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-danger border-danger">
											<i class="fe fe-money"></i>
										</span>
										<div class="dash-count">
										<?php

											// Fetch the total number of patients
											$sql = "SELECT COUNT(*) AS totalapp FROM bookings";
											$result = $conn->query($sql);

											if ($result->num_rows > 0) {
												$row = $result->fetch_assoc();
												$totalapp = $row['totalapp'];

												echo "<h3>$totalapp</h3>";
											} else {
												echo "<p>No Appointments</p>";
											}

										?>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">Appointment</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 d-flex">
						
							<!-- Hospital List -->
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Hospitals List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Hospital Name</th>
													<th>Email</th>
													<th>Address</th>
													<th>Phone</th>
													<th>City</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<?php
											// Fetch data from the Patients table and display it in rows
											
											$sql = "SELECT * FROM reghospital";
											$result = $conn->query($sql);

											if ($result->num_rows > 0) {
												while($row = $result->fetch_assoc()) {
													?>
													 <tr>
															<td><?php echo $row['HospitalName'] ?></td>
															<td><?php echo $row['Email']?></td>
															<td><?php echo $row['Address']?></td>
															<td><?php echo $row['ContactNum']?></td>
															<td><?php echo $row['City']?></td>
															<td><?php if($row['h_status']==1){ echo '<p><a href="hinactive.php?id='.$row['Hid'].'" class="btn btn-sm bg-success">Active</a></p>'; } 
															else{ echo '<p><a href="hacccept.php?id='.$row['Hid'].'" class="btn btn-sm bg-danger">InActive</a></p>';} ?></td>
														</tr>
											<?php } ?>	
											<?php }?>
													
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Hospital List -->
							
						</div>
						<div class="col-md-6 d-flex">
						
							<!-- Patient list -->
							<div class="card  card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Patients List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>PatientID</th>
												<th>FirstName</th>
												<th>LastName</th>
												<th>DateOfBirth</th>
												<th>ContactNumber</th>
												<th>Address</th>
											</tr>
										</thead>
										<tbody>
											<?php
											// Fetch data from the Patients table and display it in rows
											
											require_once("otherdb.php");

											$sql = "SELECT * FROM patients";
											$result = $conn->query($sql);

											if ($result->num_rows > 0) {
												while($row = $result->fetch_assoc()) {
													echo "<tr>
															<td>{$row['PatientID']}</td>
															<td>{$row['FullName']}</td>
															<td>{$row['Dof']}</td>
															<td>{$row['Gender']}</td>
															<td>{$row['Number']}</td>
															<td>{$row['Address']}</td>
														</tr>";
												}
											} else {
												echo "<tr><td colspan='6'>No patients found</td></tr>";
											}

											?>
										</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Patient list -->
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						
							<!-- Appointt List -->
							<div class="card card-table">
								<div class="card-header">
									<h4 class="card-title">Appointment List</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Patient Name</th>
													<th>Email</th>
													<th>Phone</th>
													<th>Hospital Name</th>
													<th>Vaccine Name</th>
													<th>Appointment Date</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											<?php
												
												$sql = "SELECT * FROM `bookings`";
												$result = mysqli_query($conn, $sql);							   
												
												while ($row = mysqli_fetch_assoc($result)){
													?>
													<tr>
														
														<td><?php echo $row['Name']; ?></td>
														<td><?php echo $row['Email']; ?></td>
														<td><?php echo $row['Phone']; ?></td>
														<td><?php echo $row['HospitalName']; ?></td>
														<td><?php echo $row['VaccineName']; ?></td>
														<td><?php echo $row['AppointmentDate']; ?></td>
														<td><?php if($row['BookingStatus']==1){ echo"<span class='badge bg-warning'>Approved</span>";}else{echo"<span class='badge bg-danger'>Pending</span>";} ?></td>
														<td>
															<?php { ?>
																<a href="aprove.php?id=<?php echo $row['BookingID']; ?>" class="btn btn-sm bg-success ">✔</a>
																<a href="reject.php?id=<?php echo $row['BookingID']; ?>" class="btn btn-sm ">❌</a>
																<a href="delbook.php?id=<?php echo $row['BookingID']; ?>" class="btn btn-sm "><i class="fa-solid fa-trash fa-sm"></i></a>
															<?php } ?>
														</td>
												<?php
												}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Appointt List -->
							
						</div>
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<script src="assets/plugins/raphael/raphael.min.js"></script>    
		<script src="assets/plugins/morris/morris.min.js"></script>  
		<script src="assets/js/chart.morris.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:34 GMT -->
</html>

<?php 
}
else{
    header("refresh:0.2,url='login.php'");
}
?>
<?php 
include("db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Ct & V</title>
		
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
								<h3 class="page-title">Appointments</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Appointments</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
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

											include("otherdb.php");
											
											$sql = "SELECT * FROM bookings";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
												?>
												<tr>
														<td><?php echo $row['Name'] ?></td>
														<td><?php echo $row['Email'] ?></td>
														<td><?php echo $row['Phone'] ?></td>
														<td><?php echo $row['HospitalName'] ?></td>
														<td><?php echo $row['VaccineName'] ?></td>
														<td><?php echo $row['AppointmentDate']?></td>
														<td><?php if($row['BookingStatus']==1){ echo"<span class='badge bg-warning'>Approved</span>";}else{echo"<span class='badge bg-danger'>Pending</span>";} ?></td>
														<td>
															<?php { ?>
																<a href="aprove.php?id=<?php echo $row['BookingID']; ?>" class="btn btn-sm bg-success ">✔</a>
																<a href="reject.php?id=<?php echo $row['BookingID']; ?>" class="btn btn-sm ">❌</a>
																<a href="delbook.php?id=<?php echo $row['BookingID']; ?>" class="btn btn-sm "><i class="fa-solid fa-trash fa-sm"></i></a>
															<?php } ?>
														</td>
													</tr>
											<?php }?>
									<?php	} 

											?>
										</tbody>
									</table>
								</div>
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
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:49 GMT -->
</html>
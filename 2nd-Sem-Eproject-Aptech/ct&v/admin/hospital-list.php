<?php 
include("db.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/doctor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>CT & V | Hospitals List</title>
		
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
								<h3 class="page-title">List of Hospitals</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Admin</a></li>
									<li class="breadcrumb-item active">Hospitals List</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
					<div class="col-md-12 d-flex">
						
						<!-- Hospital List -->
						<div class="card card-table flex-fill">
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
										
										include("otherdb.php");

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

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/doctor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>
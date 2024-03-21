<?php 
require_once("config.php");
session_start();
?>

<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->
<head>
		<meta charset="utf-8">
		<title>CT & V</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- LINKS -->
		<?php require_once("links.php") ?>
		<!-- LINKS -->
	
	</head>
	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<?php require_once("header.php") ?>
			<!-- /Header -->


            <!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login as <span class="text-primary">Patient</span></h3>
										</div>


										<?php {?>

										<form method="post">
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" name="email">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="password">
												<label class="focus-label">Password</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" name="Loginpat" type="submit">Login</button>
											
											<div class="text-center dont-have">Don’t have an account? <a href="pregister.php">Register</a></div>
										</form>

										<!-- login php start  -->
                                            
										<?php
											if(isset($_POST['Loginpat'])) {
												if(isset($_POST['email']) && isset($_POST['password'])) {
													$email = $_POST['email'];
													$password = $_POST['password'];

													$SQL = "SELECT * FROM `patients` WHERE `Email`='$email' AND `password`='$password'";
													$EXE = mysqli_query($con, $SQL);
													$row = mysqli_fetch_assoc($EXE);

													if($row) {
														if($row['P_status'] == 0) {
															$_SESSION['id'] = $row['PatientID'];
															$_SESSION['n'] = $row['FullName'];
															$_SESSION['e'] = $row['Email'];      
															$_SESSION['p'] = $row['password'];
															echo "<script>alert('You are Logged in'); window.location='patient-dashboard.php';</script>";
														} else {
															echo "<script>alert('You are not activated');</script>";
														}
													} else {
														echo "<script>alert('Invalid email or password');</script>";
													}
												}
											}
										?>


											
										<!-- login php end  -->





										<?php }?>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
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
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>


</html>
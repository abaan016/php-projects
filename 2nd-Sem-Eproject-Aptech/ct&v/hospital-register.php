<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/doctor-register.html  30 Nov 2019 04:12:15 GMT -->
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
						
							<!-- Account Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Login Banner">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<h5 class="mb-3">Register as Hospital</h5>
										<!-- Register Form -->
										<form method="post">
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="name" required>
												<label class="focus-label">Hospital Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" name="email" required>
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="pass	" required>
												<label class="focus-label">Create Password</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="address" required>
												<label class="focus-label">Address</label>
											</div>
											<div class="form-group form-focus">
												<input type="number" class="form-control floating" name="number" required>
												<label class="focus-label">Phone</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="city" required>
												<label class="focus-label">City</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="login.html">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" name="hdata" type="submit">Signup</button>
											<div class="login-or">
												<span class="or-line"></span>
										</form>
										<!-- /Register Form -->

										<!-- PHP START -->

										<?php

											include("config.php");

											if(isset($_POST['hdata']))
													{
														$name=$_POST['name'];
														$email=$_POST['email'];
														$password=$_POST['pass'];
														$address=$_POST['address'];
														$number=$_POST['number'];
														$city=$_POST['city'];

														$SQL="INSERT INTO `reghospital`(`HospitalName`, `Email`, `Password`, `Address`, `ContactNum`, `City`) 
														VALUES ('$name','$email','$password','$address','$number','$city')";

														$EXE=mysqli_query($con,$SQL);
														if($EXE)
														{
															echo "<script>alert('Youre registeration are successfully completed');
															window.location='hospitallogin.php'
															</script>";
														}
														else
														{
															echo "<script>alert('Something went wrong');</script>";
														}

													}
																
													?>
							   

										<!-- PHP START -->
										
									</div>
								</div>
							</div>
							<!-- /Account Content -->
								
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

<!-- doccure/doctor-register.html  30 Nov 2019 04:12:16 GMT -->
</html>
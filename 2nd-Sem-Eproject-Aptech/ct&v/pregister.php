<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/register.html  30 Nov 2019 04:12:20 GMT -->
<head>
		<meta charset="utf-8">
		<title>Doccure</title>
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
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										
										<!-- Register Form -->
										<form method="post">
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="name">
												<label class="focus-label">Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" name="email">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="pass">
												<label class="focus-label">Create Password</label>
											</div>
											<div class="form-group form-focus">
												<input type="date" class="form-control floating" name="dof">
											</div>
											<div class="form-group form-focus">
												<select name="gender" class="form-control floating" id="">
													<option>Select Gender</option>
													<option>Male</option>
													<option>Female</option>
												</select>
											</div>
											<div class="form-group form-focus">
												<input type="number" class="form-control floating" name="number">
												<label class="focus-label">Phone</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="address">
												<label class="focus-label">Address</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="plogin.php">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" name="patdata" type="submit">Register</button>
											<div class="login-or">
												<span class="or-line"></span>
										</form>
										<!-- /Register Form -->


										<!-- PHP START -->
									
								<?php
								include ("config.php"); 
									if(isset($_POST['patdata']))
									{
										$name=$_POST['name'];
										$email=$_POST['email'];
										$password=$_POST['pass'];
										$birth=$_POST['dof'];
										$gender=$_POST['gender'];
										$number=$_POST['number'];
										$address=$_POST['address'];

										$SQL="INSERT INTO `patients`(`FullName`, `Email`, `password`, `Dof`, `Gender`, `Number`, `Address`) 
										VALUES ('$name','$email','$password','$birth','$gender','$number','$address')";

										$EXE=mysqli_query($con,$SQL);
										if($EXE)
										{
											echo "<script>alert('Youre registeration are successfully completed');</script>";
											header("refresh:0.2,url='plogin.php'");
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
							<!-- /Register Content -->
								
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

<!-- doccure/register.html  30 Nov 2019 04:12:20 GMT -->
</html>
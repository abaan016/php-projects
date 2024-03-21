
<?php require_once("db.php") ?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>CT&V - Register</title>
		
		<!-- LINKS -->
		<?php require_once("links.php") ?>
		<!-- LINKS -->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="assets/img/iconct.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>

								<?php {?>
								
								<!-- Form -->
								<form method="post">
									<div class="form-group">
										<input class="form-control" type="text" required placeholder="Username" name="username">
									</div>
									<div class="form-group">
										<input class="form-control" type="email" required placeholder="Email" name="email">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" required placeholder="Password" name="password">
									</div>
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" name="RegisterData" type="submit">Register</button>
									</div>
								</form>
								<!-- /Form -->

								<!-- PHP START -->

								<?php 
									if(isset($_POST['RegisterData']))
									{
										$username=$_POST['username'];
										$email=$_POST['email'];
										$password=$_POST['password'];
										$SQL="INSERT INTO `users`( `username`, `email`, `password`) VALUES ('$username','$email','$password')";
										$EXE=mysqli_query($con,$SQL);
										if($EXE)
										{
											echo "<script>alert('You are register');</script>";
											header("refresh:0.2,url='login.php'");
										}
										else
										{
											echo "<script>alert('You are not register');</script>";
										}

									}
								?>

								<!-- PHP START -->


								<?php }?>
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								
								<div class="text-center dont-have">Already have an account? <a href="login.php">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
</html>
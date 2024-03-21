<?php 
include("db.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>CT&V - Login</title>
		
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
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>

								<?php {?>
								
								<!-- Form -->
								<form method="post">
									<div class="form-group">
										<input class="form-control" type="email" required placeholder="Email" name="email">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" required placeholder="Password" name="password">
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" name="LoginData" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->

									<!-- login php start  -->

									<?php 

										if(isset($_POST['LoginData']))
										{
										
											
											$email=$_POST['email'];
											$password=$_POST['password'];
											$SQL="SELECT * FROM `users` WHERE `email`='$email' and `password`='$password'";
											$EXE=mysqli_query($con,$SQL);
											$row=mysqli_fetch_assoc($EXE);

											if($row)
											{
												if($row['status']==1)
												{
												$_SESSION['n']=$row['username'];      
												$_SESSION['e']=$row['email'];      
												$_SESSION['p']=$row['password'];    
												echo "<script>alert('You are Logged in');</script>";
												header("refresh:0.2,url='dashboard.php'");
												}
												else
												{
													echo "<script>alert('You are not Activated');</script>";
												}
											}
											else
											{
												echo "<script>alert('You are not Logged in');</script>";
											}

										}
									?>
									<!-- login php end  -->


								<?php }?>
								
								<div class="text-center forgotpass"><a href="updatepass.php">Forgot Password?</a></div>
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								
								<div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
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

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
</html>
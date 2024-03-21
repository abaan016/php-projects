<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->
<head>
		<meta charset="utf-8">
		<title>Doccure</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- LINKS -->
		<?php require_once("links.php") ?>
		<!-- LINKS -->

<style>

body{
    background: #1FA2FF;  
    background: -webkit-linear-gradient(to right, #A6FFCB, #12D8FA, #1FA2FF);  
    background: linear-gradient(to right, #A6FFCB, #12D8FA, #1FA2FF); 
}

.card{
    background: rgba(255, 255, 255, 0.2);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.login-links a{
    box-shadow: 1px 4px 6px 0.5px rgba(0, 0, 0, 0.5);
}


</style>        
        
</head>
<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<?php require_once("header.php") ?>
			<!-- /Header -->

            <!-- Page Content -->
            <div class="container my-5">
                <div class="row my-5">
                    <div class="col-lg-6 col-md-8  mx-auto mt-5">
                        <div class="card">
                            <h3 class="text-center mt-3 display-4">Sign up as...</h3>
                            <div class="login-links p-5">
                                <a href="plogin.php" class="btn bg-primary text-dark text-center text-uppercase fw-bold my-3 w-100">Patient</a><br>
                                <a href="hospitallogin.php" class="btn bg-primary text-dark text-center text-uppercase fw-bold mb-3 w-100">Hospital</a><br>
                                <a href="admin/login.php" class="btn bg-primary text-dark text-center text-uppercase fw-bold w-100">Admin</a>
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
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>


</html>
<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/  30 Nov 2019 04:11:34 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>CT&V</title>
		
		<!-- LINKS -->
		<?php require_once("links.php") ?>
		<!-- LINKS -->

<style>

.card{
    border: none;
    border-radius: 2rem;
    box-shadow: 1px 1px 6px 0.5px rgba(0, 0, 0, 0.3);
}

</style>
        
</head>
<body class="bg-light">

		<!-- Main Wrapper -->
		<div class="main-wrapper">

        <!-- HEADER -->
        <?php require_once("header.php") ?>
        <!-- /HEADER -->


        <!-- PAGE CONTENT -->
        <div class="container">
            <h1 class="display-4 mt-5">Agha Khan University Hospital</h1>
            <div class="row my-5 card p-3">
            <h1 class="fw-bold my-3">About</h1>
                <div class="col-lg-4 mx-auto">
                    <img src="assets/img/hospitals/aghakhanhospital.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 mt-5">
                    <?php   require_once("config.php");
                    $sql = "SELECT `HospitalName`, `Email`,`Address`, `ContactNum`, `City` FROM `reghospital` WHERE Hid=1";
                    $result = mysqli_query($con, $sql);

                    if ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <h4 class="font-weight-bold">Hospital Name</h4>
                        <p><?php echo $row['HospitalName'] ?></p>

                        <h4 class="font-weight-bold">Hospital Email</h4>
                        <p><?php echo $row['Email'] ?></p>

                        <h4 class="font-weight-bold">Hospital Address</h4>
                        <p><?php echo $row['Address'] ?></p>

                        <h4 class="font-weight-bold">Hospital Conatact Num</h4>
                        <p><?php echo $row['ContactNum'] ?></p>

                        <h4 class="font-weight-bold">City</h4>
                        <p><?php echo $row['City'] ?></p>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /PAGE CONTENT -->


        <!-- FOOTER -->
        <?php require_once("footer.php") ?>
        <!-- /FOOTER -->

        </div>
	   <!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/  30 Nov 2019 04:11:53 GMT -->
</html>
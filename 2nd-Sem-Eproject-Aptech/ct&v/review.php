<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>CT & V</title>
    
    <!-- LINKS -->
    <?php require_once("links.php") ?>
    <!-- LINKS -->
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Popular Section -->
			<section class="section section-doctor">
				<div class="container-fluid">
                <div class="section-header text-center">
								<h2>FEEDBACKS</h2>
							</div>
				   <div class="row ">
						<div class="col-lg-8 mx-auto">
							<div class="doctor-slider slider">
							
								<!-- Doctor Widget -->
								<?php
                                    
                                    include("config.php");

                                    
                                    $sql = "SELECT * FROM reviews";
                                    $result = $con->query($sql);

                                    
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <div class="profile-widget">
                                                    <h4>🔵 <?php echo $row['Name']; ?></h4>
                                                <div class="pro-content">
                                                    <h3 class="title">
                                                        <h6><?php echo $row['Email']; ?></h6>
                                                    </h3>
                                                    <p class="text-muted mt-3"><?php echo $row['Comment']; ?></p>
                                                </div><br>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        echo "No data found";
                                    }

                                    // Close the database connection
                                    $con->close();
                                    ?>

								<!-- /Doctor Widget -->
								
							</div>
						</div>
				   </div>

                   <!-- FEEDBACK FORM -->

                   <div class="container-fluid my-5">
                    
								<h3 class="mt-3">Give me your feedback</h3>
                    <div class="row mt-5">
                        <div class="col-lg-8">

                        <form method="post">
                            <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name" required>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Email </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            </div>
                            <div class="mb-3 col-lg-12">
                                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Comment</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comm"></textarea>
                            </div>
                            </div>
                            
                            <div class="mb-3">
                                <button class="btn bg-primary text-white w-100 fw-bold" name="feedata">Send</button>
                            </div>
                        </form>

                        <!-- PHP FEEDBACK START -->

                                        <?php

                                            include("config.php");

                                            if(isset($_POST['feedata']))
                                                    {
                                                        $name=$_POST['name'];
                                                        $email=$_POST['email'];
                                                        $comm=$_POST['comm'];

                                                        $SQL="INSERT INTO `reviews`(`Name`, `Email`,`Comment`) 
                                                        VALUES ('$name','$email','$comm')";

                                                        $EXE=mysqli_query($con,$SQL);
                                                        if($EXE)
                                                        {
                                                            echo "<script>alert('Thanks for feedback ☺');
                                                            window.location='index.php'
                                                            </script>";
                                                        }
                                                        else
                                                        {
                                                            echo "<script>alert('Something went wrong');</script>";
                                                        }

                                                    }
                                                                
                                        ?>

                        <!-- PHP FEEDBACK START -->


                        </div>
                    
                        <div class="col-lg-4 text-center">
                            <img src="assets/img/feedback.png" width="300px" class="img-fluid" alt="">
                        </div>

                    </div>
                   </div>

				</div>
			</section>
			<!-- /Popular Section -->
       
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

</html>

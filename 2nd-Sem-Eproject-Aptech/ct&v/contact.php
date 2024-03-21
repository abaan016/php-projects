
<?php require_once("config.php") ?>

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

.nb1{
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.568);
}

#Sbr{
  border-radius: 30px;
  
}

#Sbr:hover{box-shadow: 0px 0px 7px rgba(0, 0, 0, 0.568);}

#sbrb{
  border-radius: 100px;
}





</style>        
        
</head>
<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">

        <!-- HEADER -->
        <?php require_once("header.php") ?>
        <!-- /HEADER -->

        <!-- PAGE CONTENT -->
            <div class="container-fluid">
                    <h1 class="text-center my-5">Contact Us</h1>
                <div class="row ms-auto my-5">
                    <div class="col-lg-6">


                        <form method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Full Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Mobile Number</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="number" placeholder="Phone" pattern="[0-9]">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mesg"></textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn bg-primary text-white w-100 fw-bold" name="condata">Send</button>
                            </div>
                        </form>
                        
                        <!-- PHP START -->

										<?php

                                            include("config.php");

                                            if(isset($_POST['condata']))
                                                    {
                                                        $name=$_POST['name'];
                                                        $email=$_POST['email'];
                                                        $number=$_POST['number'];
                                                        $mesg=$_POST['mesg'];

                                                        $SQL="INSERT INTO `tblcontact`(`Name`, `Email`, `Phone`, `Message`) 
                                                        VALUES ('$name','$email','$number','$mesg')";

                                                        $EXE=mysqli_query($con,$SQL);
                                                        if($EXE)
                                                        {
                                                            echo "<script>alert('Thanks for Contact');
                                                            window.location='index.php'
                                                            </script>";
                                                        }
                                                        else
                                                        {
                                                            echo "<script>alert('Something went wrong');</script>";
                                                        }

                                                    }
                                                                
                                                    ?>


                                            <!-- PHP START -->



                        <!-- MAP IFRAME -->
                    </div>
                    <div class="col my-3 mt-4">
                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=aptech metro star gate&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Puzzle</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
                    </div>
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
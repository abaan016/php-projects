<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>CT&V - HEADER</title>
		
		<!-- LINKS -->
		<?php require_once("links.php") ?>
		<!-- LINKS -->
    </head>
<body>

<!-- Header -->
<div class="header">
			
            <!-- Logo -->
            <div class="header-left">
                <a href="dashboard.php" class="logo">
                    <img src="assets/img/Translogo.png" alt="Logo">
                </a>
                <a href="dashboard.php" class="logo logo-small">
                    <img src="assets/img/iconct.png" alt="Logo" width="40" height="30">
                </a>
            </div>
            <!-- /Logo -->
            
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>
            
            <!-- Mobile Menu Toggle -->
            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>
            <!-- /Mobile Menu Toggle -->
            
            <!-- Header Right Menu -->
            <ul class="nav user-menu">

                
                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/user.png" width="31" alt="Ryan Taylor"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/profiles/user.png" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <p><?php echo $_SESSION['n']; ?></p>
                                <p><?php echo $_SESSION['e']; ?></p>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
                <!-- /User Menu -->
                
            </ul>
            <!-- /Header Right Menu -->
            
        </div>
        <!-- /Header -->

</body>
</html>
<?php require_once("config.php");
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bookmarker | Login</title>
  <!-- BS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- MY CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- Sweet Alert -->
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<body>

  <!-- Login Form -->
  <section class="vh-100 bg-light">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border: none;">
            <div class="card-body p-5">

              <h3 class="display-4 mb-5  text-center text-success fw-bold">Sign in</h3>

              <form method="post">
                <div class="form-outline mb-4">
                  <label class="form-label" for="typeEmail">Email</label>
                  <input type="email" id="typeEmail" name="typeEmail" class="form-control form-control-lg" />
                </div>

                <div class="form-outline">
                  <label class="form-label" for="typePassword">Password</label>
                  <input type="password" id="typePassword" name="typePassword" class="form-control form-control-lg" />
                </div>

                <button class="btn btn-success w-100 my-4 btn-lg btn-block" name="LoginData" type="submit">Login</button>
                <a href="register.php" class="text-muted fw-bold" style="text-decoration: none;">Create account</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Login Form PHP -->
  <?php

  if (isset($_POST['LoginData'])) {
    $username = $_POST["typeEmail"];
    $password = $_POST["typePassword"];

    $sql = "SELECT * FROM `tbl_bookmark_user` WHERE `u_email`='$username' and `u_pass`='$password'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    if ($row) {

      if ($row['auth'] == 1) {
        $_SESSION['id'] = $row['u_id'];
        $_SESSION['e'] = $row['u_email'];
        $_SESSION['p'] = $row['u_pass'];
        echo '<script>Swal.fire("Successfully Logged in");
            window.location="index.php";</script>';
      } else {
        echo '<script>Swal.fire("Something went wrong!");</script>';
      }
    } else {
      echo '<script>Swal.fire("Invalid username or password!");</script>';
    }
  }

  ?>



  <!-- BS JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
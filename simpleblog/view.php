<?php include("config.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>

.hero{
    width: 100%;
    height: 450px;
    background-image: url(img/bgview.jpg);
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

</style>
    
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-3">
        <div class="container">
            <a class="navbar-brand" href="index.php"><span class="fw-bold">Simple Blog</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active me-5" aria-current="page" href="index.php">Home</a>
                </div>
            </div>
            
            <a class="btn bg-primary text-white fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Write Blog</a>
        </div>
    </nav>
    <!-- End Navbar -->

    <?php
    
    $fetchID = $_GET["id"];

    $sql = "SELECT * FROM `tbl_blog` WHERE id = $fetchID";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
    ?>
    <!-- Content -->
    <div class="hero">
        <h3 class="my-5 text-center text-white text-uppercase fw-bold"><?php echo $row["title"] ?></h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="img/<?php echo $row["image"] ?>" class="my-5 img-fluid" alt="Image-not-found">
                <h4 class="mt-2 text-primary fw-bold"><?php echo $row["category"] ?></h4>
                <p class="lead my-5"><?php echo $row["descrip"] ?></p>
                <h5 class="my-3 text-primary"><?php echo $row["title"] ?></h5>
                <h6 class="mb-5">Post Date: <?php echo $row["post_date"] ?></h6>
            </div>
        </div>
    </div>
    <?php  }}?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
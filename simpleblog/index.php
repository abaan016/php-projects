<?php include("config.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
body{
    font-family: Arial, Helvetica, sans-serif;
}
a{
    text-decoration: none;
}
nav{
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
.card{
    border: none;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    padding: 15px;
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

    <!-- Content -->
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 mx-auto">
            <h1 class="my-5 text-center text-uppercase fw-bold text-primary">Words that <span class="badge bg-primary text-white">Spark</span> Journey through Ideas</h1>
            </div>
        </div>
        <div class="row">
            <?php
            
            $sql = "SELECT * FROM `tbl_blog` ORDER BY id DESC ";
            $exe = mysqli_query($conn, $sql);

            if($exe)
            {
                while($row = mysqli_fetch_assoc($exe))
                {?>
                    <div class="col-md-4 mt-2">
                        <div class="card">
                            <img src="img/<?php echo $row["image"] ?>" class="card-img-top img-fluid" alt="Image-not-found">
                            <div class="card-body">
                                <p class="badge bg-primary text-white mb-3"><?php echo $row["category"] ?></p>
                                <h5 class="blog-title fw-bold"><?php echo $row["title"] ?></h5>
                                <p class="post-date mt-2 text-muted">Post Date: <span class="fw-bold"><?php echo $row["post_date"] ?></span></p>
                                <a href="view.php?id=<?php echo $row["id"] ?>" class="text-primary my-2">Read Blog ➡</a>
                            </div>
                        </div>
                    </div>
        <?php   }
            }else{
                echo "<h3>No Blog Posts</h3>";
            }
            
        ?>

            
        </div>
    </div>
    <!-- End Content -->

    <!-- Create Blog Modal -->
    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary fw-bold">New Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="upload.php" class="form-group" method="POST" enctype="multipart/form-data">
                    <label for="title" class="form-label mt-3">Blog title</label>
                    <input type="text" class="form-control" id="title" name="title" required>

                    <label for="categ" class="form-label mt-3">Blog Category</label>
                    <input type="text" class="form-control" id="categ" name="categ" required>

                    <label for="btext" class="form-label mt-3">Blog Text</label>
                    <textarea name="btext" id="btext" class="form-control" cols="30" rows="3" required></textarea>

                    <label for="file" class="form-label mt-3">Select Image</label>
                    <input type="file" name="file" id="file" class="form-control" required>

                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="post_blog" class="btn btn-primary">Post Blog</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- Create Blog Modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
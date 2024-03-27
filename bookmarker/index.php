<?php require_once("config.php");
session_start();
if (isset($_SESSION['e']) && isset($_SESSION['p'])) {
?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bookmarker | dashboard</title>
        <!-- BS CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- MY CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Sweet Alert -->
        <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

        <style>
            input {
                border: none;
                border-radius: 5rem;
                box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            }
        </style>

    </head>

    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">ɓσσƙɱαɾƙҽɾ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item me-4">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <div class="nav-item me-4 dropdown btn btn-sm bg-success">
                            <a href="#" class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-circle-user"></i>
                                <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['e'] ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end border-1 rounded-0 rounded-bottom m-0">
                                <a href="logout.php" class="dropdown-item">Log Out</a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Bookmarks Form  -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="headings  text-center">
                        <h1 class="display-3 mt-5 mb-3 fw-bold">ɓσσƙɱαɾƙҽɾ</h1>
                        <p class="lead fw-bold">save your favourite websites here</p>
                    </div>
                    <form class="form-group" action="" method="post">
                        <label for="webName" class="mt-4"><i class="fa-solid fa-pen"></i> Website Name</label>
                        <input type="text" id="webName" name="webName" class="form-control" required>

                        <label for="webUrl" class="mt-4"><i class="fa-solid fa-link"></i> Website URL</label>
                        <input type="text" id="webUrl" name="webUrl" class="form-control" required>

                        <button class="btn bg-success my-3 form-control text-white" name="add">Add Bookmark</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- PHP -->
        <?php
        if (isset($_POST["add"])) {
            $userId = $_SESSION['id'];

            $name = $_POST["webName"];
            $url = $_POST["webUrl"];
            $sql = "INSERT INTO `tbl_bookmark_list`(`web_name`, `web_link`, `user_id`) VALUES ('$name','$url','$userId')";

            $exe = mysqli_query($conn, $sql);

            if ($exe != "") {
                echo '<script>Swal.fire("Your bookmark has been added.");</script>';
            } else {
                echo '<script>Swal.fire("Something went wrong!");</script>';
            }
        }
        ?>
        <!-- Bookmarks Form  -->

        <!-- Bookmarks View -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="headings text-center">
                        <p class="lead mt-5 mb-3 fw-bold">Your Bookmarks list</p>
                    </div>
                    <table class="table mt-4 mb-5">
                        <thead>
                            <tr>
                                <th scope="col">Website Name</th>
                                <th scope="col">Website Link</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `tbl_bookmark_list`";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                if ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['web_name'] . "</td>";
                                    echo "<td><a href='" . $row['web_link'] . "' class='btn btn-sm bg-success text-white' target='_blank'><i class='fa-solid fa-share'></i> Go to</a></td>";
                                    echo "<td><a href='delete.php?id=" . $row['b_id'] . "' class='btn btn-sm bg-danger text-white'><i class='fa-solid fa-trash'></i> Delete</a></td>";
                                    echo "</tr>";
                                } else {
                                    echo "<tr>";
                                    echo "<td>Empty Bookmark list</td>";
                                    echo "</tr>";
                                }
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- PHP -->
        <?php

        ?>

        <!-- Bookmarks View -->


        <!-- Sweet Alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- BS JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

    </html>

<?php
} else {
    header("refresh:0.2,url='login.php'");
}
?>
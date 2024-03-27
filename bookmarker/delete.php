<!-- Sweet Alert -->
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

<?php
require_once("config.php");

if (isset($_GET['id'])) {
    $bookmark_id = $_GET['id'];


    $sql = "DELETE FROM `tbl_bookmark_list` WHERE `b_id`='$bookmark_id'";

    if (mysqli_query($conn, $sql)) {
        echo '<script>Swal.fire("Bookmark has been deleted");</script>';
        header("refresh:0.2,url='index.php'");
    } else {
        echo '<script>Swal.fire("Something went wrong!");</script>';
        header("refresh:0.2,url='index.php'");
    }
} else {
    header("Location: index.php");
    exit();
}


mysqli_close($conn);
?>
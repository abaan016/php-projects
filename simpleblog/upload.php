<?php

include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["post_blog"]))
    {
        $blogTitle = $_POST["title"];
        $blogCateg = $_POST["categ"];
        $blogDesc = $_POST["btext"];
        $blogImg = $_FILES["file"]["name"];
        $temp_name = $_FILES["file"]["tmp_name"];
        $folder = 'img/' . $blogImg;

        $sql = "INSERT INTO `tbl_blog`(`category`, `image`, `title`, `descrip`) 
        VALUES ('$blogCateg','$blogImg','$blogTitle','$blogDesc')";

        $exe = mysqli_query($conn, $sql);

        if($exe && move_uploaded_file($temp_name, $folder))
        {
            echo '<script>alert("New blog are successfully posted"); window.location = "index.php";</script>';
            exit;
        }
        else
        {
            echo '<script>alert("Oops! Something went wrong.")</script>';
        }

    }
}

?>
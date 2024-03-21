<?php
include("otherdb.php");

$id = $_GET['id'];

$sql = "DELETE FROM `reviews` WHERE `ID`=$id";

mysqli_query($conn, $sql);
header('location:reviews.php');

?>
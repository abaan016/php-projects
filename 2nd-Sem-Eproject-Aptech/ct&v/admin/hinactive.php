<?php
include("otherdb.php");

$id = $_GET['id'];

$sql = "UPDATE `reghospital` SET `h_status`=0 WHERE Hid=$id";

mysqli_query($conn, $sql);
header('location:hospital-list.php');

?>

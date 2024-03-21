<?php
include("otherdb.php");

$id = $_GET['id'];

$sql = "DELETE FROM `tblcontact` WHERE `ID`=$id";

mysqli_query($conn, $sql);
header('location:contact-list.php');

?>
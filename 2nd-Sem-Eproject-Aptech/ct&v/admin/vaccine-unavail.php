<?php
include("otherdb.php");

$id = $_GET['id'];

$sql = "UPDATE `vaccines` SET `AvailabilityStatus`=0 WHERE VaccineID=$id";

mysqli_query($conn, $sql);
header('location:vaccine.php');

?>

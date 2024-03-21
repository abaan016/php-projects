<?php
include("otherdb.php");

$id = $_GET['id'];

$sql = "DELETE FROM `bookings` WHERE `BookingID`=$id";

mysqli_query($conn, $sql);
header('location:appointment-list.php');

?>
<?php
include("otherdb.php");

$id = $_GET['id'];

$sql = "UPDATE `bookings` SET `BookingStatus`=1 WHERE `BookingID`=$id";

mysqli_query($conn, $sql);
header('location:appointment-list.php');

?>

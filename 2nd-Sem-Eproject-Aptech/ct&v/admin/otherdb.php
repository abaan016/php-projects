<?php                    

$conn=mysqli_connect("localhost","root","","ct&v");
if(!$conn)
{
    echo "<script>alert('database is not connected');</script>";
}

?>
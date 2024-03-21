<?php                    

$con=mysqli_connect("localhost","root","","loginsystem");
if(!$con)
{
    echo "<script>alert('database is not connected');</script>";
}

?>
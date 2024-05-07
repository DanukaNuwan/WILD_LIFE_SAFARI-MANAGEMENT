<?php
require './adminconfig.php';

$Cus_ID = $_GET['id'];

$query = "DELETE FROM reservation WHERE Cus_ID = '$Cus_ID'";

$data = mysqli_query($conn, $query);

if ($data) {
    $message = "Record Deleted";
    header("location:rdetails.php?message=".$message);
} else {
    echo "<script>alert('Error in Delete')</script>";
}

mysqli_close($conn);
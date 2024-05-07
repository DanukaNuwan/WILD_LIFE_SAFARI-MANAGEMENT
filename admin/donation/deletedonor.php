<?php
require '../adminconfig.php';

$id = $_GET['Id'];

$query = "DELETE FROM donorinfo WHERE Id = '$id'";

$data = mysqli_query($conn, $query);

if ($data) {
    $message = "Record Deleted";
    header("location:donationdetails.php?message=".$message);
} else {
    echo "<script>alert('Error in Delete')</script>";
}

mysqli_close($conn);
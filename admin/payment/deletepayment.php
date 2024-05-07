<?php
require '../adminconfig.php';

$id = $_GET['id'];

$query = "DELETE FROM payment WHERE id = '$id'";

$data = mysqli_query($conn, $query);

if ($data) {
    $message = "Record Deleted";
    header("location:paymentdetails.php?message=".$message);
} else {
    echo "<script>alert('Error in Delete')</script>";
}

mysqli_close($conn);
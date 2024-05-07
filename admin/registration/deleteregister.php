<?php
require '../adminconfig.php';

$UserId = $_GET['id'];

$query = "DELETE FROM register WHERE UserId = '$UserId'";

$data = mysqli_query($conn, $query);

if ($data) {
    $message = "Record Deleted";
    header("location:registerdetails.php?message=".$message);
} else {
    echo "<script>alert('Error in Delete')</script>";
}

mysqli_close($conn);
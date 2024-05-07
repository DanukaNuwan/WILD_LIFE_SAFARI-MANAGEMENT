<?php
require '../adminconfig.php';

$id = $_GET['id'];

// delete record from contact us database
$query = "DELETE FROM contactus WHERE id = '$id'";

$data = mysqli_query($conn, $query);

if ($data) {
    $message = "Record Deleted";
    header("location:contactusdetails.php?message=".$message);
} else {
    echo "<script>alert('Error in Delete')</script>";
}

mysqli_close($conn);
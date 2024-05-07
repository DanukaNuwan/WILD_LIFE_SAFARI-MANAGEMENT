<?php

require('../adminconfig.php');

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

$sql = "INSERT INTO register(UserId, Username, Email, Password, ReEnter_Password) 
VALUES ('', '$username', '$email', '$password', '$repassword')";

if (mysqli_query($conn, $sql)) {
    $message = "New Reservation Created Successfully";
    header("location:registerdetails.php?message=". $message);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
<?php
include './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST['username'];
    $password = $_POST['password'];

    // Query for the user table
    $userSql = "SELECT * FROM register WHERE username='$Username' AND password='$password'";
    $userResult = mysqli_query($conn, $userSql);
    $userRow = mysqli_fetch_array($userResult);

    // Query for the admin table
    $adminSql = "SELECT * FROM admin_table WHERE username='$Username' AND password='$password'";
    $adminResult = mysqli_query($conn, $adminSql);
    $adminRow = mysqli_fetch_array($adminResult);

    if ($userRow) {
        // User authentication successful
        header("location: index.php");
    } elseif ($adminRow) {
        // Admin authentication successful
        header("location: ./admin/admin.php");
    } else {
        // Invalid username or password
        echo '<script>alert("User name and password is incorrect!"); window.location.href = "Login.php";</script>';
    }
}
?>

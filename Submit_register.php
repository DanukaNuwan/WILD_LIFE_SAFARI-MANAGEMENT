<?php
    include './config.php';

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

        // Check if username or email already exists
        $checkQuery = "SELECT * FROM register WHERE username = ? OR email = ?";
        $checkStmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($checkStmt, $checkQuery)) {
            die(mysqli_error($conn));
        }
        mysqli_stmt_bind_param($checkStmt, "ss", $username, $email);
        mysqli_stmt_execute($checkStmt);
        mysqli_stmt_store_result($checkStmt);
        
        if (mysqli_stmt_num_rows($checkStmt) > 0) {
            echo '<script>alert("Username or email already exists!"); window.location.href = "Registeration.php";</script>';
        } else {
            $insertQuery = "INSERT INTO register(Username, email, password,ReEnter_Password ) VALUES (?, ?, ?, ?)";
            $insertStmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($insertStmt, $insertQuery)) {
                die(mysqli_error($conn));
            }
            mysqli_stmt_bind_param($insertStmt, "ssii", $username, $email, $password, $repassword);
            mysqli_stmt_execute($insertStmt);
            echo '<script>alert("Thank you for your registration! Log in to your account!"); window.location.href = "Login.php";</script>';
        }
    } else {
        header('location:../Registeration.php');
    }
?>

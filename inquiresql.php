<?php
include 'config.php';
// Check if the required form fields are set
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['msg'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

    $stmt = $conn->prepare("INSERT INTO inquire (`name`, `email`, `phone`, `subject`, `msg`) VALUES (?,?,?,?,?)");
    $stmt->bind_param("ssiss", $name, $email, $phone, $subject, $msg);


     // Execute the prepared statement
    if ($stmt->execute()) {

        echo '<script>alert("Thank you for your response\n\Have a nice day."); window.location.href = "index.php";</script>';
    } else {
     
        echo '<script>alert("Error please Try again"); window.location.href = "Contact us.php";</script>';
    }

    $stmt->close();
}
?>
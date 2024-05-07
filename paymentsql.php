<?php
  include 'config.php';

  // Check if the required form fields are set
  if(isset($_POST['cardname']) && isset($_POST['cardnumber']) && isset($_POST['expmonth']) && isset($_POST['expyear']) && isset($_POST['cvv'])){
      $cardname = $_POST['cardname'];
      $cardnumber = $_POST['cardnumber'];
      $expmonth = $_POST['expmonth'];
      $expyear = $_POST['expyear'];
      $cvv = $_POST['cvv'];
      
    // Execute the prepared statement
      $stmt = $conn->prepare("INSERT INTO payment (`cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`) VALUES (?,?,?,?,?)");
      $stmt->bind_param("siiii", $cardname, $cardnumber, $expmonth, $expyear, $cvv);

      if ($stmt->execute()) {
          echo '<script>alert("Payment Successful!\n\nThank you for your payment. Enjoy your wild-life safari!"); window.location.href = "index.php";</script>';
      } else {
          echo '<script>alert("Payment Failed!\n\nPlease try again later."); window.location.href = "payment.php";</script>';
      }

      $stmt->close();
  }
  ?>
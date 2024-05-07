<?php

  //create connection
    include('./config.php');

    $cardNumber = $_POST['cardNumber'];
    $cardHolder = $_POST['cardHolder'];
    $expire = $_POST['expire'];
    $cvv= $_POST['cvv'];
    

    //Database connection
   
        $stmt = $conn->prepare("insert into donorpayment(cardNumber,cardHolder,expire,cvv)
        values(?,?,?,?)");
        $stmt->bind_param("issi",$cardNumber, $cardHolder, $expire, $cvv);
        $stmt->execute();
        echo '<script>alert("payment successful!"); window.location.href = "Donation.php";</script>';
  
    $stmt->close();
    $conn->close();

?>
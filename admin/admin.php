<?php
require('adminConfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>

    <!-- Add admin.css -->
    <link rel="stylesheet" href="./CSS/adminstyle.css">
</head>
<body>

        <!-- Side BAr -->
        <div id="pgside">
            <div id="pguser">
                <img src="./IMG/logowhite.png" alt="logo" height="100px" width="290px">
            </div>

            <a href="../index.php">
                <i class="ico">&#9733;</i>
                <i class="txt">Home</i>
            </a>

            <a href="./admin.php" class="current">
                <i class="ico">&#9733;</i>
                <i class="txt">Dashboard</i>
            </a>

            <a href="./rdetails.php">
                <i class="txt">Reservation</i>
            </a>

            <a href="./registration/registerdetails.php">
                <i class="txt">Registration</i>
            </a>

            <a href="./donation/donationdetails.php">
                <i class="txt">Donation</i>
            </a>

            <a href="./contactus.php/contactusdetails.php">
                <i class="txt">Contact Us</i>
            </a>

            <a href="./payment/paymentdetails.php">
                <i class="txt">Payment</i>
            </a>
        </div>
            <main id="pgmain">
                <div class="ag-format-container">
                    <!-- reservation -->
                    <div class="ag-courses_item">
                        <a href="./rdetails.php" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                Reserve Users   
                            </div>

                            <div class="ag-courses-item_date-box">
                                Count:
                                <span class="ag-courses-item_date">
                                    <?php

                                    $sql = "SELECT COUNT(Cus_ID) as 'Totalreservation' FROM reservation";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    }
                                    echo $row['Totalreservation'];
                                    ?>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="ag-courses_item">
                        <a href="./registration/registerdetails.php" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                Registered Users  
                            </div>

                            <div class="ag-courses-item_date-box">
                                Count:
                                <span class="ag-courses-item_date">
                                    <?php

                                    $sql = "SELECT COUNT(UserId) as 'Totalregistration' FROM register";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    }
                                    echo $row['Totalregistration'];
                                    ?>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="ag-courses_item">
                        <a href="./donation/donationdetails.php" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                Donor Information 
                            </div>

                            <div class="ag-courses-item_date-box">
                                Count:
                                <span class="ag-courses-item_date">
                                    <?php

                                    $sql = "SELECT COUNT(Id) as 'Totaldonor' FROM donorinfo";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    }
                                    echo $row['Totaldonor'];
                                    ?>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="ag-courses_item">
                        <a href="./contactus.php/contactusdetails.php" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                Cuntact Us  
                            </div>

                            <div class="ag-courses-item_date-box">
                                Count:
                                <span class="ag-courses-item_date">
                                    <?php

                                    $sql = "SELECT COUNT(id) as 'Totalmassages' FROM contactus";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    }
                                    echo $row['Totalmassages'];
                                    ?>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="ag-courses_item">
                        <a href="./payment/paymentdetails.php" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                Payment Details
                            </div>

                            <div class="ag-courses-item_date-box">
                                Count:
                                <span class="ag-courses-item_date">
                                    <?php

                                    $sql = "SELECT COUNT(id) as 'Totalpayment' FROM payment";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    }
                                    echo $row['Totalpayment'];
                                    ?>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </main>
            <?php
            mysqli_close($conn);
            ?>
</body>
</html>
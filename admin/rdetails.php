<?php
require('adminConfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Reservation Details</title>

    <!-- Add admin.css -->
    <link rel="stylesheet" href="./CSS/restable.css">
</head>
<body>
        <!-- Side BAr -->
        <div id="pgside">
            <div id="pguser">
                <img src="./IMG/logowhite.png" alt="logo" height="100px" width="290px">
            </div>

            <a href="./admin.php">
                <i class="ico">&#9733;</i>
                <i class="txt">Dashboard</i>
            </a>

            <a href="./rdetails.php" class="current">
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
<div id="pgmain">
<!-- massages when record create,delete,update -->
        <?php
        if (isset($_GET['message'])) {
            $msg = $_GET['message'];
            $msg = str_replace('%20', ' ', $msg);

            if ($msg == "New Record Created Successfully") {
                echo "<div class='alert success' id='alertDiv'>";
                echo "$msg";
                echo "</div>";
            } else if ($msg =="Record Updated Successfully"){
                echo "<div class='alert success' id='alertDiv'>";
                echo "$msg";
                echo "</div>";
            }
            else if ($msg = "Record Deleted") {
                echo "<div class='alert danger' id='alertDiv'>";
                echo "$msg";
                echo "</div>";
            }
        }
        ?>
<!-- create table -->
        <h1><span>Reserve Users</span> Table View</h1>

        <button class="button buttonAdd"><a href="./addreserve.php">Add Reservation</a></button>

        <table class="styled-table">
            <thead>
                <tr>
                    <td>Cus_ID</td>
                    <td>first Name</td>
                    <td>Last Name</td>
                    <td>Package Type</td>
                    <td>NIC</td>
                    <td>Email</td>
                    <td>Area Code</td>
                    <td>Phone Number</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>

            <?php
            $sql = "SELECT * FROM reservation";
            $result = $conn->query($sql);

            echo "<tbody>";
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['Cus_ID'] . "</td>";
                    echo "<td>" . $row['F_Name'] . "</td>";  
                    echo "<td>" . $row['L_Name'] . "</td>";
                    echo "<td>" . $row['Package_Type'] . "</td>";
                    echo "<td>" . $row['NIC'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['Area_Code'] . "</td>";
                    echo "<td>" . $row['Phone_Number'] . "</td>";

                    echo "<td>";
                    echo "<button class = 'button buttonEdit'><a href='updatereserve.php?Cus_ID=$row[Cus_ID]&fname=$row[F_Name]&lname=$row[L_Name]&ptype=$row[Package_Type]&nic=$row[NIC]&email=$row[Email]&acode=$row[Area_Code]&number=$row[Phone_Number]'>Update</a></button>";
                    echo "</td>";

                    echo "<td>";
                    echo "<button class = 'button buttonDel' window.location.href = 'rdetails.php';><a id='delete' href='deleteuser.php?id=$row[Cus_ID]'>Delete</a></button>";
                    echo "</td>";

                    echo "</tr>";
                }
                echo "</tbody>";
            } else {
                echo "<center>Table is empty!</center>";
            }

            mysqli_close($conn);
            ?>

        </table>
    </div>
<!-- display massages -->
    <script>
        // Function to fade out the div
        function fadeOut(element) {
            var op = 1; // initial opacity

            // Timer to decrease opacity gradually
            var timer = setInterval(function() {
                if (op <= 0.1) {
                    clearInterval(timer);
                    element.style.display = 'none'; // Hide the element when faded out
                }

                element.style.opacity = op;
                element.style.filter = 'alpha(opacity=' + op * 100 + ')';
                op -= op * 0.1;
            }, 10); // Decrease opacity every 10ms
        }

        // Fade out the div after 3 seconds (3000 milliseconds)
        setTimeout(function() {
            var myDiv = document.getElementById('alertDiv');
            fadeOut(myDiv);
        }, 3000);
    </script>
</body>

</html>
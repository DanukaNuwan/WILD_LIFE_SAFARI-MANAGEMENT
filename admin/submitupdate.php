<?php
require('./adminconfig.php');
?>

<?php
if ($_GET['submit']) {
    $Cus_ID = $_GET['Cus_ID'];
    $fname = $_GET['fname'];
    $laname = $_GET['lname'];
    $ptype = $_GET['ptype'];
    $nic = $_GET['nic'];
    $email = $_GET['email'];
    $acode = $_GET['acode'];
    $number = $_GET['number'];

    $query = "UPDATE reservation SET
                        F_Name = '$fname',
                        L_Name = '$laname',
                        Package_Type = '$ptype',
                        NIC = '$nic',
                        Email = '$email',
                        Area_Code = '$acode',
                        Phone_Number = '$number'
                        WHERE Cus_ID = '$Cus_ID' ";

    $data = mysqli_query($conn, $query);

    if ($data) {
        $message = "Record Updated Successfully";
        header("location:./rdetails.php?message=".$message);
    } else {
        echo "<script>alert('Error in Update')</script>";
    }
}

mysqli_close($conn);

?>
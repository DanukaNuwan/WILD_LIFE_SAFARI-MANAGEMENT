<?php
    require('./adminconfig.php');

    $Cus_ID = $_GET['Cus_ID'];
    $fname = $_GET['fname'];
    $laname = $_GET['lname'];
    $ptype = $_GET['ptype'];
    $nic = $_GET['nic'];
    $email = $_GET['email'];
    $acode = $_GET['acode'];
    $number = $_GET['number'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WILD-LIFE SAFARI</title>
    <link rel="stylesheet" href="./CSS/resstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&family=Oswald:wght@200&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php require 'header.php'?>
<br><br><br><br><br>
 <div class="formchange">
 <h1>Update Details:  <?php echo "$fname" . " " . "$laname"  ?></h1>
    <div class="reservation">Wild-Life Safari Booking</div>
    <div class="main">
    <form action="./submitupdate.php" method="get">
    <label for="Cus_ID"><h2 class="name">User ID: </h2></label>
        <input type="number" name="Cus_ID" id="Cus_ID" value=<?php echo $Cus_ID ?> >
        <div id="name">
            <h2 class="name">Name:</h2>
            <input class="firstname" type="text" name="fname" required placeholder="First Name" value=<?php echo $fname ?>><br>
        
            <input class="lastname" type="text" name="lname" required  placeholder="Last Name" value=<?php echo $laname ?>>
    
        </div>
        <h2 class="name">Package Type:</h2>
        <select id ="PackageType" name="ptype" required value=<?php echo $ptype ?>>
            <option value="">PackageType</option>
            <option value="Package1">Package-1</option>
            <option value="Package2">Package-2</option>
            <option value="Package3">Package-3</option>
        </select>
        <h2 class="name"> NIC: </h2>
        <input class="nic" type="text" name="nic" required maxlength="12" size="12" placeholder="-123456789V-" value=<?php echo $nic ?>>
        <h2 class="name"> Email: </h2>
        <input class="email" type="text" name="email" required  placeholder="-email-" value=<?php echo $email ?>>
        <h2 class="name"> Phone: </h2>
        <input class="code" type="text" name="acode" required  maxlength="3" size="3" placeholder="+94" value=<?php echo $acode ?>>
        <label class="area-code ">  Area code: </label>
        <input class="number" type="text" name="number" required  maxlength="9" size="9" placeholder="-771234567-" value=<?php echo $number ?>>
        <label class="phone-number"> Phone Number: </label><br>
        <CENTER>
        <button  type="submit" name="submit" value="Update"> Update </button>
        <button  type="reset"  value="reset"> Reset </button>  
        </CENTER> 
    </form>
  </div>
 </div> 
<br>
<br>
<?php require 'footer.php' ?>
</body>

</html>
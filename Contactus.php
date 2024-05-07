<!DOCTYPE html>
<html>
<head>

 <meta charset="UTF-8">
 <title>CONTACT US | WILD-LIFE SAFARI</title>
 <link rel="stylesheet" type="text/css" href="./CSS/contact.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Libre+Baskerville:wght@700&display=swap">

<style>
    body {
      background-image: url("./IMG/bg3.jpg");
      background-size: cover;
    }
  </style>
</head>

<body>
<?php require 'header.php'?>

<div class="topic">
    CONTACT US
</div>
<!-- Section for contact information  -->
<div class="bar">
        <button class="btn"><i class="fa fa-home"></i>
        <br/><br/>
        ADDRESS:
        <br/><br/>
        224/B<br/>
        Bakers street,<br/>
        Colombo
        </button>
</div>

<div class="bar">
        <button class="btn"><i class="fa fa-phone"></i>
        <br/><br/>
        PHONE:
        <br/><br/>
        +941123456789<br/>
        +941198765432
        </button>
</div>


<div class="bar">
        <button class="btn"><i class="fa fa-fax"></i>
        <br/><br/>
        FAX:
        <br/><br/>
        +941123456789<br/>
        +941198765432
        </button>
</div>


<div class="bar">
        <button class="btn"><i class="fa fa-envelope"></i>
        <br/><br/>
        Email:
        <br/><br/>
        wildlifesafari@email.com
        </button>
</div>


<br/><br/>
<hr style="height:2px;border-width:0;color:gray;background-color:black">

<!-- create form for contact -->
<div class="cont">
        <form method="post" action="contactsql.php">
                <p>LET'S START CONVERSATION</p>

                <input type="text" name="name" placeholder="Your Name" required>

                <input type="email" name="email" placeholder="Email" required>

                <textarea name="msg" placeholder="Your Message"></textarea>

                <button type="submit">Send</button>
        </form>
</div>

<!-- Google map iframe -->
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.798511774016!2d79.97036421080058!3d6.914677493056038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1685203948548!5m2!1sen!2slk" width="590" height="360" style="border: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php require 'footer.php'?>


</body>
</html>
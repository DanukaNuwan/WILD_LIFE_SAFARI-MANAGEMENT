<!DOCTYPE html>
<html>
<head>

 <meta charset="UTF-8">
 <title>INQUIRE | WILD-LIFE SAFARI</title>
 <link rel="stylesheet" type="text/css" href="./CSS/Inquire.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Libre+Baskerville:wght@700&display=swap">

 <style>

  body{
    background-image: url("./IMG/bg6.jpg");
    background-size: cover;
    
  }

</style>
</head>

<body>

<!-- connect header  -->
<?php require 'header.php'?>

<div class="topic">
INQUIRY FORM
</div>

<!-- create form for inquire -->

<div class="cont">
  	<form method="post" action="inquiresql.php">
	  	<h3>Unite with Us</h3>

		<input type="text" name="name" placeholder="Your Name" required>

		<input type="email" name="email" placeholder="Email" required>

		<input type="tel" id="phone" name="phone" placeholder="Phone Number" required>

		<input type="text" name="subject" placeholder="Subject" required>

		<textarea name="msg" placeholder="Your Message"></textarea>

		<button type="submit">Send</button>
	</form>
</div>


<!-- connect footer  -->
<?php require 'footer.php'?>

</body>
</html> 

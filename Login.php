<!DOCTYPE html>
<html>
<head>
  <title>LOGIN | WILD LIFE SAFARI</title>

  <link rel="stylesheet"  href="./CSS/login.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Libre+Baskerville:wght@700&display=swap">

  
</head>


<body>
<?php require 'header.php' ?>

  <div class="Login"><br><br>
    <h1>Login Here!</h1><br>
    <div class="form">
      <form class="form" method="POST" action="./submit_login.php">
        <label for="username">Username</label><br><br>
        <input type="text" name="username" placeholder="Enter Username" required><br><br>
        <label for="password">Password</label><br><br>
        <div class="password-container">
          <input type="password" name="password" id="password" placeholder="Enter Password" required><br>
          <span class="show-password" onclick="togglePasswordVisibility()"></span>
        </div><br>
        <center>
          <button type="submit">Login</button>
        </center><br><br><br>
        <p>Dont have an account:<a href="./Registeration.php" style="color:#FFFFFF" text-decoration="none">Register</a><br><br></p>
        
      </form>
    </div>
  </div>
  




  <?php require 'footer.php' ?>

</body>
</html>

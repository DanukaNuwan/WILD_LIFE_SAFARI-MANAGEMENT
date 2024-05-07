<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | WILD-LIFE SAFARI</title>
    <link rel="stylesheet" href="./CSS/home_style">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&family=Oswald:wght@200&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@700&family=Libre+Baskerville:wght@700&display=swap">
</head>
<body>
<?php require 'header.php' ?>

<!-- SLIDER -->
<div class="slider-container">
  <div class="slider">
    <div class="slider-item">
      <img class="slider-img" src="./IMG/home1.jpg" alt="Slider Image 1">
    </div>
    <div class="slider-item">
      <img class="slider-img" src="./IMG/home2.jpg" alt="Slider Image 2">
    </div>
    <div class="slider-item">
      <img class="slider-img" src="./IMG/home3.jpg" alt="Slider Image 3">
    </div>
  </div>
  <div class="slider-buttons"></div>
</div>
<br>
<div class="topic">
  <h2>WILD-LIFE SAFARI</h2>
</div>
<br>
<!-- cards -->
<div class="option-card">
<div class="cards">
  <div class="image">
    <img src="./IMG/bundala4.jpg">
  </div>
  <div class="ctitle">
    <h1>BUNDALA</h1>
  </div>
  <div class="des">
    <p>Bundala National Park is situated in...</p>
    <div class="button">
      <a href="./bundala.php">
      <button>Read More...</button>
      </a>
    </div>
  </div>
</div>

<div class="cards">
  <div class="image">
    <img src="./IMG/Kanneliya_c.jpg">
  </div>
  <div class="ctitle">
    <h1>KANNELIYA</h1>
  </div>
  <div class="des">
    <p>Kanneliya is one of the areas that...</p>
    <div class="button">
      <a href="./Kanneliya.php">
      <button>Read More...</button>
      </a>
    </div>
  </div>
</div>

<div class="cards">
  <div class="image">
    <img src="./IMG/wasgamuwa_c.jpg">
  </div>
  <div class="ctitle">
    <h1>WASGAMUWA</h1>
  </div>
  <div class="des">
    <p>Wasgamuwa National Park situated 225km....</p>
    <div class="button">
      <a href="./Wasgamuwa.php">
      <button>Read More...</button>
      </a>
    </div>
  </div>
</div>

<div class="cards">
  <div class="image">
    <img src="./IMG/minneriya_c.jpg">
  </div>
  <div class="ctitle">
    <h1>MINNERIYA</h1>
  </div>
  <div class="des">
    <p>The Minneriya National Park is situated....</p>
    <div class="button">
      <a href="./Minneriya.php">
      <button>Read More...</button>
      </a>
    </div>
  </div>
</div>

<div class="cards">
  <div class="image">
    <img src="./IMG/sinharaja_c.jpg">
  </div>
  <div class="ctitle">
    <h1>SINHARAJA</h1>
  </div>
  <div class="des">
    <p>The apex of rainforests in Sri Lanka...</p>
    <div class="button">
      <a href="./sinharaja.php">
      <button>Read More...</button>
      </a>
    </div>
  </div>
</div>

<div class="cards">
  <div class="image">
    <img src="./IMG/udawalawe_c.jpg">
  </div>
  <div class="ctitle">
    <h1>UDAWALAWA</h1>
  </div>
  <div class="des">
    <p>The Udawalawe National Park is...</p>
    <div class="button">
      <a href="./udawalawa.php">
      <button>Read More...</button>
      </a>
    </div>
  </div>
</div>

<div class="cards">
  <div class="image">
    <img src="./IMG/kumana_c.jpg">
  </div>
  <div class="ctitle">
    <h1>KUMANA</h1>
  </div>
  <div class="des">
    <p> Sri Lankas rarest birds can be observed here...</p>
    <div class="button">
      <a href="./kumana.php">
      <button>Read More...</button>
      </a>
    </div>
  </div>
</div>

<div class="cards">
  <div class="image">
    <img src="./IMG/yala_c.jpg">
  </div>
  <div class="ctitle">
    <h1>YALA</h1>
  </div>
  <div class="des">
    <p>situated in the south-east region of Sri Lanka...</p>
    <div class="button">
      <a href="./yala.php">
      <button>Read More...</button>
      </a>
    </div>
  </div>
</div>
</div>  

<!-- SLIDER script -->

<script src= "./js/slider.js"></script>   
<?php require 'footer.php' ?>
</body>
</html>
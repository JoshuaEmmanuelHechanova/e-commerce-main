<?php
$path = "./widgets/";
$nav = $path . "main-menu.php";
$quotes = $path . "quotes.php";
$mission = $path . "about-us-vm.php";
$main_listing = $path . "main-listing.php";
$testimonials = $path . "testimonials.php";
$location = $path . "location.php";
$discover = $path . "discover.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
  <title>Tailoring Store</title>
</head>
<header>
  <!-- <a href="#" class="scroll-to-top" title="Go to top">↑</a> -->
  <div class="mcontainer">
    <div class="hero-image" id="hero-image">
      <nav class="Navbar header-font">
        <img src="./images/bg3.png" alt="" class="heroimg">
        <!-- Main menu -->
        <?php include($nav) ?>

      </nav>
      <div class="hero-text">
        <!-- The shops name -->
        <?php include($quotes) ?>
      </div>
    </div>
  </div>
</header>

<body>
  <div id="babout">
    <!-- Vission, Mission and About us -->
    <?php include($mission) ?>
  </div>
  <div class="tiner" id="tiner">
    <div id="main-content" class="container">
      <!-- Our products -->
      <?php include($main_listing) ?>
      <div class="zcontainer" id="ztestimonial">
        <!-- The reviews -->
        <?php include($testimonials) ?>
      </div>
    </div>
    <div class="acontact-info" id="head-contact">
      <!-- Shops Location -->
      <?php include($location) ?>
    </div>
    <div class="wcta-container">
      <!-- Discover more of our products  -->
      <!-- Just click the button -->
      <?php include($discover) ?>
    </div>
    <footer>
      <div class="row">
        <div class="col">
          <img src="./images/logo1.jpg" class="logo">
          <p class="font-content">Our commitment to precise tailoring and meticulous attention to detail has defined our
            history. Ever since
            our establishment, our dedication has been to delivering outstanding customer service and superior clothing
            that beyond our clients' expectations.</p>
        </div>
        <div class="col">
          <h3 class="font-content">Office <div class="underline"><span></span></div>
          </h3>
          <p class="font-content">Ano os Building</p>
          <p class="font-content">Caballero St. kingking </p>
          <p class="font-content">Pantukan Davao De Oro</p>
          <p class="email-id font-content">WestTailor@gmail.com</p>
          <h4 class="font-content">+63 9217323399</h4>
        </div>
        <div class="col footer-link">
          <h3 class="font-content">Links <div class="underline" id="under"><span></span></div>
          </h3>
          <ul>
            <li><a href="" class="font-content">Home</a></li>
            <li><a href="" class="font-content">Services/Products</a></li>
            <li><a href="" class="font-content">About Us</a></li>
            <li><a href="" class="font-content">Features</a></li>
            <li><a href="" class="font-content">Contacts</a></li>
          </ul>
        </div>
        <div class="col">
          <h3 class="font-content">Newsletter <div class="underline"><span></span></div>
          </h3>
          <form>
            <i class="fas fa-envelope-square"></i>
            <input type="email" placeholder="Enter your email id" required>
            <button type="submit"><i class="fas fa-arrow-right"></i></button>
          </form>
          <div class="social-icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-whatsapp"></i>
            <i class="fab fa-twitter"></i>

          </div>
        </div>
      </div>
      <hr>
      <p class="copyright font-content">D' New West Tailor © 2024 All Rights Reserved</p>
    </footer>
</body>

</html>
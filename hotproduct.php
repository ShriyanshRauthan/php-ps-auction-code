<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PSAuction</title>

  

  <!-- Jquery Library file -->
  <script src="./js/Jquery3.4.1.min.js"></script>

  <!-- --------- Owl-Carousel js ------------------->
  <script src="./js/owl.carousel.min.js" async></script>

  <!-- ------------ AOS js Library  ------------------------- -->
  <script src="./js/aos.js" async></script>

  <!-- Custom Javascript file -->
  <script src="./js/main.js" async></script>




  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/48aea6decd.js" async crossorigin="anonymous"></script>


  <!-- --------- Owl-Carousel ------------------->
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/owl.theme.default.min.css">

  <!-- ------------ AOS Library ------------------------- -->
  <link rel="stylesheet" href="./css/aos.css">

  <!-- Custom Style   -->
  <link rel="stylesheet" href="./css/hotproduct.css">

</head>

<body>

  <!-- ----------------------------  Navigation ---------------------------------------------- -->

  <nav class="nav">
    <div class="nav-menu flex-row">
      <div class="nav-brand">
        <a href="#" class="text-gray">PS AUCTION</a>
      </div>
      <div class="toggle-collapse">
        <div class="toggle-icons">
          <i class="fas fa-bars"></i>
        </div>
      </div>
      <div>
        <ul class="nav-items">
          <li class="nav-link">
            <a href="index.php">Home</a>
          </li>
          <li class="nav-link">
            <a href="Category.php">Category</a>
          </li>
          <li class="nav-link">
            <a href="#">HOT Product</a>
          </li>
          <li class="nav-link">
            <a href="contactus.php">Contact us</a>
          </li>
          <li class="nav-link">
            <a href="login.php">Login/Signup</a>
          </li>
        </ul>
      </div>
      <div class="social text-gray">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </nav>

  <!-----------x----------  Navigation -----------------x----------------->

  <!---- hotproduct  ---->

  <section>
    <div class="blog">
      <div class="container">
        <p class="head">Today HoT Product</p>
        <div class="owl-carousel owl-theme blog-post">
          <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
            <img src="./assets/bid/nokia-x14-thin-and-light-laptop.jpeg" style="height: 225px;" alt="post-1">
            <div class="blog-title">
              <h3>NOKIA X14 THIN AND LIGHT LAPTOP</h3>
              <span>MRP 27000 </span>
              <button class="btn btn-blog">BID NOW</button>
              <p id="countdown1"></p>

            </div>
          </div>
          <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
            <img src="./assets/bid/laptophp.jpeg" style="height: 225px;" alt="post-2">
            <div class="blog-title">
              <h3>HP LAPTOP</h3>
              <span>MRP 15000 </span>
              <button class="btn btn-blog">BID NOW</button>
              <p id="countdown2"></p>

            </div>
          </div>
          <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
            <img src="./assets/bid/nokia-32-inch-smart-tv.jpeg" style="height: 225px;" alt="post-3">
            <div class="blog-title">
              <h3>NOKIA 32 INCH SMART TV</h3>
              <span>MRP 21000 </span>
              <button class="btn btn-blog">BID NOW</button>
              <p id="countdown3"></p>

            </div>
          </div>
          <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
            <img src="./assets/bid/Microsoft-Xbox-360-4-GB-.jpeg" style="height: 225px;" alt="post-4">
            <div class="blog-title">
              <h3>MICROSOFT XBOX 360 4GB</h3>
              <span>MRP 15000 </span>
              <button class="btn btn-blog">BID NOW</button>
              <p id="countdown4"></p>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--x-- hotproduct  --x-->

  <!-- --------------------------- Footer ---------------------------------------- -->

  <footer class="footer">
    <div class="container">
      <div class="about-us" data-aos="fade-right" data-aos-delay="200">
        <h2>About me</h2>
        <p> Hello,My Name Is Shriyansh .This website is my project of final semester.</p>
      </div>
      <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
        <h2>Newsletter</h2>
        <p>Stay update with our latest</p>
        <div class="form-element">
          <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
        </div>
      </div>
      <div class="rules" data-aos="fade-left" data-aos-delay="200">
        <h2>Rules</h2>
        <div class="termandcondition">
          <a href="termandconditions.html">
            <p>Term and Conditions</p>
          </a>
        </div>


      </div>
      <div class="follow" data-aos="fade-left" data-aos-delay="200">
        <h2>Follow us</h2>
        <p>Let us be Social</p>
        <div>
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-youtube"></i>
        </div>
      </div>
    </div>
    <div class="rights flex-row">
      <h4 class="text-gray">
        Copyright ??2021 All rights reserved | made by
        <a href="#" target="_black">Shriyansh Rauthan
        </a>
      </h4>
    </div>
    <div class="move-up">
      <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
    </div>
  </footer>

  <!-- -------------x------------- Footer -----------------x----------------- -->
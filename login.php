<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

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
  <script src="https://kit.fontawesome.com/48aea6decd.js" crossorigin="anonymous"></script>

  <!-- --------- Owl-Carousel ------------------->
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/owl.theme.default.min.css">

  <!-- ------------ AOS Library ------------------------- -->
  <link rel="stylesheet" href="./css/aos.css">

  <!-- Custom Style   -->
  <link rel="stylesheet" href="./css/loginstyle.css">

</head>

<body>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
  $email =  $_POST['email'];
  $password =  $_POST['password'];

  $email_search = "select * from users where email='$email' ";
  $query =mysqli_query($con, $email_search);

  $email_count = mysqli_num_rows($query);

  if($email_count)
  {
    $email_pass = mysqli_fetch_assoc($query);
    $db_pass = $email_pass['password'];
    $pass_decode = password_verify($password, $db_pass);
    if($pass_decode)
    {
      ?>
      <script>
      alert("login successful");
      </script>
      <?php
      ?>
      <script>
      location.replace("index.php");
      </script>
      <?php
    }
    else {
      echo "password Incorrect";
    }
  }
    else {
      echo "Invalid email";
    }
}
?>
  <!------------------------------  Navigation ----------------------------------------------->

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
            <a href="hotproduct.php">HOT Product</a>
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

  <!-- ------------x---------------  Navigation --------------------------x------------------- -->

  <div class="space">
    <div class="center">
      <h1>Login</h1>
      <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>

        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
      </form>
    </div>
  </div>

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
        Copyright ©2021 All rights reserved | made by
        <a href="#" target="_black">Shriyansh Rauthan
        </a>
      </h4>
    </div>
    <div class="move-up">
      <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
    </div>
  </footer>

  <!-- -------------x------------- Footer --------------------x------------------- -->


</body>
</html>
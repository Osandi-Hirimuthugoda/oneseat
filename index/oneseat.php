<?php session_start() ?>

<!DOCTYPE html>
<html>

<head>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="oneseat.css">
  <title>oneseat-home page</title>
</head>

<body>
  <div class="logo">
    <a href="">
      <img src="../images/Logo.png" alt="logo" width="125px " height="50px">
    </a>
  </div>
  <div class="topnav">
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Categories</a>
        <ul id="submenu">
          <li><a href="../catergories/dining.php">DINING</a></li>
          <li><a href="../catergories/living.php">LIVING</a></li>
          <li><a href="../catergories/bedroom.php">BEDROOM</a></li>
        </ul>
      </li>

      <li><a href="../about-us/about_us.php">About</a></li>
      <li><a href="#contact" onclick="scrollToFooter()">Contact</a></li>
    </ul>
    <div class="split" style="padding-right: 20px;">
      <a href="#">
        <img src="../images/login.png" alt="login" width="35px" height="35px" style="margin-right: 10px;">
      </a>
      <a href="../shoping_cart/cart.php">
        <img src="../images/Cart (1).png" alt="cart" width="35px" height="35px" style="padding-top: 0px;">
      </a>
    </div>
  </div>
  <?php 
    if(isset($_SESSION['status'])) {
  ?>
    <div class="alert alert-success"> 
      <b><?php echo $_SESSION['status'] ?></b>
    </div>
  <?php
    unset($_SESSION['status']);
    }
  ?>
  
  
  <div class="top">
    <img src="../images/top.jpg" alt="image" width="1500px" height="400px">
    <div class="toptext">BUY YOUR <br> DREAM FURNITURE</div>
    <div class="search">
      <form action="#">
        <input type="text" placeholder="What are you looking for?" name="search">
        <button>
          <img src="../images/Search.png" width="20px" height="20px" style="border-radius: 50%;">
          <i class="fa fa-search" style="font-size: 20px; font-family: 'poppins';"></i>
        </button>
      </form>
    </div>
    <div class="shopnow">
      <a href="">Shop Now <img src="bag-removebg-preview.png" width="20px" height="20px" style="margin-top: 5px;"></a>
    </div>

  </div>

  <div class="categorytext" style="padding: 5px;">
    <h2>Categories</h2>
    <h6>Find what you are looking for...</h6>
  </div>

  <section class="categories">
    <div class="container">

      <div class="category-list">
        <div class="category">
          <a href="../catergories/dining.php"><img src="../images/dining.jpg" alt="Dining" width="300px" height="300px">
            <h3>Dining</h3>
          </a>

        </div>
        <div class="category">
          <a href="../catergories/living.php"><img src="../images/living.jpg" alt="Living" width="300px" height="300px">
            <h3>Living</h3>
          </a>

        </div>
        <div class="category">
          <a href="../catergories/bedroom.php"><img src="../images/bedroom.jpg" alt="Bedroom" width="300px"
              height="300px">
            <h3>Bedroom</h3>
          </a>

        </div>
      </div>
      <button class="explore">Explore -></button>
    </div>
  </section>

  <div class="aboutustext">
    <h2>About Us</h2>
    <h5 style="opacity: 50%;">Order now and experience the stylishness of our furniture</h5>
  </div>

  <section class="aboutus">
    <div class="features">
      <div class="feature" style="font-family: 'poppins';">
        <img src="../images/assortment.png">
        <h3>Large Assortment</h3>
        <p>we offer many different types of products with fewer variations in each category.</p>
      </div>
      <div class="feature" style="font-family: 'poppins';">
        <img src="../images/shipping.png">
        <h3>Fast & Free Shipping</h3>
        <p>4-day or less delivery time, free shipping and an expedited delivery option.</p>
      </div>
      <div class="feature" style="font-family: 'poppins';">
        <img src="../images/service.png">
        <h3>24/7 Support</h3>
        <p>answers to any business related inquiry 24/7 and in real-time.</p>
      </div>
  </section>

  <footer class="footer">

    <div class="details">
      <div class="shopname" style="font-family: 'poppins';">
        <h2>OneSeat</h2>
        <h6 style="opacity: 50%;">Mahenwatta, Pitipana, Homagama,<br> Sri Lanka</h6><br><br><br><br>
        <h5>2024 OneSeat. All right reserved</h5>
      </div>
      <div class="links" style="font-family: 'poppins';">
        <h3>Links</h3><br>
        <a href="">Home</a><br><br>
        <a href="">Categories</a><br><br>
        <a href="">About</a><br><br>
        <a href="">Contact</a><br><br>
      </div>
      <div class="links" style="font-family: 'poppins';">
        <h3>Help</h3><br>
        <a href="">Payment Options</a><br><br>
        <a href="">Returns</a><br><br>
        <a href="">Privacy Policies</a><br><br>
      </div>
      <div class="links" style="font-family: 'poppins';">
        <h3>Contact Us</h3><br>
        <a href=""><img src="../images/fb.png" alt="facebook" style="margin: 10px;"></a>
        <a href=""><img src="../images/insta.png" alt="instagram" style="margin: 10px;"></a>
        <a href=""><img src="../images/twitter.png" alt="twitter" style="margin: 10px;"></a>
      </div>
    </div>

  </footer>
  <script>
    function scrollToFooter() {
      document
        .getElementById("footer")
        .scrollIntoView({ behavior: "smooth" });
    }
  </script>
</body>

</html>
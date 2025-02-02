<!DOCTYPE html>
<html>
  <head>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="about_us.css" />
    <title>OneSeat - About Us</title>
  </head>
  <body>
    <!-- Header -->
    <div class="logo">
      <a href="">
        <img src="Logo.png" alt="logo" width="125px" height="50px" />
      </a>
    </div>
    <div class="topnav">
      <ul>
        <li><a href="../index/oneseat.php">Home</a></li>
        <li>
          <a href="../index/oneseat.php">Categories</a>
          <ul id="submenu">
            <li><a href="../catergories/dining.php">DINING</a></li>
            <li><a href="../catergories/living.php">LIVING</a></li>
            <li><a href="../catergories/bedroom.php">BEDROOM</a></li>
          </ul>
        </li>

        <li><a href="">About</a></li>
        <li><a href="#contact" onclick="scrollToFooter()">Contact</a></li>
      </ul>
      <div class="split" style="padding-right: 20px">
        <a href="">
          <img
            src="login.png"
            alt="login"
            width="35px"
            height="35px"
            style="margin-right: 10px"
          />
        </a>
        <a href="../shoping_cart/cart.php">
          <img
            src="Cart (1).png"
            alt="cart"
            width="35px"
            height="35px"
            style="padding-top: 0px"
          />
        </a>
      </div>
    </div>

    <!-- About Us Section -->
    <section class="about-section">
      <div class="container">
        <h1>About Us</h1>
        <p>
          Welcome to OneSeat, your one-stop destination for premium furniture.
          At OneSeat, we believe that furniture is not just about utility, but
          also about aesthetics, comfort, and creating spaces that feel like
          home. Our mission is to offer high-quality, stylish, and functional
          furniture that meets the diverse needs of our customers.
        </p>
        <p>
          Our journey began with a simple idea: to provide furniture that is
          both beautiful and affordable. We source our products from trusted
          manufacturers and ensure that every piece meets our high standards of
          quality and design. Whether you are looking to furnish your living
          room, bedroom, or office, we have something for everyone.
        </p>
        <p>
          At OneSeat, customer satisfaction is our top priority. We are
          committed to providing excellent customer service, from helping you
          choose the right furniture to ensuring a smooth delivery process. Our
          team is always here to assist you with any questions or concerns you
          may have.
        </p>
        <p>
          Thank you for choosing OneSeat. We look forward to helping you create
          a space that you love.
        </p>
      </div>
    </section>

    <!-- Footer -->
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

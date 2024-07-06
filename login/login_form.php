<!DOCTYPE html>
<html>

<head>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="login.css">
  <title>oneseat</title>
</head>

<body>
  <!-- Header -->
  <div class="logo">
    <a href="">
      <img src="Logo.png" alt="logo" width="125px" height="50px">
    </a>
  </div>
  <div class="topnav">
    <a href="#home">Home</a>
    <a href="#categories">Categories</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
    <div class="split" style="padding-right: 20px;">
      <a href="">
        <img src="login.png" alt="login" width="35px" height="35px" style="margin-right: 10px;">
      </a>
      <a href="">
        <img src="Cart (1).png" alt="cart" width="35px" height="35px" style="padding-top: 0px;">
      </a>
    </div>
  </div>
  <main>
    <h1>Login</h1>
    <form action="login.php" method="post">
      <input type="email" placeholder="Email" required name="email">
      <input type="password" placeholder="Password" required name="password">
      <a href="#">Forgotten your Password?</a>
      <button type="submit">Sign in</button>
    </form>
  </main>
  <!-- footer -->
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
        <a href=""><img src="fb.png" alt="facebook" style="margin: 10px;"></a>
        <a href=""><img src="insta.png" alt="instagram" style="margin: 10px;"></a>
        <a href=""><img src="twitter.png" alt="twitter" style="margin: 10px;"></a>
      </div>
    </div>
  </footer>
</body>

</html>
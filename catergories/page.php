<?php
session_start();
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oneseat"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch product ID from URL

$product_id = $_GET['id'];

// SQL query to fetch product details by product ID
$sql = "SELECT product_name, product_price, product_image, category, product_quantity,description FROM product WHERE product_id = '$product_id'";

$result = $conn->query($sql);

$product = null;

if ($result->num_rows > 0) {
  $product = $result->fetch_assoc();
} else {
  echo "Product not found.";
}

$available_qty = $product["product_quantity"];


$conn->close();
?>

<html>

<head>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="product.css">
  <title>oneseat</title>
</head>

<body>
  <!-- Header -->
  <div class="logo">
    <a href="#">
      <img src="../images/Logo.png" alt="logo" width="125px" height="50px">
    </a>
  </div>
  <div class="topnav">
    <ul>
      <li><a href="../index/oneseat.php">Home</a></li>
      <li><a href="../index/oneseat.php">Categories</a>
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
  <div class="product-container">
    <div class="product-image">
      <img src="data:image/jpeg;base64,<?php echo base64_encode($product['product_image']); ?>" alt="Double Divan Sofa"
        width="400px">
    </div>
    <div class="product-details">
      <div class="product-title"><?php echo htmlspecialchars($product['product_name']); ?></div>
      <div class="product-price">Rs.<?php echo $product['product_price']; ?></div>

      <?php echo $product['description']; ?>
      <br>
      <br>

      <?php
      if ($available_qty > 0) {
        ?>
        <div class="in-stock">In stock</div>
        <?php
      } else {

        ?>
        <div class="out-of-stock">Out of stock</div>
        <?php
      }
      ?>
      <form method="post" action="add-to-cart.php">
        <input type="number" class="quantity" value="1" min="1" name="quantity">
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <input type="hidden" name="product_price" value="<?php echo $product['product_price']; ?>">
        <input type="submit" class="add-to-cart" value="Add to Cart">
      </form>
    </div>
  </div>
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
        <a href=""><img src="../images/fb.png" alt="facebook" style="margin: 10px;"></a>
        <a href=""><img src="../images/insta.png" alt="instagram" style="margin: 10px;"></a>
        <a href=""><img src="../images/twitter.png" alt="twitter" style="margin: 10px;"></a>
      </div>
    </div>
  </footer>
</body>

</html>
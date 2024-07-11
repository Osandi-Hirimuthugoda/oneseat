<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oneseat"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//$user_id = $_SESSION['user_id']; // Example: assuming user ID is stored in session
$user_id = 2;

$sql = "SELECT * FROM cart WHERE user_id = '$user_id' AND cart_status = 'active'";
$result = $conn->query($sql);
$sql = "SELECT * FROM cart WHERE user_id = '$user_id' AND cart_status = 'active'";
$result = $conn->query($sql);

$cart_items = [];
$total_price = 0.0;
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $product_ids = explode(',', $row['product_ids']);
  $quantities = explode(',', $row['quantities']);

  for ($i = 0; $i < count($product_ids); $i++) {
    $product_id = intval($product_ids[$i]);
    $quantity = intval($quantities[$i]);

    $product_sql = "SELECT * FROM product WHERE product_id = $product_id";
    $product_result = $conn->query($product_sql);

    if ($product_result->num_rows > 0) {
      $product = $product_result->fetch_assoc();
      $product['quantity'] = $quantity;
      $product['total_price'] = $product['product_price'] * $quantity;
      $total_price += $product['total_price'];
      $cart_items[] = $product;
    }
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="cart.css">
</head>

<body>
  <!-- Header -->
  <div class="logo">
    <a href="">
      <img src="Logo.png" alt="logo" width="125px" height="50px">
    </a>
  </div>
  <div class="topnav">
    <ul>
      <li><a href="../index/oneseat.php">Home</a></li>
      <li><a href="../index/oneseat.php">Categories</a>
        <ul id="submenu">
          <li><a href="../Categories/dining.php">DINING</a></li>
          <li><a href="../Categories/living.php">LIVING</a></li>
          <li><a href="../Categories/bedroom.php">BEDROOM</a></li>
        </ul>
      </li>

      <li><a href="../about-us/about_us.html">About</a></li>
      <li><a href="#contact" onclick="scrollToFooter()">Contact</a></li>
    </ul>
    <div class="split" style="padding-right: 20px;">
      <a href="#">
        <img src="login.png" alt="login" width="35px" height="35px" style="margin-right: 10px;">
      </a>
      <a href="">
        <img src="Cart (1).png" alt="cart" width="35px" height="35px" style="padding-top: 0px;">
      </a>
    </div>
  </div>

  <!-- cart -->
  <div class="container">
    <div class="shopping-cart">
      <a href="#" class="continue-shopping">← Continue Shopping</a>
      <h2>Shopping cart</h2>
      <p>You have <?php echo count($cart_items); ?> items in your cart</p>
      <div class="sort-by">Sort by: <span>price</span></div>
      <div class="cart-items">
        <?php foreach ($cart_items as $item): ?>
          <div class="cart-item">
            <!-- Header Row -->
            <div class="cart-header">
              <div class="item-header">Purchased Item</div>
              <div class="quantity-header">Quantity</div>
              <div class="price-header">Price</div>
            </div>
            <!-- Purchased Item 1 -->
            <img src="data:image/jpeg;base64,<?php echo base64_encode($item['product_image']); ?>"
              alt="<?php echo $item['product_name']; ?>">
            <div class="item-details">
              <p><b><?php echo $item['product_name']; ?></b></p>
              <!-- <p><?php echo $item['description']; ?></p> -->
            </div>
            <div class="item-quantity"><?php echo $item['quantity']; ?></div>
            <div class="item-price">Rs <?php echo number_format($item['product_price'], 2); ?></div>
            <div class="item-total-price"> Rs <?php echo number_format($item['total_price'], 2); ?></div>
            <form method="post" action="delete_item.php">
              <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
              <input type="hidden" name="quantity" value="<?php echo $item['quantity']; ?>">
              <button type="submit" class="delete-item">🗑️</button>
            </form>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="card-details">
      <form action="../checkout/checkOut.php" method="post">
        <div class="summary">
          <p>Subtotal: <span><?php echo number_format($total_price, 2); ?></span></p>
          <p>Shipping: <span>free shipping</span></p>
          <p>Total(Incl. taxes): <span><?php echo number_format($total_price, 2); ?></span></p>
        </div>
        <input type="hidden" name="total" value="<?php echo number_format($total_price, 2); ?>">
        <input class="checkout" type="submit" value="Checkout">
      </form>
    </div>
  </div>

  <!-- footer -->
  <footer id="footer" class="footer">
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
  <script>
    function scrollToFooter() {
      document.getElementById('footer').scrollIntoView({ behavior: 'smooth' });
    }
  </script>
</body>

</html>
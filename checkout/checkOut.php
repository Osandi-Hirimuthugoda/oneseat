<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - OneSeat</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="web group.css">
</head>

<body>
    
    <div class="logo">
        <a href="#">
            <img src="Logo.png" alt="logo" width="125px" height="50px">
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
                        <li><a href="../about-us/about_us.html">About</a></li>
                        <li><a href="#contact" onclick="scrollToFooter()">Contact</a></li>
                    </ul>
                    <div class="split" style="padding-right: 35px;">
                        <a href=""> 
                            <img src="login.png" alt="login" width="35px" height="35px" style="margin-right: 10px;">
                        </a>
                        <a href="#">
                            <img src="Cart (1).png" alt="cart" width="35px" height="35px" style="padding-top: 0px;">
                        </a>
            </nav>
        </div>
        
    <main>
        <div class="top">
            <img src="top.jpg" alt="image" width="1200px" height="400px">
            <div class="toptext"> Checkout </div>
            </section>
            <section class="checkout-form">
                <div class="container">

                    <div class="billing-details">
                        <h3>Billing details</h3>
                        <form action="#" method="POST">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first-name" required>

                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last-name" required>

                            <label for="company-name">Company Name (Optional)</label>
                            <input type="text" id="company-name" name="company-name">

                            <label for="country">Country / Region</label>
                            <select id="country" name="country">
                                <option value="select">-Select-</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Other">Other</option>
                            </select>

                            <label for="street-address">Street address</label>
                            <input type="text" id="street-address" name="street-address" required>

                            <label for="town-city">Town / City</label>
                            <input type="text" id="town-city" name="town-city" required>

                            <label for="province">Province</label>
                            <select id="province" name="province">
                                <option value="-Select-">-Select-</option>
                                <option value="Western Province">Western Province</option>
                                <option value="Central Province">Central Province</option>
                                <option value="Eastern Province">Eastern Province</option>
                                <option value="North Central Province">North Central Province</option>
                                <option value="Northern Province">Northern Province</option>
                                <option value="North Western Province">North Western Province</option>
                                <option value="Southern Province">Southern Province</option>
                                <option value="Uva Province">Uva Province</option>
                                <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                            </select>

                            <label for="zip-code">ZIP code</label>
                            <input type="text" id="zip-code" name="zip-code" required>

                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" required>

                            <label for="email">Email address</label>
                            <input type="email" id="email" name="email" required>

                            <label for="additional-info">Additional information</label>
                            <textarea id="additional-info" name="additional-info"></textarea>
                        </form>
                    </div>
                    <div class="order-details">
                        <h3>Product</h3>
                        <ul class="order-summary">
                            <li>
                                <span>DOMEX - DINING SET</span>
                                <span>Rs. 368,800.00</span>
                            </li>
                            <li>
                                <span>Subtotal</span>
                                <span>Rs. 368,800.00</span>
                            </li>
                            <li class="total">
                                <span>Total</span>
                                <span>Rs. 368,800.00</span>
                            </li>
                        </ul>
                        <div class="payment-method">
                            <h3>Payment Method</h3>
                            <input type="radio" id="bank-transfer" name="payment-method" value="bank-transfer" checked>
                            <label for="bank-transfer">Direct Bank Transfer</label>
                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment
                                reference. Your order will not be shipped until the funds have cleared in our account.
                            </p>

                            <input type="radio" id="cash-on-delivery" name="payment-method" value="cash-on-delivery">
                            <label for="cash-on-delivery">Cash On Delivery</label>
                            <br>
                        </div>
                        <button type="submit" class="place-order">Place order</button>
                    </div>
                </div>
            </section>
    </main>
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

<script src="web group.js"></script>
</body>

</html>
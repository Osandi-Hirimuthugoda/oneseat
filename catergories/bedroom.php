<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneSeat - Bedroom</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="bedroom.css">
</head>

<body>
    <div class="logo">
        <a href="#">
            <img src="../images/Logo.png" alt="logo" width="125px" height="50px">
        </a>
    </div>
    <div class="topnav">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#categories">Categories</a>
                <ul id="submenu">
                    <li><a href="dining.php">DINING</a></li>
                    <li><a href="living.php">LIVING</a></li>
                    <li><a href="">BEDROOM</a></li>
                </ul>
            </li>

            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="split" style="padding-right: 20px;">
            <a href="#">
                <img src="../images/login.png" alt="login" width="35px" height="35px" style="margin-right: 10px;">
            </a>
            <a href="#">
                <img src="../images/Cart (1).png" alt="cart" width="35px" height="35px" style="padding-top: 0px;">
            </a>
        </div>
    </div>
    <div class="top">
        <img src="../images/top.jpg" alt="image" width="1500px" height="400px">
        <div class="toptext">BEDROOM</div>
    </div>

    <main>
        <section class="products">
            <div class="filter-sort">
                <div class="filter">
                    <button>Filter</button>
                </div>
                <div class="sort">
                    <span>Show</span>
                    <select>
                        <option value="3">3</option>
                        <option value="6">6</option>
                        <option value="9">9</option>
                    </select>
                    <span>Short by</span>
                    <select>
                        <option value="default">Default</option>
                        <option value="price">Price</option>
                        <option value="name">Name</option>
                    </select>
                </div>
            </div>
            <div class="product-list">
                <div class="product">
                    <img src="../images/bedroom/bedroom1.jpg" alt="Linda Bedroom Suit">
                    <h2>Linda Bedroom Suit</h2>
                    <p>Rs.523,200.00</p>
                </div>
                <div class="product">
                    <img src="../images/bedroom/bedroom2.jpg" alt="Elisa Bedroom Suit">
                    <h2>Elisa Bedroom Suit</h2>
                    <p>Rs.380,800.00</p>
                </div>
                <div class="product">
                    <img src="../images/bedroom/bedroom3.jpg" alt="Simla Bedroom Suites">
                    <h2>Simla Bedroom Suites</h2>
                    <p>Rs.298,700.00</p>
                </div>
            </div>
        </section>
    </main>

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneSeat - LivingRoom</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="living.css">
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
                    <li><a href="#Dining">DINING</a></li>
                    <li><a href="#living">LIVING</a></li>
                    <li><a href="#bedroom">BEDROOM</a></li>
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
        <div class="toptext">LIVING ROOM</div>
    </div>

    <main>
        <section class="hero">
            <h1>Living</h1>
        </section>
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
                    <img src="../images/living/living1.jpg" alt="SOFA PLAMIO">
                    <h2>SOFA PLAMIO</h2>
                    <p>Rs.206,800.00</p>
                </div>
                <div class="product">
                    <img src="../images/living/living2.jpg" alt="SOFA LOREN| FABRIC">
                    <h2>SOFA LOREN| FABRIC</h2>
                    <p>Rs.246,600.00</p>
                </div>
                <div class="product">
                    <img src="../images/living/living3.jpg" alt="L SOFA RIPON | FABRIC">
                    <h2>L SOFA RIPON | FABRIC</h2>
                    <p>Rs.302,900.00</p>
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
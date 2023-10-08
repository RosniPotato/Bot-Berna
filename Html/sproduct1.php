<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bot-Berna</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https//pro.fontawesome.com/to/font-awesome/css/font-awesome.min.css"> -->
</head>

<body>
    <section id="header">
        <a href="# "> <img src="Asset/Nav-logo.png" class="logo " height="80pt "></a>

        <div> 
            <ul id="navbar">
                <li> <a href=" index.php ">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="Info.php ">Plant Care</a></li>
                <li><a class="active " href="shop.php ">Shop</a></li>

                <li>
                    <a href="cart.php "><img src="Asset/bag.png " alt=" " height="29pt "></a>
                </li>
            </ul>
        </div>
    </section>
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="Asset/money-plant.jpg" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="Asset/money plant2.png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="Asset/money plant3.png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="Asset/money-plant.jpg" width="100%" class="small-img" alt="">
                </div>

            </div>
        </div>
        <div class="single-pro-details">
            <h6>Home/Money Plant</h6>
            <h4>Money PLant</h4>
            <h2>Rs.250</h2>
            <input type="number" value="1">
            <button class="normal">Add to cart</button>
            <h4>Product Details</h4>
            <span><strong>DESCRIPTION</strong><br>
              Money plants are kept in houses as they are believed to bring good wealth to the home. They are also a low-maintenance plant and can thrive for a really long period compared to the other green plants. Not just money plants look good but they also spread positivity at a place. People plant this money attracting plants indoors and outdoors in their balconies, front yards, verandahs, terraces, kitchen and even money plant at home.
              This aesthetically good looking plant does not only hold one single name but is known by different names like Saba Nut and Malabar Chestnut. Also, Money plants are self-seeding plants that normally grow in the form of a biennial.
              <br><br>
              <strong>PLANT CARE</strong> <br>
              <strong>Light:</strong> Money Tree prefers indirect bright light, and can adjust to lower light. Too much direct light will scorch the leaves, but too little light will cause slow growth and yellow leaves. Rotate your plant monthly to keep growth even. If you are worried you don’t have a spot with enough light, try a grow light.
              <br>
              <strong>Water:</strong> Water your Money Tree when the soil volume is 50-75% dry. Always check the soil moisture before watering. Water thoroughly until you see water flow out of the drainage hole and discard any excess water in the saucer.
              <br>
              <strong>Humidity:</strong> Your Money Tree does well in average household humidity. However, if the air is very dry it will appreciate the occasional humidity boost.
              <br>
              <strong>Food:</strong> Feed once a month in the spring and summer when it is producing new leaves with a general-purpose fertilizer at half strength. Always make sure the soil is damp before applying any fertilizer.
              <br>
              <strong>Temperature :</strong> Money Tree is most comfortable in temperatures between 18-27°C</span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Product</h2>
        <p>Home Green Plants</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct1.php';">
                <img src="Asset/money-plant.jpg" alt=" ">
                <div class="des">
                    <span>Money Plant</span>
                    <h5>Money Plants</h5>

                    <h4>Rs 250</h4>
                </div>
                <a href="#"><img class="cart" src="Asset/cart.png " alt=" "></a>
            </div>


            <div class="pro">
                <img src="Asset/Product/Rose/28937.png" alt=" ">
                <div class="des">
                    <span>Plant</span>
                    <h5>Rose</h5>

                    <h4>Rs 250</h4>
                </div>
                <a href="#"><img class="cart" src="Asset/cart.png " alt=" "></a>
            </div>

            <div class="pro">
                <img src="Asset/Product/SunFlower/Hb418e34dfdca4941ac6145ea3bb813e3A1.png" alt=" ">
                <div class="des">
                    <span>Seed</span>
                    <h5>Sunflower</h5>

                    <h4>Rs 250</h4>
                </div>
                <a href="#"><img class="cart" src="Asset/cart.png" alt=" "></a>
            </div>
            <div class="pro">
                <img src="Asset/money-plant.jpg" alt=" ">
                <div class="des">
                    <span>Money Plant</span>
                    <h5>Money Plants</h5>

                    <h4>Rs 250</h4>
                </div>
                <a href="#"><img class="cart" src="Asset/cart.png " alt=" "></a>
            </div>
        </div>

    </section>
    <footer class=" section-p1 ">
        <div class="col ">
            <img class="logo " src="Asset/Main logo.png " height="70pt " alt=" ">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Lamachaur, Pokhara, Nepal</p>
            <p><strong>Phone:</strong></p>
            <p><strong>Hours:</strong> 10:00-18:00, Sun-Mon</p>
            <div class="follow ">
                <h4>Follow us</h4>
                <div class="icon ">
                    <i class="fab fa-facebook-f "></i>
                </div>
            </div>
        </div>
        <div class="col ">
            <h4>About</h4>
            <a href="# ">Delivery Information</a>
            <a href="# ">Privacy</a>
            <a href="# ">Terms & Conditions</a>
            <a href="# ">Contact us</a>
        </div>
        <div class="col ">
            <h4>My Account</h4>
            <a href="# ">Sign in</a>
            <a href="# ">View Cart</a>
            <a href="# ">Help</a>
        </div>
        <div class="copyright ">
            <p>2023,Bot-Berna</p>
        </div>


    </footer>
    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementByClassName("small-img");
        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
                MainImg.src = smallimg[2].src;
            }
            // smallimg[3].onclick = function() {
            //     MainImg.src = smallimg[3].src;
            // }
    </script>
    <script src=" /javascript / script.js ">
    </script>
</body>

</html>
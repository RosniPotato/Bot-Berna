<?php require('connection.php'); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bot-Berna</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="login_style.css"> -->
    <!-- <link rel="stylesheet" href="https//pro.fontawesome.com/to/font-awesome/css/font-awesome.min.css"> -->
</head>

<body>
    <section id="header">
        <a href="# "> <img src="Asset/Nav-logo.png" class="logo " height="80pt "></a>

        <div> 
            <ul id="navbar">
                <li> <a class="active" href="/Html/index.php ">Home</a></li>
                <li><a href="about.php ">About us</a></li>
                <li><a href="Info.php ">Plant Care</a></li>
                <li><a href="shop.php ">Shop</a></li>
                <li>
                    <a href="cart.php "><img src="Asset/bag.png " alt=" " height="29pt "></a>
                </li>
                <div id="mini_header">
                <?php
              if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] ==true)
              {
                echo"
                <div class='user'>
                $_SESSION[username] - <a href='logout.php'>Logout</a>
              </div>
              ";
              } 
              else
              echo"
                <div class='sign-in-up'>
                <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
                <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
              </div>
              ";
              ?>
                </div>
            </ul>
        </div>
          
    </section>
   
    <div class="popup-container" id="login-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER LOGIN</span>
          <button type="reset" onclick="popup('login-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="login-btn" name="login">LOGIN</button>
      </form>
    </div>
  </div>

  <div class="popup-container" id="register-popup">
    <div class="register popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER REGISTER</span>
          <button type="reset" onclick="popup('register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="register-btn" name="register">REGISTER</button>
      </form>
    </div>
  </div>

<!-- <?php
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
  {
    echo"<h1 style='text-align=center; margin-top:200px;'>WELCOME TO THIS WEBSITE - $_SESSION[username]</h1> ";
  }
?> -->

  <script>
    function popup(popup_name)
    {
      get_popup=document.getElementById(popup_name);
      if(get_popup.style.display=="flex")
      {
        get_popup.style.display="none";
      }
      else
      {
        get_popup.style.display="flex";
      }
    }
  </script>

    <section id="hero" class="section-p1">
        
        <div>
        <h4>Live-like-Green</h4>
        <h2>Buy green plants</h2>
        <h1>Make home more lively</h1>
        <p>Buy 10 Plants & get 2 free!</p>
        <button>Shop Now</button>
        </div>
        <!-- <img src="Asset/group22.png" alt="" > -->
    </section>
    <section id="feature" class="section-p1">
        <div class="fe-box">
           
            <img src="Asset/delivery.jpg" height="120px" alt="Delivery">
            <h6>Free Delivery</h6>
        </div>
        <div class="fe-box">
            <img src="Asset/Feature/life_style_working_51.jpg" height="120px" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="Asset/Feature/istockphoto-1210501575-612x612.jpg" height="120px" alt="">
            <h6>24/7 Service</h6>
        </div>
        <div class="fe-box">
            <img src="Asset/Feature/Tiny women growing and watering potted plant.jpg" height="120px" alt="">
            <h6>Plant Care</h6>
        </div>
        <div class="fe-box">
            <img src="Asset/Feature/Wavy_Bus-16_Single-03.jpg" height="120px" alt="">
            <h6>Special Offer</h6>
        </div>

    </section>

    <section id="banner" class="section-m1">
        <h4>Heavy Offer</h4>
        <h2>Get 3<span>plant Free</span> -Any Purchase upto Rs1000</h2>
        <botton class="normal">Explore More</botton>
    </section>
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="Asset/Main logo.png" height="70pt" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Lamachaur, Pokhara, Nepal</p>
            <p><strong>Phone:</strong></p>
            <p><strong>Hours:</strong> 10:00-18:00, Sun-Mon</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign in</a>
            <a href="#">View Cart</a>
            <a href="#">Help</a>
        </div>
        <div class="copyright">
            <p>2023,Bot-Berna</p>
        </div>
    </footer>
    <script src=" /javascript/script.js ">
    </script>
</body>


</html>
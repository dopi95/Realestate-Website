<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
<link rel="stylesheet" href="css/footer.css">
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper js -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="css/style.css" />
     <script src="js/login.js" defer></script>
    <title>Gift Realestate</title>
  </head>
  <body>

    <!-- Header -->
     <header class="header" id="header">
      <div class="navigation">
        <div class="nav-center container d-flex">
          <a href="/" class="logo"
            ><img
              src="Assets/Glogo.png"
              alt=""
              class="logo"
              height="120px" width="120px"
          /></a>

          <ul class="nav-list d-flex">
            <li class="nav-item">
              <a href="#" class="nav-link home">Home</a>
            </li>
            <li class="nav-item">
              <a href="buy.php" class="nav-link">Buy</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
            </li>
          </ul>
          <?php
            // Check if 'userId' and 'userEmail' are set in the session
            
            if (!isset($_SESSION['customerId']) || !isset($_SESSION['userEmail'])) {
                ?>
                <div class="flex">
                    <a href="php/login.php"><button class="button" id="loginbtn">Login</button></a>
                    <a href="php/userregistration.php"><button class="button" id="loginbtn">Signup</button></a>
                </div>
                <?php
            } else {
                // Logout button
                ?>
                <a href="middleware/userlogout.php"><button class="button" id="loginbtn">Logout</button></a>
                <?php
            }
            ?>
          <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
          </div>
        </div>
      </div>

      <div class="hero">
        <div class="swiper-container heroslider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="Assets/1.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="Assets/2.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="Assets/q3.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="Assets/e4.jpg" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="Assets/e5.jpg" alt="" />
            </div>
          </div>
          <div class="swiper-button-next">
            <i class="bx bx-chevron-right swiper-icon"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="bx bx-chevron-left swiper-icon"></i>
          </div>
        </div>
      </div>

      <div class="content">
        <h1>Find your dream home</h1>
        <div class="search">
          <input type="text" placeholder="what you are looking for?" />
          <a href="">Search</a>
        </div>

      </div>
    </header>
    

    <section class="section rent">
      <div class="title">
        <h1>Properties For Rent</h1>
        <p class="rep">
          Search over 200 properties to rent from the top agents in the country
        </p>
      </div>
      <div class="rent-center container">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="Assets/lev1.jpg" alt="" />
            </div>
            <div class="pos">
              <span>RENT</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in Addis</p>
            <div>
              <span>40,000birr monthly</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="Assets/lev2.jpg" alt="" />
            </div>
            <div class="pos">
              <span>RENT</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in Addis</p>
            <div>
              <span>55,000birr monthly</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="Assets/lev3.jpg" alt="" />
            </div>
            <div class="pos">
              <span>RENT</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in las Addis</p>
            <div>
              <span>46,000birr monthly</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="Assets/lev4.jpg" alt="" />
            </div>
            <div class="pos">
              <span>RENT</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in Addis</p>
            <div>
              <span>60,0000birr monthly</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="Assets/lev5.jpg" alt="" />
            </div>
            <div class="pos">
              <span>RENT</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in Addis</p>
            <div>
              <span>36,0000birr monthly</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="Assets/lev6.jpg" alt="" />
            </div>
            <div class="pos">
              <span>RENT</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in Addis</p>
            <div>
              <span>57,000birr monthly</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="Assets/lev7.jpg" alt="" />
            </div>
            <div class="pos">
              <span>RENT</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in Addis</p>
            <div>
              <span>48,000birr monthly</span>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="Assets/lev8.jpg" alt="" />
            </div>
            <div class="pos">
              <span>RENT</span>
            </div>
          </div>
          <div class="bottom">
            <p>Luxury villa in Addis</p>
            <div>
              <span>36,000birr monthly</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section contact">
      <div class="row">
        <div class="col">
          <img src="Assets/lo.png" alt="" width="150px" height="150px" />
          <h1 style="color: #222;">WE BUILD COMMUNITY</h1>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <section class="fle">
        <div class="row-1">
          <h4>Head Office</h4>
            <i class="fa-solid fa-location-dot"></i>
            <a>Bahr Building,Olompia Next to New York Cafe,Addis Ababa</a>
            <br>
            <i class="fa-solid fa-phone"></i>
            <a href="#">+251-114-65-55-80</a>
            <br>
            <i class="fa-solid fa-blender-phone"></i>
            <a href="#">+251-114-65-55-80</a>
            <br>
            <i class="fa-solid fa-envelope"></i>
            <a href=#">info@giftrealestate.com.et</a>
        </div>
        <div class="row2">
          <h4>Links</h4>
          <a href="about.html">About Us</a> <br>
          <a href="contact.html">contact</a> <br>
          <a href="">Customer Service</a> <br>

        </div>
        <div class="row3">
          <h4>Social Medias</h4>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-youtube"></i>
        </div>
      </section>
      <div class="bo"></div>
      <div class="copy">
        <p class="p1">&copy;2023-Gift Real Estate Plc</p>
        <p>All right reserved</p>
      </div>
      
    </footer>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/slider.js"></script>
  </body>
</html>


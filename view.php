<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/view.css" />
<link rel="stylesheet" href="css/footer.css">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Detail</title>
  </head>
  <body>


    <head class="header">
      <div class="lists">
        <div class="logo"> 
          <img src="Assets/lo.png" alt="" width="85px" height="85px" style="border-radius: 50%;">
        </div>
        <div class="nav-link">
           <ul>
          <li><a href="index.php" class="n1">Home</a></li>
          <li><a href="buy.php" class="n1">Buy</a></li>
          <li><a href="about.php" class="n1">About</a></li>
          <form action="buy.php" class="nav-link">
            <li><input type="submit" value="Login" class="button" id="loginbtn"></li>
            </form>
      </ul>
    </div>
      </div>
       
</head>



    <div class="main">
      <section class="view">
        <div class="details">
          <div class="thumb">
            <div class="big-image">
              <img src="Assets/2.jpg" alt="" />
            </div>
            <div class="small-images">
              <img src="Assets/a.jpg" alt="" />
              <img src="Assets/a1.jpg" alt="" />
              <img src="Assets/a2.jpg" alt="" />
            </div>
          </div>
          <h3 class="name">Modern Flats And Apartments</h3>
          <p class="location">
            <i class="fas fa-map-marker-alt"></i> <span>BOLE, ATLAS SITE</span>
          </p>
          <div class="info">
            <p><i class="fas fa-tag"></i><span>15 lac</span></p>
            <p><i class="fas fa-user"></i><span>Dawit (agent)</span></p>
            <p>
              <i class="fas fa-phone"></i
              ><span
                ><a href="#" title="agent phone_n.o">tel:+251-95386120</a>
              </span>
            </p>
            <p><i class="fas fa-building"></i><span>Flats</span></p>
            <p><i class="fas fa-house"></i><span>For sale</span></p>
            <p><i class="fas fa-calendar"></i><span>10-11-2023</span></p>
          </div>
          <h3 class="title">details</h3>
          <hr />
          <div class="flex">
            <div class="box">
              <p><i>rooms:</i><span> 2 BHK</span></p>
              <p><i>status:</i><span> ready to move</span></p>
              <p><i>bedroom:</i><span> 3</span></p>
              <p><i>Bathroom:</i><span> 2</span></p>
              <p><i>balcony:</i><span> 2</span></p>
            </div>
            <div class="box">
              <p><i>carpet area: </i><span>750 sqft</span></p>
              <p><i>room floor:</i><span>3</span></p>
              <p><i>total floors: </i><span>22</span></p>
              <p><i>furnished:</i><span>semi-furnishrd</span></p>
              <p><i>lone: </i><span>avilable</span></p>
            </div>
          </div>

          <h3 class="title">amenities</h3>
          <hr />
          <div class="flex">
            <div class="box">
              <p><i class="fa-solid fa-check"></i> <span>lifts</span></p>
              <p>
                <i class="fa-solid fa-xmark"></i> <span>Security guard</span>
              </p>
              <p><i class="fa-solid fa-check"></i> <span>play ground</span></p>
              <p><i class="fa-solid fa-check"></i> <span>gardens</span></p>
              <p><i class="fa-solid fa-check"></i> <span>water supply</span></p>
              <p><i class="fa-solid fa-check"></i> <span>power backup</span></p>
            </div>
            <div class="box">
              <p><i class="fa-solid fa-check"></i> <span>parking area</span></p>
              <p><i class="fa-solid fa-xmark"> </i> <span>gym</span></p>
              <p><i class="fa-solid fa-xmark"></i> <span>shoping moal</span></p>
              <p><i class="fa-solid fa-check"></i> <span>Market area</span></p>
              <p><i class="fa-solid fa-check"></i> <span>schools</span></p>
            </div>
          </div>
          <h3 class="title">description</h3>
          <hr />
          <p class="description">
           
          </p>
        </div>
      </section>
    </div>

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

    <script src="js/script.js"></script>
  </body>
</html>

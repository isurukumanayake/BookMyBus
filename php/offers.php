<?php
    session_start();
?>

<html>
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Nunito+Sans:wght@200&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/header and footer.css" />
    <link
      rel="icon"
      type="image/x-icon"
      href="../images/bookmybus__1__AMO_icon.ico"
    />
    <link rel="stylesheet" href="../css/offers.css" />
    <link rel="stylesheet" href="../css/styles.css" />

    <title>Offers</title>
  </head>
  <body>
    <nav>
      <div class="logo">
        <img src="../images/logo_max.ico" alt="company logo" />
      </div>
        <ul class="nav-bar">
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="bus routes.php">Bus Routes</a>
            </li>
            <li>
                <a href="offers.php">Offers</a>
            </li>
            <li>
                <a href="mybookings.php">My Bookings</a>
            </li>
            <li>
                <a href="covid-19.php">Covid-19</a>
            </li>
            <li>
                <a href="faq.php">FAQ</a>
            </li>
            <li>
                <a href="AboutUs.php">About Us</a>
            </li>
            <li>
                <a href="ContactUs.php">Contact us</a>
            </li>
             <li>
                <?php
                    if(isset($_SESSION['userid']))
                    {
                        echo '<a href="logout.php">Log out</a>'; 
                    }
                    if(empty($_SESSION['userid']))
                    {
                        echo '<a href="login.php">Log in</a>';
                    }
                ?>
            </li>
            <li>
                <?php
                    if(isset($_SESSION['userid']))
                    {
                        echo '<a class="reg" href="myprofile.php">My Profile</a>';
                    }
                    if(empty($_SESSION['userid']))
                    {
                        echo '<a class="reg" href="register.php">Register</a>';
                    }
                ?>
            </li> 
        </ul>
      <div class="dropdown">
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </nav>

    <div class="bigbox">
      <h1>Featured Offers</h1>
      <hr />
      <br />
      <div class="child">
        <div class="flex_container_row1">
          <div>
            <a href="">
              <img
                class="icon_picture"
                src="../IMAGES/mature-couple-riding-scooter.jpg"
              />
              <h3>Couple Offers</h3>
              <p>15% off</p>
              <p></p>
            </a>
          </div>

          <div>
            <a href="">
              <img
                class="icon_picture"
                src="../IMAGES/CHRISTMAS-LIGHTS-BUS-TOUR.jpg"
              /><br />
              <h3>Christmas Offers</h3>
              <p>till 4th January</p>
            </a>
          </div>
          <div>
            <a href="">
              <img class="icon_picture" src="../IMAGES/images.jpg" />
              <h3>New Year's Deals</h3>
              <p>till 2nd February</p>
            </a>
          </div>
          <div>
            <a href="">
              <img class="icon_picture" src="../IMAGES/Black-Friday.jpeg" />
              <h3>Black Friday Offers</h3>
              <p>November</p>
            </a>
          </div>
        </div>
        <div class="flex_container_row_2">
          <div>
            <a href="">
              <img
                class="icon_picture"
                src="../IMAGES/creditcard-23-1461389394-1578371326.jpg"
              />
              <h3>OneCard Offers</h3>
              <p>till 4th January</p>
            </a>
          </div>
          <div>
            <a href="">
              <img class="icon_picture" src="../IMAGES/logo-512x512.png" />
              <h3>Easy Fund</h3>
              <p>Refundable</p>
            </a>
          </div>
          <div>
            <a href="">
              <img class="icon_picture" src="../IMAGES/images2.png" />
              <h3>Student Offer</h3>
            </a>
          </div>
          <div>
            <a href="">
              <img
                class="icon_picture"
                src="../IMAGES/sri-lanka-bus-route-01.jpg"
              />
              <h3>Colombo-Kandy</h3>
            </a>
          </div>
        </div>
      </div>
      <center><a href="" class="view">View More</a></center>
    </div>
    <footer class="footer-container" style="top:80px;">

      <div class="left_footer">
          <a href="home.php"><img src="../images/logo_max.ico" alt="company logo"></a>

            <p class="footer_links">
                <a href="home.php">Home</a>
                |
                <a href="AboutUs.php">About</a>
                |
                <a href="ContactUs.php">Contact</a>
            </p>

          <p class="copyrights">Copyright © 2022 <strong>BookMyBus</strong> All rights reserved</p>
      </div>

      <div class="center_footer">
          <div>
              <a href="#"><img src="../images/home contact/location.png" class="location"></img></a>
              <p><span>Colombo</span>
                  Sri Lanka</p>
          </div>

          <div>
              <a href="#"><img src="../images/home contact/tel.png" class="tel"></img></a>
              <p>+94 76 125 8734</p>
          </div>
          <div>
              <a href="#"><img src="../images/home contact/mail.png" class="mail"></img></a>
              <p><a href="mailto:bookmybus@gmail.com">bookmybus@gmail.com</a></p>
          </div>
      </div>
      <div class="right_footer">
          <p class="about_company">
              <span>About the company</span>
              <strong>BookMyBus</strong> is an Online Bus Ticket Booking Service.
              It provides a fully-fledged online bus booking platform. Passengers
              can purchase bus tickets online and in return to confirm the seat
              reservation, a text message with the details of travel will be sent.
              <br>
          </p>
          <div class="footer-icons">
              <a href="https://www.facebook.com/"><img src="../images/social media icons/fb.png" class="facebook"></img></a>
              <a href="https://web.whatsapp.com/"><img src="../images/social media icons/whatsapp.png" class="whatsapp"></img></a>
              <a href="https://www.linkedin.com/"><img src="../images/social media icons/linkedin.png" class="linkedin"></img></a>
              <a href="https://twitter.com/?lang=en"><img src="../images/social media icons/twitter.png" class="twitter"></img></a>
              <a href="https://web.telegram.org/"><img src="../images/social media icons/telegram.png" class="telegram"></iimg></a>
          </div>
      </div>
  </footer>
  </body>
</html>

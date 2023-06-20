<?php
    session_start();

    if(isset($_SESSION["userid"]))
    {
        $id = $_SESSION["userid"];
    }

    else
    {
        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
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

      <link rel="stylesheet" href="../css/styles.css">
      <link rel="stylesheet" href="../css/mybookings.css"/>
      <link rel="icon" type="image/x-icon" href="../images/bookmybus__1__AMO_icon.ico">

      <title>My Bookings</title>
  
    </head>

    <body>

      
      <nav>
        <div class="logo">
            <img src="../images/logo_max.ico" alt="company logo">
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





      <br /><br />
      <div class="parent">
        <h1
          style="
            color: #820000;
            font-family: 'Abril Fatface', cursive;
            font-weight: 400;
            padding: 0;
          "
        >
          Manage My Bookings
        </h1>
        <br /><br />
        <img class="main" src="../images/2203_w015_n001_771b_p15_771.jpg" />
        <div class="child1">
          <div class="left">
            <h1>Change</h1>
            <p>You can change the following information in your booking:</p>
            <ul class="info">
              <li>Time or destination of your trip</li>
              <li>Passenger name</li>
              <li>Phone number</li>
              <li>Additional luggage</li>
              <li>Special luggage</li>
            </ul>
            <p>
              If you would like to change the departure time or destination, you
              must first cancel the part of the trip you wish to change. After
              which, you will receive a voucher in the amount of the ticker's
              value minus any applicable cancellation fees. You may then use
              this voucher to book a new trip (by using the voucher number into
              the voucher field and clicking "Redeem"). The voucher is valid for
              6 months.
            </p>
            <p>
              You can correct small typos free of charge. You can also make
              changes to che passenger name. This is usually free of charge.
              However, if the ride will be more expensive than on the original
              day of booking, you'll have to pay the difference between the
              booked price and the new ticket price.
            </p>
            <br />
            <center><a class="btn" href="ContactUs.php">Change my booking</a></center>
          </div>

          <div class="right">
            <h1>Cancellation</h1>
            <p>
              You can cancel your booking up to If minutes before your departure
              time.
            </p>
            <p>
              if you cancel your trip up to 3o days before your departure date,
              it is free. After thar, we might charge a cancellation fee. After
              canceling your booking, a voucher will be generated. The voucher
              is valid for 12 months and is worth the price of your booking
              minus a cancellation fee, if applicable.
            </p>
            <center>
              <img
                class="sub"
                src="../images/istockphoto-477101402-612x612.jpg"
                alt="image"
              />
            </center>
            <br /><br />
            <center>
              <a class="cancelbutton" href="cancel.php">Cancel my booking</a>
            </center>
          </div>
        </div>
        <center><a href="" class="view">View More</a></center>
      </div>

      <footer class="footer-container">

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
</html>

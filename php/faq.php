<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home and faq.css">
    <link rel="icon" type="image/x-icon" href="../images/bookmybus__1__AMO_icon.ico">
    <title>BookMyBus</title>
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

    <div class="slide-container">
        <div class="imageSlides">

            <input type="radio" name="radio_btn" id="radio1">
            <input type="radio" name="radio_btn" id="radio2">
            <input type="radio" name="radio_btn" id="radio3">
            <input type="radio" name="radio_btn" id="radio4">

            <div class="slide one">
                <img src="../images/slide/bus_4.png" alt="slides">
            </div>
            <div class="slide">
                <img src="../images/slide/bus_1.png" alt="slides">
            </div>
            <div class="slide">
                <img src="../images/slide/bus_2.png" alt="slides">
            </div>
            <div class="slide">
                <img src="../images/slide/bus_3.png" alt="slides">
            </div>

            <div class="slides-auto">
                <div class="auto-1"></div>
                <div class="auto-2"></div>
                <div class="auto-3"></div>
                <div class="auto-4"></div>
            </div>

            <div class="slides-manual">
                <label for="radio1" class="manualBtn"></label>
                <label for="radio2" class="manualBtn"></label>
                <label for="radio3" class="manualBtn"></label>
                <label for="radio4" class="manualBtn"></label>
            </div>

        </div>
    </div>

    <div class="faq-container">
        <h2>Frequently Asked Questions</h2>

        <div class="question-bar">
            <div class="icon-q"></div>
            <h4>What should I do if I face any problems while booking bus tickets?</h4>
        </div>
        <div class="answer-bar">
            <p>If you face any problem/s while booking your bus tickets with us, please send us a feedback using the "Contact Us" sections on the Website & App.</p>
        </div>

        <div class="question-bar">
            <div class="icon-q"></div>
            <h4>What types of offers and payment methods are available?</h4>
        </div>
        <div class="answer-bar">
            <p>We offer a huge range of bus  ticket offers to benefit all our users such as attractive discounts for  our first time user, Debit/Credit card offers, seasonal offers etc.  Download our app to unlock and enjoy even more offers. Stay tuned in to  take advantage of our seasonal offers which we keep updating frequently</p>
        </div>

        <div class="question-bar">
            <div class="icon-q"></div>
            <h4>How can I View/Cancel/Modify my bus booking?</h4>
        </div>
        <div class="answer-bar">
            <p>To view your bookings, login & click on 'My Bookings' and you will find your bus booking details on the redirected page. Similarly, you can modify the details of your journey by clicking on the "Edit"tab and alter details according to your preferences such as Postpone your trip, Bus type, Pick-up location etc.</p>
        </div>

        <div class="question-bar">
            <div class="icon-q"></div>
            <h4>Why should I book bus tickets with BookMyBus?</h4>
        </div>
        <div class="answer-bar">
            <p>BookMyBus, is the largest online bus booking portal in Sri Lanka with over 579+ bus operators across 150+ bus routes. Some of our outstanding features are Easy navigation and even faster bookings, Lucrative cashbacks and a huge array of big offers, The lowest prices on bus seat reservation in Sri Lanka and 24 / 7 Customer support available and all the reservations made through our online portal will be guaranteed.</p>
        </div>

        <div class="question-bar">
            <div class="icon-q"></div>
            <h4>During Covid-19, can I book buses online?</h4>
        </div>
        <div class="answer-bar">
            <p>If you're worried about reserving a bus ticket online during the Covid-19 outbreak, we've put together a list of specific travel advice for various Indian states. When arranging a trip, please keep the following in mind.</p>
        </div>

        <div class="question-bar">
            <div class="icon-q"></div>
            <h4>During Covid-19, can I book buses online?</h4>
        </div>
        <div class="answer-bar">
            <p>If you're worried about reserving a bus ticket online during the Covid-19 outbreak, we've put together a list of specific travel advice for various Indian states. When arranging a trip, please keep the following in mind.</p>
        </div>

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

    <script src="../js/home.js"></script>

</body>
</html>
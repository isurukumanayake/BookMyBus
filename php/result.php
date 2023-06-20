<?php
  require "config.php";
?>

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
    
    <h2 style="font-size: 70px; margin: 30px 40px 20px 40px; color:#b04c4c;">Search Results</h2>
    


    <?php
    require "config.php";

    if(isset($_GET['searchBtn'])){
        
            $from = $_GET["from"];
            $to = $_GET["to"];
            $date = $_GET["date"];
            $type = $_GET["type"];

            $sql= "SELECT * FROM busroutes where (from_x LIKE '%$from%') AND (to_x LIKE '%$to%') AND (date_x LIKE '%$date%') AND (type_x LIKE '%$type%') AND (price_x) ";
            
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
        // output of each row
        while($row = $result->fetch_assoc()) {
            $userID = $row['ID'];
            echo  "<div style=\"border:3px solid #b04c4c;border-radius: 30px; background-color: #FFC3C3; margin: 10px 90px auto 90px; padding: 7px 10px 25px 55px;\"><form action=\"payment.php\" method=\"GET\"><h1>From: " . $row["from_x"]. "  | To: " . $row["to_x"].  "  | Date: " . $row["date_x"].  "  | Type: " . $row["type_x"].  "  | Time: " . $row["time_x"]. "  | Price: " . "Rs." . $row["price_x"] . "/=" . "</h1><button style=\"position: static;\" name=\"bookx\" type=\"submit\" value=$userID>Book</button></form></div><br><br>";
        }
        } else {
        echo "<div style=\"border:3px solid #b04c4c;border-radius: 30px; background-color: #FFC3C3; margin: 10px 90px auto 90px; padding: 15px 10px 25px 200px;\"><h1>No buses available for the given search criteria. Thank you.</h1></div>";
        }
        $conn->close();

    }

    ?>


    
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

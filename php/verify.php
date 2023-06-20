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

<?php
  require "config.php";
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

    <?php
    require "config.php";

    if(isset($_GET['book'])){

        $useridy = $_GET["book"];

        $sql = "SELECT ID, from_x, to_x, date_x, type_x, time_x, price_x FROM busroutes where (ID LIKE '$useridy')";
        $result = $conn->query($sql);
        $random = rand( 10000 , 99999 );

        if ($result->num_rows > 0) {
        
            while($row = $result->fetch_assoc()) {
                $e1 = $row["ID"];
                $e2 = $row["from_x"];
                $e3 = $row["to_x"];
                $e4 = $row["date_x"];
                $e5 = $row["type_x"];
                $e6 = $row["time_x"];
                $e7 = $row["price_x"];
                $e8 = $random;

                    $sqly = "INSERT INTO reservation (ID , from_y, to_y, type_y, date_y, price_y,  time_y, code_y) VALUES ('$e1', '$e2','$e3','$e4','$e5','$e6','$e7','$e8');";
                    if ($conn->query($sqly)) {
                        echo "<div style=\"border:3px solid #b04c4c;text-align: center;border-radius: 30px; background-color: #FFC3C3; margin: 10px 90px 90px 90px; padding: 15px 10px 25px 100px;\"><h1>Payment was recorded successfully!!!<br>Your verification code is <span style=\"color:brown;font-weight: bold;font-size: 50px;\"> {$e8} <span> </h1></div>";
                    } 
            }
    }


}

    ?>

    <img style="display: block; margin : auto; " src="../images/thumbs-up.png" alt="done"><br><br>

    <h1 style="color:rgb(218, 0, 0);font-weight: bold;font-size: 60px;text-align:center;">Thank you for joining with us:)</h1>
    <h2 style="color:rgb(109, 0, 0);font-weight: bold;font-size: 50px;text-align:center;">Have a wonderful ride</h2>

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
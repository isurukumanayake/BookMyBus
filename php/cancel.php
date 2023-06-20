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
    require 'config.php';

    if(isset($_POST['subbtn']))
    {
    $ID = $_POST['verID'];

    //Checking the Availability of the verification code
    $sql="DELETE from reservation WHERE code_y='$ID'";

    $result=$conn->query($sql);

    if($result) {
       header("location:mybookings.php?bookingCanceled");
    }
    else{
       echo "<script>alert('Unsuccessful insertion')</script>";
    }

    $conn->close();
    }
?>
<html>
  <head>
    <title>Cancel My Booking</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/cancel.css">
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
  


  
    <div class="whitebox">
    <div class="form">
      
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="container" method="POST" >
        <label for="vereID" class="phrase">Enter your Verification Code</label><br />
        <input type="text" id="verID" name="verID" class="searchbox" placeholder="enter code"/><br />
        <input style="background:#fdb2ad;" type="submit" value="Submit" class="cancelbtn" name="subbtn" />
      </form>
      

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
  
    
  </body>
</html>


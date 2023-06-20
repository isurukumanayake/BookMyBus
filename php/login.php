<?php
    session_start();
    if(isset($_SESSION['userid'])){
        header("location:myprofile.php");
    }
    include 'config.php';   
     
            if(isset($_POST['submit'])){
            
                $username=$_POST['loginEmail'];
                $password=$_POST['loginPass'];
                $sql = "SELECT * FROM Registration WHERE Email='$username' AND Password='$password' ";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row=$result->fetch_assoc()){
                        $_SESSION['userid']= $row['Email'];
                        header("location:home.php");
                    }        
                }
            
                else
                {
                    echo "<script>alert('incorrect username or password')</script>";
        
                }
            $conn->close();
            }
        
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header and footer.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/x-icon" href="../images/bookmybus__1__AMO_icon.ico">
    <title>BookMyBus</title>
    <style>
        a.reg2{
                color:rgb(17, 14, 212);
                text-decoration: none; 
        }
        a.reg2:hover{
                color:brown;
                text-decoration: none;
        }
    </style>
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
    <script src="../js/home.js"></script> 
    
        <center>
            <br/>
            <h2>Login into Your Account</h2>
        </center>
            <form method="POST" action="login.php" > 
                <center>
                <img src="../images/loginavatar.png" width="150">
                    <br/><br/>
                   <label>Email Address</label><br/>
                        <input type="email" name="loginEmail"  placeholder="Email Address" required><br/><br/>
                    <label>Password</label><br/>
                        <input type="password" name="loginPass" placeholder="Password" id="pass2" required ><br/><br/>
               
                    <label>
                        <input type="checkbox" id="chk2" checked>Remember me </label><br/><br/>
                        <input type="submit" id="loginBtnsub" name="submit" value="LOGIN">
                </center>
            <br/>
            <p style="float:left;">Not a user yet ?<a href="register.php" class="reg2"> Register Now</a></p> 
             
            </form>
            
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
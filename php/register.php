<?php
    session_start();
    require 'config.php';
		if(isset($_POST["submit"])){
				$FirstName = $_POST['fname'];
				$LastName = $_POST['lname'];
				$Email = $_POST['email'];
				$Gender = $_POST['gender'];
				$Address = $_POST['add1'];
				$Password = $_POST['password1'];
				$ConfirmP = $_POST['password2'];
				
				
		if($Password == $ConfirmP){
			$sql = "SELECT * FROM Registration WHERE Email ='$Email' ";
			$result = $conn->query($sql);
			if($result->num_rows > 0){
					echo "<script>alert('User already exists .Try another username')</script>";
       
			}
			
		else{
       
			$sql = "INSERT INTO Registration (FirstName , LastName , Email , Gender , Address , Password) VALUES('$FirstName','$LastName','$Email','$Gender','$Address','$Password')";
			if($conn->query($sql)){
				echo "<script>alert('Registration Successful.')</script>";
				//header("Location:login.php");
				
				
			}
			
		}
$conn->close();
		}
	}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header and footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="../images/bookmybus__1__AMO_icon.ico">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>BookMyBus</title>
    <style>
        a.terms{
                color:blue;
                text-decoration: none;
    }
        a.terms:hover{
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
    <script src="../js/script1.js"></script>
  
        <center>
            <br/>
            <h2>Register Your Account</h2>
        </center>
        <br/>
        <form method="POST" onsubmit="checkPassword()" action="register.php">
            <center>
                <h4>Let's set up your account . Already have one?<a href="login.php" class="terms"> Sign In Here</a></h4>
            </center>
            <br/>
            <label >First Name</label>
                <input type="text" name="fname"  placeholder="John" required><br/><br/>
            <label >Last Name</label>
                <input type="text" name="lname"  placeholder="Perera" required><br/><br/>
            <label >Email</label>
                <input type="email" name="email"  placeholder="abc@gmail.com" required><br/><br/>
            <label >Gender</label>
            <label>
                Male
                    <input type="radio" name="gender" id="male" value="Male" checked>
                Female
                    <input type="radio" name="gender" id="female" value="Female"></label><br/><br/>
            <label>Address</label>
                <textarea name="add1" placeholder="Enter Address Here" rols="5" cols="33" required></textarea><br/><br/>
            <label>Password</label>
                <input type="password" name="password1" id="pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" title="Must contain at least one number and one uppercase and lowercase letter, and  5 to 10 characters" placeholder="password" required><br/><br/>
            <label>Confirm Password</label>
                <input type="password" name="password2" id="pass2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}" title="Must contain at least one number and one uppercase and lowercase letter, and  5 to 10 characters" placeholder="Confirm password" required><br/><br/>
            <center>
                <p>
                    <input type="checkbox" id="check1" onclick="enableButton()" >By ticking, You have read and understood the <a href="../html/tandc.html" target="_blank" class="terms">Terms and Conditions</a><br/><br/>
                    <input type="submit" id="btnsub" name="submit" value="Register" disabled>
                    <input type="reset" id="btnsub1" name="submit1" value="Reset">
                </p>
            </center>
            
            
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
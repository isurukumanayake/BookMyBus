<?php
    session_start();
    require 'config.php';

    if(isset($_POST['formsub'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


//Inserting data to database
    $sql = "INSERT INTO contactform(name , email , phone , subject , message) VALUES('$name','$email', '$phone' ,'$subject','$message')";
    if( $conn->query($sql) ){
            echo "<script>alert('Successfully submitted')</script>";
            
    
}
else{
    echo "<script>alert('Unsuccessful insertion')</script>";
}

$conn->close();
}
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ContactUs.css">
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

	<div class="container">
		<h1>Contact Us</h1>
		<div class="contact-box">
			<div class="contact-left">
				<h3>Reach Us</h3>
				<p>Reach us for any of the following matters. We reply to each and every calls, messages, emails, everything.</p><br>
				<br>
				<b>Passengers</b><br>
				Looking for bus ticket booking and reservation in Sri Lanka? You are at the right place.<br><br>
				<b>Bus Operators</b><br>
				Increase your bus ticket booking sales enabling more visiblitiy? Contact us to add your bus into our online platform. <br><br>
				<b>Travel Agents</b><br>
				Willing to earn money being bus booking agent? Contact us to register yourself.
				<br><br>
				<div class="info">
					<div class="information">
						<img src="../images/phone.ico" class="icon" alt="" / height="25px" width="25px">
						<p>+94772139120</p>
					</div>
					<div class="information">
						<img src="../images/email.ico" class="icon" alt="" / height="25px" width="30px">
						<p>mail.bookmybus@gmail.com</p>
					</div>
					<div class="information">
						<img src="../images/instagram.ico" class="icon" alt="" / height="25px" width="25px">
						<p>@bookmybus._<p>
					</div>
				</div>				
			</div>
			<div class="contact-right">
				<h3>Send Your Request</h3>
				<div id="error_message">
				</div>
				<form action="ContactUs.php" method="POST" id="myform" onsubmit="return validate();">
					<div class="input-row">	
						<div class="input-group">
						<label>Name</label>
						<input type="text" placeholder="Your Name" name="name" id="name">
						</div>
						<div class="input-group">
						<label>Email</label>
						<input type="email" placeholder="Email Address" name="email" id="email">
						</div>
					</div>
					<div class="input-row">	
						<div class="input-group">
						<label>Phone</label>
						<input type="text" placeholder="Phone Number" name="phone" id="phone">
						</div>
						<div class="input-group">
						<label>Subject</label>
						<input type="text" placeholder="Subject" name="subject" id="subject">
						</div>
					</div>
					<label>Message</label>
					<textarea rows="20" placeholder="Your Message" name="message" id="message"></textarea>
					<div class="button">
					<input type="submit" value="Submit" name="formsub">
					</div>
				</form>
			</div>
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
	
	<script src="../js/app.js"></script>
</body>
</html>

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

    //Linking the configuration file
    require "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/covid19-styles.css">
    <link rel="stylesheet" href="../css/profile.css">
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


        <div id="profile">

        <img id="profile-pic" src="../images/user_account.png">

        <div id="details">

        <?php

            $sql = "SELECT * FROM registration WHERE email = '$id'";

            if($result = $conn->query($sql))
            {
                $row = $result->fetch_assoc();

                $fname = $row["FirstName"];
                $lname = $row["LastName"];
                $email = $row["Email"];
                $gender = $row["Gender"];
                $address = $row["Address"];
                $password = $row["Password"];

            }

        ?>

                <form method="post" action="editprofile.php">

                <label for="field1">Name</label><br>
                <input id='field1' name='fname' type='text' value='<?php echo $fname ?>' readonly='readonly'><br>
                <button type="button" id='edit1'><img src='../images/pencil.png' id='edit-pencil'></button>
                <button type="button" id='update1'>Update</button><br>

                <script type='text/javascript'>

                document.getElementById('edit1').onclick = function() {

                        document.getElementById('field1').readOnly =false;

                };

                document.getElementById('update1').onclick = function() {


                        document.getElementById('field1').readOnly =true;

                };
                </script>

                <label for="field2">Last Name</label><br>
                <input id='field2' name='lname' type='text' value='<?php echo $lname ?>' readonly='readonly'><br>
                <button type="button" id='edit2'><img src='../images/pencil.png' id='edit-pencil'></button>
                <button type="button" id='update2'>Update</button><br>


                <script type='text/javascript'>

                document.getElementById('edit2').onclick = function() {

                        document.getElementById('field2').readOnly =false;

                };

                document.getElementById('update2').onclick = function() {


                        document.getElementById('field2').readOnly =true;

                };
                </script>


                <label for="field3">Email</label><br>
                <input id='field3' name='email' type='text' value='<?php echo $email ?>' readonly='readonly'><br>

                <label for="field4">Gender</label><br>
                <input id='field4' name='gender' type='text' value='<?php echo $gender ?>' readonly='readonly'><br>

                <label for="field5">Address</label><br>
                <textarea id='field5' name='address' readonly='readonly' rows='4' cols='40'></textarea><br>
                <button type="button" id='edit5'><img src='../images/pencil.png' id='edit-pencil'></button>
                <button type="button" id='update5'>Update</button><br>


                <script type='text/javascript'>

                document.getElementById('field5').innerHTML = '<?php echo $address ?>';

                document.getElementById('edit5').onclick = function() {

                        document.getElementById('field5').readOnly =false;

                };

                document.getElementById('update5').onclick = function() {

                        document.getElementById('field5').readOnly =true;

                };
                </script>

                <input type="submit" id="btnSubmit" name="btnSubmit" value="Save Details">

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


    <script src="../js/home.js"></script>

</body>
</html>
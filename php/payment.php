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
    
    <div class="payment-container">

        <h1>Confirm Your Payment</h1>

        <div class="card_number">
            <h3>Card Number: </h3>
            <div class="input-number">
                <input type="text">
            </div>
        </div>

        <div class="cvv-cardHolder">
            <div class="cvv">
                <h3>cvv: </h3>
                <div class="input-cvv">
                    <input type="password">
                </div>
            </div>
            <div class="cardHolder">
                <h3>Card Holder: </h3>
                <div class="input-cardHolder">
                    <input type="text">
                </div>
            </div>
        </div>

        <div class="images-expDate">
            
            <div class="card-images">
                <img src="../images/card payment/maestro.ico" alt="maestro">
                <img src="../images/card payment/visa.ico" alt="visa">
                <img src="../images/card payment/paypal.ico" alt="paypal">
            </div>

            <h3>Expiry Date: </h3>
            <div class="selection">
                <div class="expDate">
                
                    <select name="months" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                    </select>
                    <select name="years" id="years">
                        <option value="2022">2020</option>
                        <option value="2021">2019</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                    </select>
                </div>
        </div>

        <?PHP 

            require "config.php";
            if(isset($_GET['bookx'])){

                $useridx = $_GET["bookx"];
                
                $sql= "SELECT price_x FROM busroutes where (ID LIKE '$useridx') ";
                
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output of each row
                    while($row = $result->fetch_assoc()) {
                        echo  "<div style=\"border:3px solid #b04c4c;border-radius: 30px; width:50%; background-color: #FAF0D7 ; padding: 5px 0 ;\"><h1> \"Rs." . $row["price_x"] . "/=" . "</h1></div><br><br>";
                    }
                    }
            }

            echo "<form action=\"verify.php\" method=\"GET\"><button style=\"position: static; margin: 10px 0px 10px 40px\" name=\"book\" type=\"submit\" value=$useridx >CONFIRM YOUR PAYMENT</button></form>"; 
        ?>
        
    </div>

    <script src="../js/home.js"></script>

</body>
</html>


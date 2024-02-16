<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/footer-style.css">
</head>
<body>
<footer class="footer">
    <div class="container">
        <div class="f-row">
            <div class="footer-col">
                <a href="index.php" class="flogo"><span>Well</span>Care</a>  
                <p style="font-size: 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, magnam?</p>              
            </div>
           
            <div class="footer-col">
                <h4>Quick Links</h4>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Therapy</a></li>
                <li><a href="#">Home Visit</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="contact.php">Contat us</a></li>

            </div>

            
            <div class="footer-col">
                <h4 class="visitor" style="color: white;">visitors</h4>
                <!-- <h4>Therapy</h4>
                <li><a href="#">Knee Pain</a></li>
                <li><a href="#">Back Pain</a></li>
                <li><a href="#">Leg Pain</a></li>
                <li><a href="#">Neck Pain</a></li> -->
<?php
        
        // Check if the session variable exists
        if (!isset($_SESSION['visitor_count'])) {
            // If it doesn't exist, initialize it with 1
            $_SESSION['visitor_count'] = 1;
        } else {
            // If it exists, increment it by 1
            $_SESSION['visitor_count']++;
        }

        // Display the visitor count
        // echo "You are visitor number: " . $_SESSION['visitor_count'];
      
        echo '<p class="visitor-message">You are visitor number: ' . $_SESSION['visitor_count'] . '</p>';

?>

            </div>

            <div class="footer-col">
                <h4>Inquiry</h4>
                <li><a href="#">Email :- wellcare@gmail.com</a></li>
                <li><a href="#">Contact :- 9033614663</a></li>
                <li class="developer" style="font-size: medium; color: aqua;"> Designed & Developed by Yash Patel & Deep sanchela </li>      
                <!-- <div class="" style="color: white';">
                </div> -->
            </div>
            
            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="icons">
                    <a href="https://www.facebook.com/Wellcarephysio?mibextid=9R9pXO"><i class="fa-brands fa-facebook" id="fb"></i></a>
                    <a href="https://instagram.com/wellcare_multispeciality?igshid=MzRlODBiNWFlZA=="><i class="fa-brands fa-instagram" id="ig"></i></a>
                    <!-- <a href="#"><i class="fa-brands fa-twitter" id="tw"></i></a> -->
                    <a href="https://youtube.com/@multispecialityclinicpainm1732?si=TcQb4Um4yy4xSINb"><i class="fa-brands fa-youtube" id="yt"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>


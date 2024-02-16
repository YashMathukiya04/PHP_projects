<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./footer-style.css">
</head>
<body>
<footer class="footer">
    <div class="container">
        <div class="f-row">
            <div class="footer-col">
                <a href="index.php" class="flogo"><span>Well</span>Care</a>  
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, magnam?</p>              
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
                <h4>Therapy</h4>
                <li><a href="#">Knee Pain</a></li>
                <li><a href="#">Back Pain</a></li>
                <li><a href="#">Leg Pain</a></li>
                <li><a href="#">Neck Pain</a></li>
            </div>

            <div class="footer-col">
                <h4>Inquiry</h4>
                <li><a href="#">Email :- wellcare@gmail.com</a></li>
                <li><a href="#">Contact :- 9033614663</a></li>
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
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
}

.flogo{
    font-size: 40px;
    color: orangered;
    font-weight: bold;
    position: relative;
    top: 20%;  
}

.flogo span{
    color: #fff;
}
.footer-col p{
    margin-top: 45px;
    color: #fff;
    font-weight: 200;
    text-align: left;
}

.container{
    max-width: 90%;
    /* background-color: red; */
    margin: auto;
}
.footer{
    background-color: #24262b;
    padding: 50px 0;
}
.f-row{
    display: flex;
    flex-wrap: wrap;
}

.footer-col{
    width: 20%;
    padding: 0 10px;
}
.footer-col h4{
    font-size: 18px;
    color: #fff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
}

.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}

.footer-col li{
    margin-bottom: 10px;
}

.footer-col li a{
    font-size: 16px;
    text-transform: capitalize;
    /* color: #ffff; */
    font-weight: 300;
    color: #bbb;
    display: block;
    transition: all 0.3s ease;
}

.footer-col li a:hover{
    color: #fff;
    padding-left: 8px;
}

.footer-col .icons a{
    display: inline-block;
    height: 30px;
    width: 30px;
    /* background-color: rgba(255, 255, 255, 0.2); */
    margin: 0 10px 10px 0;
    text-align: center;
    line-height: 30px;
    border-radius: 50%;
    color: #fff;
    font-size: 30px;
    transition: all 0.5s ease;
}

.footer-col .icons a:hover{
    transform: translateY(-10px);
}

.icons a #fb{
    color: rgb(43, 43, 231);
}
.icons a #ig{
    color: rgb(212, 36, 121);
}
.icons a #tw{
    color: rgb(27, 167, 227);
}
.icons a #yt{
    color: rgb(236, 39, 39);
}

/* responsive */
@media(max-width:1100px){
    .footer-col{
        width: 40%;
        margin-bottom: 20px;
        padding-left: 30px;
    }
    .container{
        margin:auto;
    }
    .flogo{
        font-size:50px;
        top: 20px;
    }
    .footer-col p{
        font-size: 20px;
    }
   
}
@media(max-width:800px){
    .footer-col{
        width: 50%;
        margin-bottom: 20px;
        padding-left: 30px;
    }
    .container{
        margin:auto;
    }
    .flogo{
        font-size:30px;
        top: 20px;
    }
    .footer-col p{
        font-size: 20px;
        margin-top: 20px;
    }
   
}
@media(max-width:500px){
    .footer-col{
        width: 100%;
        margin-bottom: 20px;
        padding-left: 30px;
        text-align: center;
    }

    .footer-col h4::before{
        left: 40%;
    }
    .container{
        margin:auto;
    }
    .flogo{
        font-size:30px;
        top: 20px;
    }
    .footer-col p{
        font-size: 15px;
        margin-top: 20px;
        text-align: center;
    }
   
}
</style>

</body>
</html>
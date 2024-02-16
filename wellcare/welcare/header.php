
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->

</head>
<body>
    <!-- header section starts  -->

    <?php
        // Include the central configuration file
     //   include('../config.php'); 
            // Encrypt data to pass it in the URLs
            // $dataToPass = 'sensitive_data_to_pass';
            // $encryptedDataToPass = encryptData($dataToPass);
    ?>

    <header class="header" style="height: 80px; z-index: 999;">
        <a href="./index.php" class="logo"><span>Well</span>care</a>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="therapy_add.php">Therapy</a>
                <a href="delete_therapy.php ">Delete Therapy</a>
                <a href="contact_display.php">Contact</a>
                <!-- <a href="feedback.php">About Us</a> -->
                <a href="homevisit_display.php">Home Visit</a>
            </nav>
        <div class="icons">
                <!-- <div id="menu-bars" href="#" class="fas fa-bars"> </div> -->
                <!-- <a href="#" class="fas fa-heart"></a> -->
                <a href="../logout.php" class="fa fa-sign-out"></a>
        </div>
    </header>

    <!-- javascript part -->

    <script>
        let menu = document.querySelector('#menu-bars');
        let navbar= document.querySelector('.navbar');

        menu.onclick = () => {
            navbar.classList.toggle('active');
        }

    </script>

</body>

</html>


<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Nunito:wght@200;300;400;600;700&display=swap');


:root{
    --red:#ff5a3c;
    --light-red:#f9edeb;
}

*{
    font-family: 'Nunito',sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
}

html{
    font-size : 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}

body{
    background: #f7f7f7;
}

header{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background: #fff;
    padding: 1.5rem 9%;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0,.1);
    display: flex;
    align-items: center;
    justify-content: space-between;
}

header .logo{
    font-weight: bolder;
    font-size: 2.5rem;
    color: #333;
}


header .logo span{
    color: var(--red);
}

header .navbar a{
    color: #333;
    font-size: 2rem;
    padding: 0 1.5rem;
}

header .navbar a:hover{
    color:var(--red);
}


header .icons #menu-bars,
header .icons a{
     height: 4.5rem;
     line-height: 4.5rem;
     width: 5rem;
     font-size: 2rem;
     margin-right: .5rem;
     border-radius: .5rem;
     color: var(--red);
     background: var(--light-red);
     text-align: center;
}

header .icons #menu-bars:hover,
header .icons a:hover{
    color: var(--red);
     background: var(--light-red);
     color: #fff;
}

header .icons #menu-bars:hover{
    display: none;
}

/* media queries */

@media(max-width:981px) {
    html{
        font-size: 62.5%;
    }

    header{
        padding: 1.5rem 1rem;
    }
}

@media(max-width:560px){
    header .icons #menu-bars{
        display: inline-block;
    }
    header .navbar{
        position: absolute;
        left: 0;
        right: 0;
        top: 100%;
        background: #f7f7f7;
        border-top: .1rem solid #333;
        border-bottom: .1rem solid #333;
        transition: .2s linear;
        clip-path: polygon(0 0,100% 0,100% 0,0);
        /* transition: none; */
    }

    header .navbar.active{
        clip-path: polygon(0 0, 100% 0 ,100% 100%,0% 100%);
    }
 

    header .navbar a{
        display: block;
        padding: 1.5rem;
        margin: 1.5rem;
        background: #fff;
        border: .1rem solid #333;
        box-shadow: 0  .5rem 1rem rgba(0, 0, 0,.1);
        border-radius: 0.5rem;
    }
}

@media(max-width:881px) {
    html{
        font-size: 62.5%;
    }

    header{
        padding: 1.5rem 1rem;
    }
}

@media(max-width:450px) {
    html{
        font-size: 50%;
    }
}

</style>


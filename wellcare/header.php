<?php include('login_process.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Home</title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->

</head>

<body>


    <!-- header section starts  -->
    <header class="header" style="height: 80px; z-index: 999;">
        <a href="#" class="logo"><span>Well</span>care</a>

        <?php
        include('config.php'); // Include the central configuration file

        // Example: Encrypt data to pass it in the URLs
        $dataToPass = 'sensitive_data_to_pass';
        $encryptedDataToPass = encryptData($dataToPass);
        ?>

        <nav class="navbar">
            <a href="index.php?data=<?php echo $encryptedDataToPass; ?>" class="nav-link">Home</a>
            <a href="therapy.php?data=<?php echo $encryptedDataToPass; ?>" class="nav-link">Therapy</a>
            <a href="cont.php?data=<?php echo $encryptedDataToPass; ?>" class="nav-link">Contact</a>
            <a href="about.php?data=<?php echo $encryptedDataToPass; ?>" class="nav-link">About Us</a>
            <a href="homevisit.php?data=<?php echo $encryptedDataToPass; ?>" class="nav-link">Home Visit</a>
        </nav>


        <div class="icons">
            <div id="menu-bars" href="#" class="fas fa-bars"></div>
            <a href="login.php?data=<?php echo $encryptedDataToPass; ?>" class="fas fa-user"></a>
        </div>
        </div>
    </header>

    <script>
        let menu = document.querySelector('#menu-bars');
        let navbar = document.querySelector('.navbar');

        menu.onclick = () => {
            navbar.classList.toggle('active');
            // Toggle the menu-bars icon to close (X) when the menu is open
            menu.classList.toggle('fa-bars');
            menu.classList.toggle('fa-times');
        }
    </script>
    <!-- <script>
        let menu = document.querySelector('.header .menu');

        document.querySelector('#menu-btn').onclick = () =>{
        menu.classList.toggle('active');
        }

        window.onscroll = () =>{
        menu.classList.remove('active');
}
    </script> -->


</body>

</html>

<!-- /loading spinner code -->

<!-- spinner class -->
<div class="loading-spinner">
    <div class="spinner"></div>
</div>



<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Nunito:wght@200;300;400;600;700&display=swap');


    :root {
        --red: #ff5a3c;
        --light-red: #f9edeb;
    }

    * {
        font-family: 'Nunito', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
    }

    html {
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-behavior: smooth;
        scroll-padding-top: 7rem;
    }

    body {
        background: #f7f7f7;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        background: #fff;
        padding: 1.5rem 9%;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    header .logo {
        text-decoration: none;
        font-weight: bolder;
        font-size: 2.5rem;
        color: #333;
    }


    header .logo span {
        color: var(--red);
    }

    header .navbar a {
        color: #333;
        font-size: 2rem;
        padding: 0 1.5rem;
    }

    header .navbar a:hover {
        color: var(--red);
    }


    header .icons #menu-bars,
    header .icons a {
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
    header .icons a:hover {
        color: var(--red);
        background: var(--light-red);
        color: #fff;
    }

    header .icons #menu-bars:hover {
        display: none;
    }

    /* media queries */

    @media(max-width:981px) {
        html {
            font-size: 62.5%;
        }

        header {
            padding: 1.5rem 1rem;
        }
    }

    @media(max-width:560px) {
        header .icons #menu-bars {
            display: inline-block;
        }

        header .navbar {
            position: absolute;
            left: 0;
            right: 0;
            top: 100%;
            background: #f7f7f7;
            border-top: .1rem solid #333;
            border-bottom: .1rem solid #333;
            transition: .2s linear;
            clip-path: polygon(0 0, 100% 0, 100% 0, 0);
            /* transition: none; */
        }

        header .navbar.active {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
        }


        header .navbar a {
            display: block;
            padding: 1.5rem;
            margin: 1.5rem;
            background: #fff;
            border: .1rem solid #333;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
            border-radius: 0.5rem;
        }
    }

    @media(max-width:881px) {
        html {
            font-size: 62.5%;
        }

        header {
            padding: 1.5rem 1rem;
        }
    }

    @media(max-width:450px) {
        html {
            font-size: 50%;
        }
    }
</style>




<!-- Add this code to your header section -->
<style>/* Loading spinner styles with custom colors */
.loading-spinner {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 102, 153, 0.7); /* Background color */
    z-index: 9999;
    justify-content: center;
    align-items: center;
}

.spinner {
    border: 6px solid #f3f3f3;
    border-top: 6px solid #006699; /* Border color */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

</style>


<!-- loading spinner javascript -->
<script>
    // Function to show the loading spinner
    function showLoadingSpinner() {
        document.querySelector('.loading-spinner').style.display = 'flex';
    }

    // Function to hide the loading spinner after 2 seconds
    function hideLoadingSpinner() {
        setTimeout(function () {
            document.querySelector('.loading-spinner').style.display = 'none';
        }, 2000); // Hide the spinner after 2 seconds
    }

    // Add click event listeners to your navigation links
    document.querySelectorAll('.nav-link').forEach(function (link) {
        link.addEventListener('click', function () {
            showLoadingSpinner(); // Show the spinner when a link is clicked
            hideLoadingSpinner(); // Hide the spinner after 2 seconds
        });
    });
</script>

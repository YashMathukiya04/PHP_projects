<?php
        include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Contact-Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
    <body>
        <div class="contact-form">
            <h1>Contact-us</h1>
        </div>
        <div class="contact-us">
            <form action="submit.php" class="" method="post" autocomplete="off">
                <input type="text"  class="form-control"  name="name" placeholder="Enter Name" required><br>
                <input type="text" class="form-control" name="mobile_no" placeholder="Enter Mobile no" required><br>
                <input type="email" class="form-control" name="email" placeholder="Enter E-mail" required><br>
                <textarea class="form-control" name="message"  placeholder="Enter Message" cols="50" rows="4" required> </textarea><br>
                <input type="submit" class="form-control submit" name="submit">      
            </form>    
        </div>
    </body>
</html>

<?php
    include("footer.php")
?>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Nunito:wght@200;300;400;600;700&display=swap');

    *{
    padding: 0px ;
    margin: 0px;
    font-family:'Nunito',  sans-serif ;
    /* position: relative; */
}

body{
   background-image: url("images/image5.jpg");
    background-size: cover;
    text-align: center;
}

.contact-form{
    margin-top: 100px;
    color: #ff5722;
    text-transform: uppercase;
    /* transition: all 4s ease-in-out; */
}

.contact-form h1{
    font-size: 32px;
}


form{
    margin-top: 50px;
    /* transition: all 4s ease-in-out ; */
}

.form-control{
    width: 400px;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid gray;
    color: #fff;
    font-size: 18px;
    margin-bottom: 18px;
}


input{
    height: 45px;
}

form .submit{
    background: #ff5722;
    border: transparent;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 2px;
    height: 50px;
    margin-top: 20px;
}

form .submit:hover{
    background: #f44336;
    cursor: pointer;
}

</style>


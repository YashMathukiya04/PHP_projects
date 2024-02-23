<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form action="register.php" method="post"onsubmit="return validateForm()"  autocomplete="off">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name : </span>
                    <input type="text" name="name"  placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">User Name : </span>
                    <input type="text" name="username"  placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email : </span>
                    <input type="email" name="email"  placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number : </span>
                    <input type="number" name="number" placeholder="Enter your number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password : </span>
                    <input type="text" name="password"  placeholder="Enter your password" required autocomplete="off">
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password : </span>
                    <input type="password" name="confirmpassword"  placeholder="Re enter password" required autocomplete="off">
                </div>
            </div>
            <div class="gender-details">
                <span class="gender-title">Gender : </span>
                <div class="category">
                    <label for="">
                        <span class="dot_one"></span>
                        <input type="radio" name="r1" value="male" class="gender">
                        <label for="gender" class="gender">Male</label>
                    </label>                    
                    <label for="">
                        <span class="dot_one"></span>
                        <input type="radio" name="r1" class="gender" value="female" >
                        <label for="gender" class="gender">FeMale</label>
                    </label>
                    <label for="">
                        <span class="dot_one"></span>
                        <input type="radio" name="r1" class="gender" value="other">
                        <label for="gender" class="gender">Others</label>
                    </label>
                </div>
            </div>
            <div class="button"> 
                <input type="submit" name="submit"  class="btn" value="Submit" >
            </div>
        </form>
    </div>


</body>
</html>


<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins' , sans-serif;
}

body{
    display:flex ;
    height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background: linear-gradient(135deg,#71b7e6, #9b59b6);
}

.container{
    max-width: 700px;
    width: 100%;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
}

.container .title{
    font-size: 30px;
    font-weight: 500;
    position: relative;
}

.container .title::before{
    content: '';
    background: linear-gradient(135deg,#71b7e6, #9b59b6);
    left: 0;
    bottom: 0;
    position: absolute;
    height: 3px;
    width: 40px;
}

.container form .user-details{
    display: flex;
    justify-content: space-between;
    flex-wrap:  wrap;
    margin:20px 0px 12px 0px ;
}

form .user-details .input-box{
    width: calc(100%/2 - 20px);
    margin-bottom: 17px ;
    font-weight: 500;
}

.user-details .input-box details{
    display: block;
}

.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc ;
    padding-left: 14px;
    font-size: 14px;
    transition: all 0.3s ease;
    border-bottom-width: 3px ;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color: #9b59b6;
}

form .gender-details .gender-title{
    font-weight: 500;
    /* font-size: 20px; */
    position: relative;
}

form .gender-details .category{
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    justify-content: space-between;
    width: 80%;
}

.btn{
    width: 80px;
    border: 2px solid #9b59b6;
    background: #e5e9eb;
    border-radius: 15px;
    padding: 5px;
    flex-wrap: wrap;
    margin-left: calc(100%/2 - 40px);
}

.btn:hover{
    background: linear-gradient(135deg,#71b7e6, #9b59b6);
}

@media (max-width : 584px) {
    .container{
    max-width: 700px;
    }

    form .user-details .input-box{
    width: 100%;
    margin-bottom: 17px ;
    }

    form .gender-details .category{
        width: 100%;
    }

}
</style>

<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = isset($_POST["name"]) ? $_POST["name"] : null;
    $username = isset($_POST["username"]) ? $_POST["username"] : null;
    $email = isset($_POST["email"]) ? $_POST["email"] : null;
    $number = isset($_POST["number"]) ? $_POST["number"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;
    $gender = isset($_POST["r1"]) ? $_POST["r1"] : null;
    $confirmPassword = $_POST["confirmpassword"];
    
    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords do not match.');</script>";
        exit;  // Stop further processing
    }

    if ($name !== null && 
        $username !== null && 
        $email !== null && 
        $number !== null && 
        $password !== null && 
        $gender !== null) {

        $res = mysqli_query($conn, "INSERT INTO `register` (`id`, `name`, `username`, `email`, `number`, `password`, `gender`, `time`) VALUES (NULL, '{$name}', '{$username}', '{$email}', '{$number}', '{$password}', '{$gender}', current_timestamp());");

        if ($res) {
            echo "<script>alert('success');</script>";
        } else {
            echo "<script>alert('Try Again');</script>";
        }
    }
    else {
        echo "<script>alert('Please fill in all the fields');</script>";
    }
}

$conn->close();
?>



<?php include'header.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <form action="submit.php" method="post" autocomplete="off">
            <h2>Contact-us</h2>
            <div class="content">
            <!-- <?php  //  include('loading_spinner.php');  ?> -->

                <div class="input-box">
                    <label for="name">Name</label>
                    <input type="text" name="p_name" id="" placeholder="Enter Name" required>
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" name="p_email" id="" placeholder="Enter Email" required>
                </div>
                <!-- <div class="input-box">
                    <label for="pain">Pain Type</label>
                    <input type="text" name="p_pain" id="" placeholder="Pain Type" required>
                </div> -->
                <div class="input-box">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="p_mob" id="" placeholder="Enter Number" required>
                </div>
                <div class="input-box">
                    <label for="Message">Message</label>
                    <textarea name="p_msg" id="" cols="30" rows="5" placeholder="Enter Message" required></textarea>
                </div>
                <!-- <span class="gender-title">
                    <label for="gender">Gender</label>
                    <div class="gender-category">
                        <input type="radio" name="gender" value="male">
                        <label for="gender">Male</label>
                        <input type="radio" name="gender" value="female">
                        <label for="gender">Female</label>
                    </div>
                </span>

                <span class="appointment-title">
                    <label for="appointment-type">Choose Appointment Type</label>
                    <div class="appointmet-category">
                        <input type="radio" name="appointment" value="home visit">
                        <label for="appointment-name">Home visit</label>
                        <input type="radio" name="appointment" value="clinic">
                        <label for="appointment-name">Clinic</label>
                        <input type="radio" name="appointment" value="Both">
                        <label for="appointment-name">Both</label>
                    </div>
                </span> -->

            </div>
            <div class="button-container">
                <button name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php include'footer.php';?>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Nunito:wght@200;300;400;600;700&display=swap');


    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Nunito',sans-serif;
        /* background-color: t/; */
    }
    body{
        /* display: flex; */
        background-repeat: no-repeat;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    .form-container{
        
        max-width: 650px;
        padding: 28px;
        margin: auto auto;
        margin-bottom: 20px;
        margin-top: 100px;
        box-shadow: 0px 0px 20px 2px #abb2b9;
    }
    h2{
        font-size: 26px;
        font-weight: 600;
        text-align: left;
        color: #2f4f4f;
        padding-bottom: 8px;
        border-bottom: 1px solid silver;
    }
    .content{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding:20px 0;
    }
    .input-box{
        display: flex;
        flex-wrap: wrap;
        padding-bottom: 15px;
        width: 50%;
    }
    .input-box:nth-child(2n){
        justify-content: end;
    }
    .input-box label, .gender-title, .appointment-title{
        width: 95%;
        color: #2f4f4f;
        font-weight: bold;
        margin: 5px 0;
    }
    .input-box label{
        font-size: 15px;
    }
    textarea{
        width: 95%;
        height: 40px;
        padding: 0 10px;
        margin: 2px 0;
        border-radius: 5px;
        border: 2px solid #ff5a3c;
        outline: none;
        padding-top: 10px;
    }
    .gender-title {
        font-size: 16px;
    }
    .appointment-title{
        font-size: 16px;
    }
    .input-box input{
        height: 40px;
        width: 95%;
        padding: 0 10px;
        border-radius: 5px 5px 5px 5px solid #aa076b;
        border: 1px solid #ccc;
        outline: none;
        text-transform: none;
    }

    .input-form{
        font-size: medium;
        border: 4px solid #fff;
        justify-content: space-between;
        border-radius: 5px 5px 5px 5px;
    }
    .input-fm{
        font-size: medium;
        border: 2px solid #aa076b;
        border-radius: 5px 5px 5px 5px;
    }

    .input-box input:is(:focus,:valid){
        box-shadow: 0px 0px 5px  2px #abb2b9;
    }
    textarea:is(:focus,:valid){
        box-shadow: 0px 0px 5px  2px #abb2b9;
    }
    .gender-category{
        color: grey;
    }
    .gender-category label{
        padding: 0 20px 0 5px;
        font-size: 14px;
    }
    .gender-category label ,.gender-category input{
        cursor: pointer;
    }

    .appointmet-category{
        color: grey;
    }
    .appointmet-category label{
        padding: 0 20px 0 5px;
        font-size: 14px;
    }
    .appointmet-category label ,.appointmet-category input{
        cursor: pointer;
    }
    .button-container{
        margin: 15px 0;
    }
    .button-container button{
        width: 100%;
        margin-top: 10px;
        padding: 10px;
        display: block;
        font-size: 20px;
        color: #fff;
        font-weight: 700;
        border: none;
        border-radius: 5px;
        background-color: #ff5a3c;
        /*background-image:linear-gradient(to right ,#f16b1d,#fc6209) ;*/
    }
    .button-container button:hover{
        /*background-image:linear-gradient(to left ,#fc6209, #f16b1d);*/
        box-shadow: 0px 0px 10px 2px gray;
        cursor: pointer;
    }

    /*responsive*/
    @media(max-width:600px){
        .form-container{
            min-width: 280px;
        }
        .content{
            min-height: 380px;
            overflow: auto;
        }
        .input-box{
            margin-bottom: 12px;
            width: 100%;
        }
        .input-box:nth-child(2n){
            justify-content: space-between;
        }
        .gender-category{
            display: flex;
            justify-content: space-between;
            width: 60%;
        }
        .content::-webkit-scrollbar{
            width: 20%;
        }
    }
</style>


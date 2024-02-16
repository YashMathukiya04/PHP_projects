
<?php

    include('db_connection.php');
   

    $con = mysqli_connect($host,$dbUserName,$dbpw,$dbName);

    if(isset($_POST['submit'])){
        
        $paintype = $_POST["appointment"];
        $name = $_POST["p_name"];
        $email = $_POST["p_email"];
        $pain = $_POST["p_pain"];
        $mobile = $_POST["p_mob"];
        $sarnamu = $_POST["p_area"];
        $gender = $_POST["gender"];

        $res = mysqli_query($con,"INSERT INTO home_visit(therapy_type,name,email,pain_type,mobile,address,gender) VALUES('{$paintype}','{$name}','{$email}','{$pain}','{$mobile}','{$sarnamu}','{$gender}')");

        if($res){
            echo "<script>alert('Success');</script>";
            header("Location: homevisit.php");
        }
        else{
            echo "<script>alert('Try Again');</script>";
        }
        
        
        mysqli_close($con);
    }
    else {
        # code...
        echo "<script>alert('Data can't be added');</script>";
    }
?>
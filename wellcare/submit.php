<?php

if(isset($_POST['submit'])){


    $name = $_POST["p_name"];
    $mobile_no = $_POST["p_mob"];
    $email = $_POST["p_email"];
    $message = $_POST["p_msg"];

    
    include('db_connection.php');   

    $sql = "INSERT INTO contact_us(name,mobile_no,email,message) VALUES ('{$name}','{$mobile_no}','{$email}','{$message}' )";
    
    $result = mysqli_query($con, $sql) or die("Query Failed!");

    if($result){
        echo "<script>alert('Success!');</script>";
    }
    header("location: http://localhost//wellcare/cont.php");
}
    mysqli_close($con);
?>
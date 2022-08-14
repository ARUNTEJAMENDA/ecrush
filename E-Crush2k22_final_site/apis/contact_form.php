<?php
    include "../php/config.php";
    $name = $_POST['name'];
    // $date = $_POST['date'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-Y H:i');
    $message = $_POST['message'];
    $email = $_POST['email'];
    $q1 = "INSERT INTO `contact_form` (`name`,`date`,`message`,`email`) values ('$name','$date','$message','$email')";
    if(mysqli_query($con,$q1)){
        echo "Your Message was recorded!!";
        header("refresh:2,../index.php");
    }else{
        echo "Problem in Contact-form-api!! Contact technical support";

    }
?>

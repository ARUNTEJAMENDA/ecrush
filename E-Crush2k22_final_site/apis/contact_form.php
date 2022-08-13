<?php
    include "config.php";
    $name = $_POST['name'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    $email = $_POST['mail'];
    $q1 = "INSERT INTO `suggestions` (`name`,`date`,`message`,`email`) values ('$name','$date','$message','$email')";
    if(mysqli_query($con,$q1)){
        echo "Your Message was recorded.";
    }else{
        echo "Problem in Contact-form-api!! Contact technical support";

    }
?>

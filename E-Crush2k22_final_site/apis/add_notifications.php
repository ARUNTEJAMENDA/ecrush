<?php
    include "../php/config.php";
    $name = $_POST['name'];
    $date = $_POST['date'];
    $link = $_POST['link'];
    $message = $_POST['message'];
    $active = $_POST['active'];
    $q1 = "INSERT INTO `notifications`(`notification_name`, `date`, `message`, `link`, `active`) VALUES ('$name','$date','$message','$link','$active')";
    if(mysqli_query($con,$q1)){
        echo "Notification saved";
        header("location:../admin.php#notifications");
    }else{
        echo "Problem in Notification-saving-api!! Contact technical support";
    }
?>
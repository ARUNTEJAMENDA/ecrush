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
<!-- -----------script for contact page------------ -->
$(document).ready(function(){
    $("send_message").click(function(){
        $.ajax({
            var name = $("#name").val();
            var date = $("#date").val();
            var message = $("#message").val();
            var email = $("#email").val();
            //-------
            url:"contact_form.php",
            method:"post",
            data:{name:name,date:date,message:message,email:email},
            success:function(response){
                alert(response);
            }
        });
    });
});

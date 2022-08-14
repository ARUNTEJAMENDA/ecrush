<?php
    include "../php/config.php";
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-Y H:i');
    // $date = $_POST['date'];
    $message = $_POST['message'];
    $q1 = "INSERT INTO `suggestions` (`date`,`message`) values ('$date','$message')";
    if(mysqli_query($con,$q1)){
        echo "Your Suggestion was recorded.";
        header("refresh:2,../index.php");
    }else{
        echo "Problem in Suggestion-api!! Contact technical support";

    }
?>

<!-- -----------script for suggestions page------------ -->
<!-- $(document).ready(function(){
    $("send_suggestion").click(function(){
        $.ajax({
            var date = $("#date").val();
            var message = $("#message").val();
            //-------
            url:"",
            method:"post",
            data:{date:date,message:message},
            success:function(response){
                alert(response);
            }
        });
    });
}); -->
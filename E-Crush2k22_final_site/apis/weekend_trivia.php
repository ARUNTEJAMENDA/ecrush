<?php 
    include "../php/config.php";
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $date = mysqli_real_escape_string($con,$_POST['date']);
    $link = mysqli_real_escape_string($con,$_POST['link']);
    $winner1 = mysqli_real_escape_string($con,$_POST['winner1']);
    $winner2 = mysqli_real_escape_string($con,$_POST['winner2']);
    $winner3 = mysqli_real_escape_string($con,$_POST['winner3']);
    echo "<br>".$date.".<br>".$active.".<br>";
    $sql = "INSERT INTO `weekend_trivia`(`name`, `date`, `link`, `winner1`, `winner2`, `winner3`) VALUES ('$name','$date','$link','$winner1','$winner2','$winner3')";
    if(mysqli_query($con, $sql)){
        echo "Success";
        header("location:../admin.php#weekend_trivia");
    }else{
        echo "Error";
        die();
    }
?>

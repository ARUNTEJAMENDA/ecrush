<?php 
    include "../php/config.php";
    $sno = $_POST['winners_sno'];
    $winner1 = $_POST['winner1'];
    $winner2 = $_POST['winner2'];
    $winner3 = $_POST['winner3'];
    if(mysqli_query($con, "UPDATE `weekend_trivia` SET `winner1` = '$winner1', `winner2` = '$winner2', `winner3` = '$winner3' WHERE `sno` = $sno")){
        echo ">> Winners >> $sno Updated!!";
        // header("location:../admin.php#week_table");
    }else{
        echo "problem in Updating!! (>> $sno)";
    }
?>
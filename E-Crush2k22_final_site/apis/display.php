<?php 
    include "../php/config.php";
    $table_name = $_POST['table_name'];
    $sno = $_POST['sno'];
    if(mysqli_query($con, "UPDATE `$table_name` SET `winners_display` = 'yes' where `sno` = $sno")){
        echo ">> $table_name >> $sno displayed";
    }else{
        echo "problem in displaying!! ($table_name >> $sno)";
    }
?>
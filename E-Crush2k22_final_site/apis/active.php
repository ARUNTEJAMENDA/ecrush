<?php 
    include "../php/config.php";
    $table_name = $_POST['table_name'];
    $sno = $_POST['sno'];
    if(mysqli_query($con, "UPDATE `$table_name` SET `active` = 'yes' where `sno` = $sno")){
        echo ">> $table_name >> $sno Activated";
    }else{
        echo "problem in activating!! ($table_name >> $sno)";
    }
?>
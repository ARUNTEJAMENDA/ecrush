<?php 
    include "../php/config.php";
    $table_name = $_POST['table_name'];
    if(mysqli_query($con, "UPDATE `$table_name` SET `active` = 'no'")){
        echo ">> $table_name >> deactivated!!";
    }else{
        echo "problem in deactivating!!($table_name)";
    }

?>
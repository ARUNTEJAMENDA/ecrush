<?php
    include "../php/config.php";
    $table_name= $_POST['table_name'];
    $sno= $_POST['sno'];
    //------------
    $query = "DELETE FROM $table_name where sno = '$sno'";
    //-------------
    if(mysqli_query($con,$query)){
        echo "\n".$table_name." >> ".$sno."\n";
        echo "\ndeleted";
    }else{
        echo "delete-api problem";
    }
?>



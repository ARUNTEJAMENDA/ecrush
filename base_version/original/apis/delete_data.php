<?php
    include "../apis/config.php";
    $table_name= $_POST['table_name'];
    $sno= $_POST['sno'];
    $query = "DELETE FROM `$table_name` where `sno` = '$sno'";
    if(mysqli_query($con,$query)){
        echo "deleted";
    }else{
        echo "delete-api problem";
    }
?>

<label>Delete Sno. : </label>
        <select id='week_with_ecrush_option'>
            ".$options1."
        </select>
        <button id='week_with_ecrush' class=\"del\"'>Delete</button>";
<?php
    if($_SESSION('code')=="@#%%+53"){
        include "../php/config.php";
        $query = $_POST['query'];
        if (mysqli_query($con,$query)){
            echo "operation successfully done!!";
        }else{
            echo "problem in query_runner-api";
        }
    }
?>
<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "ecrush";
    $con = mysqli_connect($host,$user,$pass,$dbname);
    if ($con){
        echo "";
        // echo "<script>alert('connected')</script>";
    }
    else{
        // echo "<script>alert('not connected')</script>";
    }
?>
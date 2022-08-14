<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "ecrush";
    $con = mysqli_connect($host,$user,$pass,$dbname) or die(mysqli_connect_error()."Failed to connect to database!!!");
    if ($con){
        // echo "<script>alert('connected')</script>";
        // echo "🥰Happy Vibes onn..!!";
    }
    else{
        // echo "<script>alert('not connected')</script>";
    }
?>
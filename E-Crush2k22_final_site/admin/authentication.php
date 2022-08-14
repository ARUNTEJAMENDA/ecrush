<?php
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    if($id =="peace#90_90"){
        if($pass == "andhonesty#90_90"){
            session_start();
            $_SESSION['code']="@#%+53";
            echo "login success!!";
            header("refresh:2,../admin.php");
        }else{
        echo "wrong pass";
        header("refresh:2,admin/logN574.php");
        }
    }else{
        echo "wrong userid";
        header("refresh:2,../admin/logN574.php");
    }
?>
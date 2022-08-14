<?php
    session_start();
    if($_SESSION['code']=="@#%+53"){
        if(session_unset()){
            echo "logout success!!";
            header("refresh:2,logN574.php");    
        }
    }
?>
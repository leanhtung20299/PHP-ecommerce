<?php
    session_start();
    $gmail = $_SESSION['login'];
    if($gmail){        
        unset($_SESSION['login']);
        echo "$gmail";
        header("Location:homeclient.php");
    }else{
        echo "$gmail . Logout thất bại";
    }
?>
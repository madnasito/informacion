<?php 
    session_start();
    if(isset($_SESSION['admin'])){
        header('Location:user.php');
    }
    header('Location:agree.php');
?>
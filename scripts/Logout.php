<?php

    if(!isset($_SESSION))
        session_start();
    
    if(isset($_POST['logout'])){
        $_SESSION = array();
        header("Location: Home.php");
        session_destroy();
        exit();
    }

?>
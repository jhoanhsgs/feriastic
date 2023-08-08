<?php
    include '../../config.php';
    
    session_start();
    if(isset($_SESSION['sesion_email'])){
        session_destroy();
        header('Location: '.$URL.'/');
    }
    if(isset($_SESSION['sesion_email1'])){
        session_destroy();
        header('Location: '.$URL.'/');
    }
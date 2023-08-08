<?php
include '../../../config.php';

$id_imagen = $_GET['id'];


$sentencia = $pdo->prepare("INSERT INTO tbl_card (fk_imagen) 
            VALUES (:fk_imagen)");

    $sentencia->bindParam('fk_imagen', $id_imagen);
    
    if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se envio la imagen de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/galeria');
    }else{
        session_start();
    $_SESSION['mensaje'] = "No se pudoenviar la imagen";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/galeria');
    }
    
    
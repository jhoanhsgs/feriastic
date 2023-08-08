<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include('../../config.php');

$identificacion = $_POST['identificacion'];
$evento = $_POST['evento1'];
$imagen = $_POST['img'];

$nombreDelArchivo = date("Y-m-d-h-i-s");
$filename = $nombreDelArchivo."__".$_FILES['img']['name'];
$location = "../../../galeria/imagenes/".$filename;

move_uploaded_file($_FILES['img']['tmp_name'],$location);

$sentencia = $pdo->prepare("INSERT INTO tbl_imagenes (fk_evento,fecha_imagen,imagen) VALUES(:fk_evento,:fecha_imagen,:imagen)");

    $sentencia->bindParam('fk_evento',$evento);
    $sentencia->bindParam('fecha_imagen',$fehaHora);
    $sentencia->bindParam('imagen',$filename);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se subio la imagen de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/vista.php');

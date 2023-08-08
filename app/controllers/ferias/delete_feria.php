<?php

include ('../../config.php');

    $id_feria = $_POST['id_feria'];

    $sentencia = $pdo->prepare("DELETE FROM tbl_feria WHERE id_feria=:id_feria");

    $sentencia->bindParam('id_feria',$id_feria);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se elimino la feria de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: '.$URL.'/ferias/');
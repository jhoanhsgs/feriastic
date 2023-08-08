<?php
    
    include('../../config.php');

    $nombre_feria = $_POST['nombre_feria'];
    $nombre_responsable = $_POST['nombre_responsable'];
    $fecha_inicio = $_POST['Fecha_inicio'];
    $fecha_fin = $_POST['Fecha_fin'];
    $descipcion = $_POST['Descipcion'];
    

        $sentencia = $pdo->prepare("INSERT INTO tbl_feria(nombre_feria,responsable,fecha_inicio,fecha_fin,descripcion)       
                VALUES (:nombre_feria, :nombre_responsable, :fecha_inicio,:fecha_fin,:descipcion)");

    $sentencia->bindParam('nombre_feria',$nombre_feria);
    $sentencia->bindParam('nombre_responsable',$nombre_responsable);
    $sentencia->bindParam('fecha_inicio',$fecha_inicio);
    $sentencia->bindParam('fecha_fin',$fecha_fin);
    $sentencia->bindParam('descipcion',$descipcion);

    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Se creo la feria de la manera correcta";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/ferias');

  
<?php


include ('../../config.php');

$nombre_feria = $_POST['nombre_feria'];
$nombre_responsable = $_POST['nombre_responsable'];
$Fecha_inicio = $_POST['Fecha_inicio'];
$Fecha_fin = $_POST['Fecha_fin'];
$Descripcion = $_POST['Descripcion'];
$id_feria = $_POST['id_feria'];

        $sentencia = $pdo->prepare("UPDATE tbl_feria 
            SET 
                nombre_feria =:nombre_feria, 
                responsable =:nombre_responsable, 
                fecha_inicio =:Fecha_inicio, 
                fecha_fin =:Fecha_fin,
                descripcion=:Descripcion
            WHERE id_feria =:id_feria");

        $sentencia->bindParam('nombre_feria',$nombre_feria);
        $sentencia->bindParam('nombre_responsable',$nombre_responsable);
        $sentencia->bindParam('Fecha_inicio',$Fecha_inicio);
        $sentencia->bindParam('Fecha_fin',$Fecha_fin);
        $sentencia->bindParam('Descripcion',$Descripcion);
        $sentencia->bindParam('id_feria',$id_feria);
        if($sentencia->execute()){
            session_start();
            $_SESSION['mensaje'] = "Se actualizo la feria de la manera correcta";
            $_SESSION['icono'] = "success";
            header('Location: '.$URL.'/ferias/');
        }else{
            session_start();
            $_SESSION['mensaje'] = "Error no se pudo actualizar en la base de datos";
            $_SESSION['icono'] = "error";
            header('Location: '.$URL.'/ferias/update.php?id='.$id_feria);
        }

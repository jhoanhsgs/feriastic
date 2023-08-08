<?php


include ('../../config.php');

$nombre_evento = $_POST['nombre_evento'];
$descripcion_evento = $_POST['descripcion_evento'];
$responsable = $_POST['responsable'];
$lugar_evento = $_POST['lugar'];
$modalidad_evento = $_POST['modalidad'];
$Fecha_inicio = $_POST['Fecha_inicio'];
$Fecha_fin = $_POST['Fecha_fin'];
$feria = $_POST['feria'];
$tipo = $_POST['tipo'];
$id_evento = $_POST['id_evento'];

        $sentencia = $pdo->prepare("UPDATE tbl_eventos 
            SET 
                nombre_evento =:nombre_evento, 
                descripcion_evento =:descripcion_evento, 
                responsable_evento =:responsable_evento, 
                fk_lugar_evento =:fk_lugar_evento, 
                fk_modalidad =:fk_modalidad, 
                fecha_inicio =:fecha_inicio, 
                fecha_fin =:fecha_fin,
                fk_feria =:fk_feria,
                fk_tipo_evento =:fk_tipo_evento
            WHERE id_evento =:id_evento");

        $sentencia->bindParam('nombre_evento',$nombre_evento);
        $sentencia->bindParam('descripcion_evento',$descripcion_evento);
        $sentencia->bindParam('responsable_evento',$responsable);
        $sentencia->bindParam('fk_lugar_evento',$lugar_evento);
        $sentencia->bindParam('fk_modalidad',$modalidad_evento);
        $sentencia->bindParam('fecha_inicio',$Fecha_inicio);
        $sentencia->bindParam('fecha_fin',$Fecha_fin);
        $sentencia->bindParam('fk_feria',$feria);
        $sentencia->bindParam('fk_tipo_evento',$tipo);
        $sentencia->bindParam('id_evento',$id_evento);
        if($sentencia->execute()){
            session_start();
            $_SESSION['mensaje'] = "Se actualizo el evento de la manera correcta";
            $_SESSION['icono'] = "success";
            header('Location: '.$URL.'/eventos/');
        }else{
            session_start();
            $_SESSION['mensaje'] = "Error no se pudo actualizar en la base de datos";
            $_SESSION['icono'] = "error";
            header('Location: '.$URL.'/evento/update.php?id='.$id_evento);
        }

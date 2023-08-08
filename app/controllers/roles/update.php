<?php

include('../../config.php');

    $rol = $_POST['rol'];
    $id_rol = $_POST['id_rol'];

        $sentencia = $pdo->prepare("UPDATE tbl_rol 
        SET rol=:rol,
            fyh_actualizacion=:fyh_actualizacion 
        WHERE id_rol=:id_rol");

        $sentencia->bindParam('rol',$rol);
        $sentencia->bindParam('fyh_actualizacion',$fehaHora);
        $sentencia->bindParam('id_rol',$id_rol);
        
        if($sentencia->execute()){
            session_start();
        $_SESSION['mensaje'] = "Se actualizo el rol de la manera correcta";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/roles');
        } else {
            //echo "las contraseñas no coinciden";
        session_start();
        $_SESSION['mensaje'] = "Error no se pudo actualizar en la base de datos";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/roles/update.php?id='.$id_rol);
        }
        

        
 
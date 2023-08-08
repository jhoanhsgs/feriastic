<?php

include('../../config.php');

$email = $_POST['email'];
$evento = $_POST['evento'];
$sql_email="select id_usuario from tbl_usuarios where email='$email'";
        $query_email = $pdo->prepare($sql_email);
        $query_email->execute();
        $datos_email =$query_email->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($datos_email as $email_dato) {
            $id=$email_dato['id_usuario'];
        }

$sql_verificar = "SELECT COUNT(*) AS count FROM tbl_asistencia WHERE fk_personas = :fk_personas AND fk_evento = :fk_evento";
$query_verificar = $pdo->prepare($sql_verificar);
$query_verificar->bindParam(':fk_personas', $id);
$query_verificar->bindParam(':fk_evento', $evento);
$query_verificar->execute();
$resultado = $query_verificar->fetch(PDO::FETCH_ASSOC);

if ($resultado['count'] > 0) {
    // Ya existe un registro para esta persona en esta feria
    // Puedes mostrar un mensaje de error o realizar alguna otra acción apropiada
    session_start();
    $_SESSION['mensaje'] = "Ya existe un registro de asistencia para esta persona en esta feria";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/vista.php');
    exit; // Terminar la ejecución del script
}

        
    $sentencia = $pdo->prepare("INSERT INTO tbl_asistencia
       ( fk_personas, fk_evento, fecha) 
VALUES (:fk_personas,:fk_evento,:fecha)");
    
    $sentencia->bindParam('fk_personas',$id);
    $sentencia->bindParam('fk_evento',$evento);
    $sentencia->bindParam('fecha',$fehaHora);
    if($sentencia->execute()){
        session_start();
        $_SESSION['mensaje'] = "Se subio tu asistencia de la manera correcta";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/vista.php');
    }else{
        session_start();
        $_SESSION['mensaje'] = "Error no se pudo registrar en la base de datos";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/vista.php');
    }
    
    
        


<?php

$id_eventos_get = $_GET['id'];

$sql_eventos = "SELECT * FROM tbl_eventos INNER JOIN tbl_lugar on tbl_eventos.fk_lugar_evento = tbl_lugar.id_lugar 
						INNER JOIN tbl_modalidad on tbl_eventos.fk_modalidad = tbl_modalidad.id_modalidad 
            			INNER JOIN tbl_tipo_evento on tbl_eventos.fk_tipo_evento = tbl_tipo_evento.id_tipo_evento
                        INNER JOIN tbl_feria on tbl_eventos.fk_feria = tbl_feria.id_feria
             WHERE tbl_eventos.id_evento='$id_eventos_get'";
        $query_eventos = $pdo->prepare($sql_eventos);
        $query_eventos->execute();
        $datos_eventos =$query_eventos->fetchAll(PDO::FETCH_ASSOC);
        
foreach ($datos_eventos as $datos_evento){
    $nombre_evento = $datos_evento['nombre_evento'];
    $descripcion = $datos_evento['descripcion_evento'];
    $responsable = $datos_evento['responsable_evento'];
    //lugar
    $lugar = $datos_evento['descripcion_lugar'];
    
    //modalidad
    $modalidad1 = $datos_evento['descripcion_modalidad'];
    
    $Fecha_inicio = $datos_evento['fecha_inicio'];
    $Fecha_fin = $datos_evento['fecha_fin'];
    $feria = $datos_evento['nombre_feria'];
    //tipo
    $tipo = $datos_evento['descripcion_tipo_evento'];
}

 
        //consulta del select lugar
        $sql_lugar ="SELECT * FROM tbl_lugar";
        $query_lugar = $pdo->prepare($sql_lugar);
        $query_lugar->execute();
        $datos_lugar =$query_lugar->fetchAll(PDO::FETCH_ASSOC);
        
        //consulta del select modalidad
        $sql_modalidad ="SELECT * FROM tbl_modalidad";
        $query_modalidad = $pdo->prepare($sql_modalidad);
        $query_modalidad->execute();
        $datos_modalidad =$query_modalidad->fetchAll(PDO::FETCH_ASSOC);
        
        //consulta del select feria
        $sql_feria ="SELECT * FROM tbl_feria";
        $query_feria = $pdo->prepare($sql_feria);
        $query_feria->execute();
        $datos_feria =$query_feria->fetchAll(PDO::FETCH_ASSOC);
        
        //consulta del select tipo
        $sql_tipo ="SELECT * FROM tbl_tipo_evento";
        $query_tipo = $pdo->prepare($sql_tipo);
        $query_tipo->execute();
        $datos_tipo =$query_tipo->fetchAll(PDO::FETCH_ASSOC);
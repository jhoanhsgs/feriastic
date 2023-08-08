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
    $lugar = $datos_evento['descripcion_lugar'];
    $modalidad = $datos_evento['descripcion_modalidad'];
    $feria = $datos_evento['nombre_feria'];
    $tipo = $datos_evento['descripcion_tipo_evento'];
}
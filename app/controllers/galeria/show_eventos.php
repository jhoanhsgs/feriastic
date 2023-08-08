<?php

$id_feria_get = $_GET['id'];

$sql_eventos = "SELECT * FROM tbl_eventos INNER JOIN tbl_feria ON tbl_eventos.fk_feria=tbl_feria.id_feria
WHERE tbl_feria.id_feria='$id_feria_get'";

$query_eventos = $pdo->prepare($sql_eventos);
$query_eventos->execute();
$datos_eventos = $query_eventos->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_eventos as $datos_event) {
    $nombre_feria = $datos_event['nombre_feria'];
    $id_feria = $datos_event['id_feria'];
    
}
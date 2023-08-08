<?php

$id_evento_get = $_GET['id'];

$sql_imagenes = "SELECT * FROM tbl_imagenes INNER JOIN tbl_eventos on tbl_imagenes.fk_evento=tbl_eventos.id_evento
WHERE tbl_eventos.id_evento= '$id_evento_get'";

$query_imagenes = $pdo->prepare($sql_imagenes);
$query_imagenes->execute();
$datos_imagenes = $query_imagenes->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos_imagenes as $datos_imagen) {
    $nombre_imagen = $datos_imagen['nombre_evento'];
    $imagen = $datos_imagen['imagen'];
    
}
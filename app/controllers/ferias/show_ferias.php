<?php

$id_feria_get = $_GET['id'];

$sql_ferias = "SELECT * FROM tbl_feria WHERE id_feria='$id_feria_get'";
        $query_ferias = $pdo->prepare($sql_ferias);
        $query_ferias->execute();
        $datos_ferias =$query_ferias->fetchAll(PDO::FETCH_ASSOC);
        
foreach ($datos_ferias as $datos_feria){
    $nombre_feria = $datos_feria['nombre_feria'];
    $responsable = $datos_feria['responsable'];
    $descripcion = $datos_feria['descripcion'];
}
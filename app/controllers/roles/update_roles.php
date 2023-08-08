<?php

$id_rol_get = $_GET['id'];

$sql_roles = "SELECT * FROM tbl_rol where id_rol='$id_rol_get'";
        $query_roles = $pdo->prepare($sql_roles);
        $query_roles->execute();
        $sql_roles =$query_roles->fetchAll(PDO::FETCH_ASSOC);
        
foreach ($sql_roles as $datos_rol){
    $rol = $datos_rol['rol'];
}
<?php

$id_usuario_get = $_GET['id'];

$sql_usuarios = "SELECT us.id_usuario as id_usuario, us.nombres as nombres, us.email as email, rol.rol as rol 
                  FROM tbl_usuarios as us INNER JOIN tbl_rol as rol ON us.id_rol = rol.id_rol where id_usuario= '$id_usuario_get'";
        $query_usuarios = $pdo->prepare($sql_usuarios);
        $query_usuarios->execute();
        $datos_usuarios =$query_usuarios->fetchAll(PDO::FETCH_ASSOC);
        
foreach ($datos_usuarios as $datos_usuario){
    $nombres = $datos_usuario['nombres'];
    $email = $datos_usuario['email'];
    $roles = $datos_usuario['rol'];
}
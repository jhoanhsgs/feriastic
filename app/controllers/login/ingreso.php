<?php

include('../../config.php');

$email = $_POST['email'];
$password_user = $_POST['password_user'];



$contador = 0;
$sql = "SELECT * FROM tbl_usuarios WHERE email = '$email'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
    $contador = $contador + 1;
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombres'];
    $password_user_tabla = $usuario['password_user'];
    $id_rol = $usuario['id_rol'];
    //$password_user_tabla = $usuario['password_user'];
}
if( ($contador >0) && (password_verify($password_user, $password_user_tabla)) ){
    if($id_rol == 1){
        //echo "Datos correctos";
    session_start();
    $_SESSION['sesion_email'] = $email;
    header('Location: '.$URL.'/index.php');
    }elseif ($id_rol == 2) {
        session_start();
    $_SESSION['sesion_email1'] = $email;
        header('Location: '.$URL.'/aprendiz');
    }
} else {
    echo "Datos incorrectos, vuelva a intentarlo";
    session_start();
    $_SESSION['mensaje'] = "Error datos incorrectos";
    header('Location: '.$URL.'/login');
}




/*$contador = 0;
$sql = "SELECT * FROM tbl_usuarios WHERE email = '$email' and password_user = '$password_user' ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
    $contador = $contador + 1;
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombres'];
    $password_user_tabla = $usuario['password_user'];
}



if($contador ==0){
   echo "Datos incorrectos, vuelva a intentarlo";
    session_start();
    $_SESSION['mensaje'] = "Error datos incorrectos";
    header('Location: '.$URL.'/login');
} else {
    echo "Datos correctos";
    session_start();
    $_SESSION['sesion_email'] = $email;
    header('Location: '.$URL.'/index.php');
}
*/
/*

if( ($contador > 0) && (password_verify($password_user, $password_user_tabla))  ){
    echo "Datos correctos";
    session_start();
    $_SESSION['sesion_email'] = $email;
    header('Location: '.$URL.'/index.php');
}else{
    echo "Datos incorrectos, vuelva a intentarlo";
    session_start();
    $_SESSION['mensaje'] = "Error datos incorrectos";
    header('Location: '.$URL.'/login');
}

*/
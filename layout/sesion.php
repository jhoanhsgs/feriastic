<?php
       
session_start();
if (isset($_SESSION['sesion_email'])) {
    //echo "si existe session de ".$_SESSION['sesion_email'];
    $email_sesion = $_SESSION['sesion_email'];
    $sql = "SELECT * FROM tbl_usuarios WHERE email = '$email_sesion'";
        $query = $pdo->prepare($sql);
        $query->execute();
        $usuarios =$query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($usuarios as $usuario) {
        $nombres_session = $usuario['nombres'];
        }
} else {
    //echo 'no existe session';
    header('Location: '.$URL.'/login');
}





    /*session_start();
        if(isset($_SESSION['session_email'])){
            echo "si existe sesion de ".$_SESSION['session_email'];
            $email_sesion = $_SESSION['session_email'];
            $sql = "SELECT * FROM tbl_usuarios WHERE email = '$email_sesion'";
            $query = $pdo->prepare($sql);
        $query->execute();
        $usuarios =$query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($usuarios as $usuario) {
        $nombres_session = $usuario['nombres'];
    }
        }else{
            echo "no existe sesion";
            //header('location: '.$URL.'/login');
        }
*/
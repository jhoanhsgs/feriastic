<?php

include '../../config.php';

if (isset($_POST['guardar'])) {
    $imagen = $_FILES['imagens']['name'];
    $nombre = $_POST['titulo'];

    if (isset($imagen) && $imagen != "") {
        $tipo = $_FILES['imagens']['type'];
        $tem = $_FILES['imagens']['tmp_name'];

        $sentencia = $pdo->prepare("INSERT INTO imagen prueba (nombre, imagen) VALUES (:titulo, :imagens)");

        $sentencia->bindParam(':titulo', $nombre);
        $sentencia->bindParam(':imagens', $imagen);

        $sentencia->execute();
        session_start();
        $_SESSION['mensaje'] = "insertada con exito";
        $_SESSION['icono'] = "success";
        move_uploaded_file($tem, 'aqui/' . $imagen);
        header('Location: ' . $URL . '/galeria/');
    }
}
?>

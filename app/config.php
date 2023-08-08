<?php
    
define('servidor','localhost');
define('Usuario','root');
define('PASSWORD','');
define('BD','feriastic');

$servidor = "mysql:dbname=".BD.";host=".servidor;

try{
    //para que se conecte a la base de datos
   
    $pdo = new PDO($servidor,Usuario,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //echo "la conexion es exitosa";
}catch(PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}

$URL="http://localhost/feriasof1";

date_default_timezone_set("America/Bogota");
$fehaHora = date('Y-m-d H:i:s');


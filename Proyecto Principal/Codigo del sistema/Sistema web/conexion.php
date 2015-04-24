<?php
function conectarse(){
$servidor="localhost";
$usuario="root";
$password="123456";
$base_de_datos="Web_sis";

$conectar=new mysqli($servidor,$usuario,$password,$base_de_datos)
or die("No se pudo conectar al servidor de BD MYSQL");
return $conectar;
}
$conexion=conectarse();
?>
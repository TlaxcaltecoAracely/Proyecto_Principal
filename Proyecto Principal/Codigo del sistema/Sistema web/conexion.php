<?php
function conectarse(){
$servidor="localhost";
$usuario="root";
$password="";
$base_de_datos="sistema-web";

$conectar=new mysqli($servidor,$usuario,$password,$base_de_datos)
or die("No se pudo conectar al servidor de BD MYSQL");
return $conectar;
}
$conexion=conectarse();
?>
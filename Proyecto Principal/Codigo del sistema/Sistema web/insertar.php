<?php
$nombre=$_POST['nombre'];
$unidades=$_POST['unidades'];
$tipo=$_POST['tipo'];
$talla=$_POST['talla'];
$color=$_POST['color'];
$precio=$_POST['precio'];
$link=mysql_connect("localhost","root","");
mysql_select_db("sistema-web");



//include("conexion.php");
$consulta="INSERT INTO materia_prima (Nombre_Material, Unidades_Disponibles, Tipo_material, Talla, Color, Precio_unidad) VALUES ('$nombre','$unidades','$tipo','$talla','$color','$precio')";
//$ejecutar_consulta=$conexion->query(utf8_encode($consulta));
$ejecutar_consulta=mysql_query($consulta);

if($ejecutar_consulta){
?>
<script>
alert('El registro de la materia se d�o de alta exitosamente');
var pagina="inicio.php"
function redireccionar(){
location.href=pagina
}
setTimeout ("redireccionar()");

</script>


<?php
}else{
?>
<script>
alert('El regitro no se pudo dar de alta,intente de nuevo por favor.);
var pagina="inicio.php"
function redireccionar(){
location.href=pagina
}
setTimeout ("redireccionar()");

</script>

<?php
}


?>
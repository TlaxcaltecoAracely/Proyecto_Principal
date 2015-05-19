<?php
$nombre=$_POST['nombre'];
$unidades=$_POST['unidades'];
$tipo=$_POST['tipo'];
$talla=$_POST['talla'];
$color=$_POST['color'];
$precio=$_POST['precio'];
$link=mysql_connect("localhost","root","123456");
mysql_select_db("web-sis");



//include("conexion.php");
$consulta="INSERT INTO materia_prima (Nombre_Material, Unidades_Disponibles, Tipo_material, Talla, Color, Precio_unidad) VALUES ('$nombre','$unidades','$tipo','$talla','$color','$precio')";
//$ejecutar_consulta=$conexion->query(utf8_encode($consulta));
$ejecutar_consulta=mysql_query($consulta);

if($ejecutar_consulta){
?>
<script>
alert('El registro de la materia se dío de alta exitosamente');
var pagina="mostrar.php"
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
var pagina="incio.php"
function redireccionar(){
location.href=pagina
}
setTimeout ("redireccionar()");

</script>

<?php
}


?>
<?php
$nombre=$_POST['nombre'];
$Numero=$_POST['Numero'];
$Unidades=$_POST['Unidades'];
$Costo=$_POST['Costo'];
$Importe=$_POST['Importe'];
$Fechapedido=$_POST['Fechapedido'];
$Fechaentrega=$_POST['Fechaentrega'];
$cliente=$_POST['cliente'];
$link=mysql_connect("localhost","root","");
mysql_select_db("sistema-web");



//include("conexion.php");
$consulta="INSERT INTO pedidos (Nombre_Pedido, Numero_pedido, Unidades_Requeridas, Costo_unidad, Importe_pedido, Fecha_pedido, Fecha_entrega, Cliente_idCliente) VALUES ('$nombre','$Numero','$Unidades','$Costo','$Importe','$Fechapedido','$Fechaentrega','$cliente')";
//$ejecutar_consulta=$conexion->query(utf8_encode($consulta));
$ejecutar_consulta=mysql_query($consulta);

if($ejecutar_consulta){
?>
<script>
alert('El registro de la materia se dío de alta exitosamente');
var pagina="inicio2.php"
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
var pagina="inicio2.php"
function redireccionar(){
location.href=pagina
}
setTimeout ("redireccionar()");

</script>

<?php
}


?>
<script> 
function confirmar(){ 
var fun="<php echo $ejecu;?>";
confirmar=confirm("¿Esta seguro De Eliminar este Registro?"); 
if (confirmar){ 
// si pulsamos en aceptar
alert('Has dicho que si');
setTimeout ("redireccionar()");
//alert(fun);


}
else {
// si pulsamos en cancelar
alert('Has dicho que no');
fun="";
setTimeout ("redireccionar()"); 
}
}

var pagina="mostrar.php"
function redireccionar(){
location.href=pagina
}

setTimeout ("confirmar()");
</script>


<?php
function ejecutar(){
include("conexion.php");
	
$id=$_GET['id'];
$consulta="DELETE  FROM materia_prima WHERE idMateria_Prima='$id'";
$ejecutar_consulta=$conexion->query($consulta);
}
$ejecu=ejecutar();

?>



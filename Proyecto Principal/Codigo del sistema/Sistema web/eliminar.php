
<?php
function ejecutar(){
include("conexion.php");
	
$id=$_GET['id'];

$consulta="DELETE  from materia_prima WHERE idMateria_Prima='$id'";
$ejecutar_consulta=$conexion->query($consulta);
}
$ejet=ejecutar();
?>


<script> 
function confirmar(){ 
confirmar=confirm("¿Esta seguro De Eliminar este Registro?"); 
if (confirmar){ 
// si pulsamos en aceptar
//alert('Has dicho que si');
setTimeout ("redireccionar()");
}
else {
// si pulsamos en cancelar
//alert('Has dicho que no');
setTimeout ("redireccionar()"); 
}
}
 
var pagina="mostrar.php"
function redireccionar(){
location.href=pagina
}

setTimeout ("confirmar()");
</script>




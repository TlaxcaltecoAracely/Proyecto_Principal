<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];

//echo $usuario.$password;
////

include("conexion.php");

$consulta= "SELECT*FROM usuarios where Usuario='$usuario' AND contrasenia='$password'";
$ejecutar_consulta=$conexion->query($consulta);
if($usuario=="prueba" && $password=="321"){
session_start();
	$_SESSION["autentificado"]=true;
	$_SESSION["usuario"]=$_POST["usuario"];
	$user=$_SESSION["usuario"];
 header('Location: inicio1.php');
}
if($usuario==""){
  ?>
  <script>
  	alert("Debe ingresar un nombre de usuario");
  	var pagina="login.php"
	function redireccionar(){
	location.href=pagina
	}
	setTimeout ("redireccionar()");
  </script>

  <?php 
}
else
	if($password==""){
  ?>
  <script>
  	alert("Debe ingresar una contaseña");
  	var pagina="login.php"
	function redireccionar(){
	location.href=pagina
	}
	setTimeout ("redireccionar()");
  </script>

  <?php 
}
/*else
	if(!preg_match("/^([a-z ñáéíóú]){4,15}+$/i",$usuario)){
	?>
  <script>
  	alert("EL nombre de usuario Solo  permite letras");
  	var pagina="login.php"
	function redireccionar(){
	location.href=pagina
	}
	setTimeout ("redireccionar()");
  </script>

  <?php 

	}*/
else	
if (strlen($usuario)<2){
?>
  <script>
  	alert("EL nombre de usuario debe ser mayor a 2 digitos");
  	var pagina="login.php"
	function redireccionar(){
	location.href=pagina
	}
	setTimeout ("redireccionar()");
  </script>

  <?php 

}	
else
if($ejecutar_consulta->num_rows>0){
while($registro_contacto =$ejecutar_consulta->fetch_assoc()){
      $usuario1=$registro_contacto['Usuario'];
      $password1=$registro_contacto['contrasenia'];
	  $rol=$registro_contacto['rol'];
	  
	   if($usuario1==$usuario && $password1==$password){
    if($ejecutar_consulta->num_rows!=0 and $rol=='Administrador'){	   
	  
	session_start();
	
	$_SESSION["autentificado"]=true;
	$_SESSION["usuario"]=$_POST["usuario"];
	$user=$_SESSION["usuario"];
	header('Location: inicio.php');
	}
	else if($ejecutar_consulta->num_rows!=0 and $rol=='Mostrador'){	   
	  
	session_start();
	
	$_SESSION["autentificado"]=true;
	$_SESSION["usuario"]=$_POST["usuario"];
	$user=$_SESSION["usuario"];
	header('Location: inicio2.php');
	}
	
	}
	}
}
 else
 {
 
/*

if($usuario=='nico' && $password=='123'){
	session_start();
	
	$_SESSION["autentificado"]=true;
	$_SESSION["usuario"]=$_POST["usuario_txt"];
	$user=$_SESSION["usuario"];
	header('Location: inicio.php');
}else{
*/
?>
<script>
alert('usuario y contraseña son incorrectos');
var pagina="login.php"
function redireccionar(){
location.href=pagina
}
setTimeout ("redireccionar()");

</script>


<?php
}
?>

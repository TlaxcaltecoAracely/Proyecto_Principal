<?php

//echo "Bienvenido:".$_SESSION["usuario"];
session_start();

if(isset($_SESSION['usuario'])){ 
	//echo"Puedes ver esta pagina";
?>
<!DOCTYPE>
<html>
<head>
<meta HTTP-EQUIV="Content-Type" content="tex/html; charset=iso-8859-1" />
  <title> Inicio de Sesi&oacute;n </title>
   <style>
   form{

	    margin:0 auto;
		text-align: center;
		width: 780px;
		/color: blue;/
		/*background-color:#F0E68C;*/
	  }
   
    fieldset#dise{
	border: .1em solid blue;
	border-radius: .5em;
	padding: 1em;
	
}
img#imagen{
    /*border: 1.5px solid #469;  */
    max-height: 65px;
    max-width: 85px;

}
img#imagen1{
   
    max-height: 85px;
    max-width: 95px;

}
	  
	  
   </style>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta charset="UTF-8">
  
</head>
<body>
  <center>
  <div class="container">
		<div class="page-header">
			<h1>Ventas de Playeras y Sudaderas<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id='id' href='#'><img src='img/playera.png' id='imagen'></a> <a id='id' href='#'><img src='img/sudadera.jpg' id='imagen1'></a></small></h1>
			
		</div>
	</div>
	<div class="container">
	<div class="page-header">
		<ul class="nav nav-pills">
			<li class="active"><a href="inicio.php">Inicio</a></li>
			<li><a href="#">Playeras</a></li>
			<li><a href="#">Sudaderas</a></li>
			<li><a href="#">Pagos</a></li>
			<li><a href="#">Carrito de compras</a></li>			
			<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			      Cuenta <span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu">
			      <li><a href="opcion1">Configuraci�n</a></li>
			     
			      <li class="divider"></li>
			       <?php echo"<li><a href=salir.php>Cerrar Sesion</a></li>";?>
			    </ul>
			 </li>
			
			
		</ul>
		</div>
	</div>
	<br><br>
	
	<div class="container">
	 <div class="panel panel-default">
	  <div class="panel-body">
       <p class="lead">Bienvenido. Puesdes realizar tus pedidos de sudaderas,playeras y gorras cuando lo requieras.
	</div>
   </div>
</div>   

  <!--  -->
   
   </center>
   <script type="text/javascript" src='js/jquery-2.1.0.js'></script>
   <script type="text/javascript" src='js/bootstrap.min.js'></script>
</body>
</html>  
<?php
}else{?>
<script>
alert('Esta p�gina est� restringida, por favor inicie sesi�n.');
var pagina="login.php"
function redireccionar(){
location.href=pagina
}
setTimeout ("redireccionar()");

</script>
<?php
}
?>

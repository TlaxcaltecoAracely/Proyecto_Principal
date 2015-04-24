<?php

//echo "Bienvenido:".$_SESSION["usuario"];
session_start();

if(isset($_SESSION['usuario'])){ 
	$usuario=$_SESSION['usuario'];
	//echo"Puedes ver esta pagina";
	//echo "bienvenido"."<br>".$_SESSION['usuario'];

?>
<script>
alert('Bienvenido.');
var usuario="<?php $_SESSION['usuario'] ?>";
</script>
	

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
			<h1>Control de Ventas de Playeras y Sudaderas<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id='id' href='#'><img src='img/playera.png' id='imagen'></a> <a id='id' href='#'><img src='img/sudadera.jpg' id='imagen1'></a></small></h1>
			
		</div>
	</div>
	<div class="container">
	<div class="page-header">
		<ul class="nav nav-pills">
			<li class="active"><a href="inicio.php">Inicio</a></li>
			<li><a href="#">Registrar Clientes</a></li>
			<li><a href="#" data-toggle="modal" name="bot" data-target="#myModal">Registrar Materia Prima</a></li>
	
			<li><a href="#">Registrar Pagos por Pedido</a></li>
			<li><a href="#">Registrar Gastos</a></li>
			<li><a href="#">Registrar Empleados</a></li>
			<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			      Cuenta <span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu">
			      <li><a href="opcion1">Configuración</a></li>
			     
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
       <p class="lead">Bienvenido al panel de control de Administración de ventas de sudaderas,playeras y gorras.
	</div>
   </div>
</div>   
<!-- VENTANA MODAL CONTACTO_AÑADIR -->
    <div class="container">
      <div class="modal fade"  data-keyboard="false" data-backdrop="static" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"  aria-hidden="true">X</button>
              <h4  class="alert alert-info" id="myModalLabel">Añadir Expediente Nuevo:</h4>
            </div>
            <div class="modal-body">              
            <!-- FORMULARIO  -->
  
              <form class="form-horizontal" name="formulario" method="POST" action="abogado/altas" class="login" onsubmit="return revisar()">
                    <div class="form-group">
                  <label for="nombre" style="color: blue"class="col-sm-3 control-label">Nombre cliente:</label>
                  <div class="col-sm-8">
                    <input type="text" style="color: orange" class="form-control" name="nombre" placeholder="Nombre de cliente"required>
                  </div>                    
                    </div>

                    <div class="form-group">
                   <label for="especialidad" style="color: blue"class="col-sm-3 control-label">Especialidad:</label>
                   <div class="col-sm-8">
                    <input type="text"  style="color: orange"class="form-control" name="especialidad" placeholder="Especialidad"required>
                   </div>                   
                   </div>

                    <div class="form-group">
                  <label for="nombre_letrado" style="color: blue"class="col-sm-3 control-label">Nombre Letrado:</label>
                  <div class="col-sm-8">
                    <input type="text" style="color: orange"class="form-control" name="nombre_letrado" placeholder="Nombre Letrado"required>
                  </div>                    
                    </div>

 
                    <div class="form-group">
                  <label for="proceso_expediente" style="color: blue"class="col-sm-3 control-label">Proceso Expediente:</label>
                  <div class="col-sm-8">
                    <input type="text" style="color: orange"class="form-control" name="proceso_expediente" placeholder="Proceso Expediente"required>
                  </div>                    
                    </div>

                   

                   <div class="form-group">
                  <label for="fecha_ini" style="color: blue"class="col-sm-2 col-sm-offset-1 control-label">Fecha Inicio:</label>
                  <div class="col-md-8">
                    <input type="date" style="color: orange"class="form-control" name="fecha_ini" placeholder="Fecha de Inicio"required>
                  </div>
                </div>


                  <div class="form-group">
                  <label for="fecha_fin" style="color: blue"class="col-sm-2 col-sm-offset-1 control-label">Fecha Termino:</label>
                  <div class="col-md-8">
                    <input type="date" style="color: orange"class="form-control" name="fecha_fin" placeholder="Fecha de Termino"required>
                  </div>
                </div>
                  
                 <div class="form-group">
                  <label for="organo" style="color: blue"class="col-sm-3 control-label">Organo:</label>
                  <div class="col-sm-8">
                    <input type="text" style="color: orange"class="form-control" name="organo" placeholder="Organo"required>
                  </div>                    
                    </div>

                     <div class="form-group">
                  <label for="localidad" style="color: blue"class="col-sm-3 control-label">Localidad:</label>
                  <div class="col-sm-8">
                    <input type="text" style="color: orange"class="form-control" name="localidad" placeholder="Localidad"required>
                  </div>                    
                    </div>


                     <div class="form-group">
                  <label for="providencia" style="color: blue"class="col-sm-3 control-label">Providencia:</label>
                  <div class="col-sm-8">
                    <input type="text" style="color: orange"class="form-control" name="providencia" placeholder="providencia"required>
                  </div>                    
                    </div>

                 <div class="form-group">
                  <label for="procedimiento" style="color: blue"class="col-sm-3 control-label">Procedimiento:</label>
                  <div class="col-sm-8">
                    <input type="text" style="color: orange"class="form-control" name="procedimiento" placeholder="Procedimiento"required>
                  </div>                    
                    </div>


                     <div class="form-group">
                  <label for="importe" style="color: blue"class="col-sm-3 control-label">Importe:</label>
                  <div class="col-sm-8">
                    <input type="text" style="color: orange"class="form-control" name="importe" placeholder="Importe"required>
                  </div>                    
                    </div>

                
                 <div class="alert alert-info" >
                 <div class="modal-footer">
    
              <button type="submit" class="btn  btn-primary" name="insertar">Guardar</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
            </form>
             
        </div>
      </div>      
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
alert('Esta página está restringida, por favor inicie sesión.');
var pagina="login.php"
function redireccionar(){
location.href=pagina
}
setTimeout ("redireccionar()");

</script>
<?php
}
?>

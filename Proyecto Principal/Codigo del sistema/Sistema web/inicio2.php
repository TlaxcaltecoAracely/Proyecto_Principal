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
			<h1>Control de Ventas de Playeras y Sudaderas<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id='id' href='#'><img src='img/playera.png' id='imagen'></a> <a id='id' href='#'><img src='img/sudadera.jpg' id='imagen1'></a></small></h1>
			
		</div>
	</div>
	<div class="container">
	<div class="page-header">
		<ul class="nav nav-pills">
			<li class="active"><a href="inicio2.php">Inicio</a></li>
			<li><a href="opcion2" data-toggle="modal" name="bot" data-target="#myModal">Registrar Pedido</a></li>
			<li><a href="#">Modificar pedido</a></li>
			<li><a href="#">Cancelar pedido</a></li>				
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
<!-- VENTANA REGISTRAR MATERIA PRIMA -->
    <div class="container">
      <div class="modal fade"  data-keyboard="false" data-backdrop="static" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"  aria-hidden="true">X</button>
              <h4  class="alert alert-info" id="myModalLabel">Registrar pedido del cliente:</h4>
            </div>
            <div class="modal-body">              
            <!-- FORMULARIO  -->
  
              <form class="form-horizontal" name="formulario" method="POST" action="insertar3.php" class="login" onsubmit="return revisar()">
                   

                    <div class="form-group">
                   <label for="especialidad" style="color: blue"class="col-sm-3 control-label">Nombre_pedido:</label>
                   <div class="col-sm-6">
                    <input type="text"  style="color: orange"class="form-control" name="nombre" placeholder="Nombre de la materia"required>
                   </div>                   
                   </div>

                    <div class="form-group">
                  <label for="nombre_letrado" style="color: blue"class="col-sm-3 control-label">Numero_pedido:</label>
                  <div class="col-sm-6">
                    <input type="text" style="color: orange"class="form-control" name="Numero" placeholder="Cantidad de materia disponible"required>
                  </div>                    
                    </div>

 
                    <div class="form-group">
                  <label for="proceso_expediente" style="color: blue"class="col-sm-3 control-label">Unidades_Requeridas:</label>
                  <div class="col-sm-6">
                    <input type="text" style="color: orange"class="form-control" name="Unidades" placeholder="Tipo"required>
                  </div>                    
                    </div>

                   

                   <div class="form-group">
                  <label for="text" style="color: blue"class="col-sm-2 col-sm-offset-1 control-label">Costo_unidad:</label>
                  <div class="col-md-6">
                    <input type="text" style="color: orange"class="form-control" name="Costo" placeholder="Talla de materia"required>
                  </div>
                </div>


                  <div class="form-group">
                  <label for="text" style="color: blue"class="col-sm-2 col-sm-offset-1 control-label">Importe_pedido:</label>
                  <div class="col-md-6">
                    <input type="text" style="color: orange"class="form-control" name="Importe" placeholder="Color"required>
                  </div>
                </div>
                  
                 <div class="form-group">
                  <label for="organo" style="color: blue"class="col-sm-3 control-label">Fecha_pedido:</label>
                  <div class="col-sm-6">
                    <input type="text" style="color: orange"class="form-control" name="Fechapedido" placeholder="Precio"required>
                  </div>                    
                    </div>   

                  <div class="form-group">
                  <label for="organo" style="color: blue"class="col-sm-3 control-label">Fecha_entrega:</label>
                  <div class="col-sm-6">
                    <input type="text" style="color: orange"class="form-control" name="Fechaentrega" placeholder="Precio"required>
                  </div>                    
                    </div>   
                 
                  <div class="form-group">
                  <label for="organo" style="color: blue"class="col-sm-3 control-label">Cliente_idCliente:</label>
                  <div class="col-sm-6">
                    <input type="text" style="color: orange"class="form-control" name="cliente" placeholder="Precio"required>
                  </div>                    
                    </div>   				 
                          
                               
            
              <div>
					
                     <button type="submit" class="btn  btn-primary" name="insertar">Guardar</button>
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					
            </div>
			 
            </form>
             
        </div>
      </div>      
    </div>  

  </div>      
</div>


  <!--  --> 

  <!--  -->
   
   </center>
   <script type="text/javascript" src='js/jquery-2.1.0.js'></script>
   <script type="text/javascript" src='js/bootstrap.min.js'></script>
</body>
</html>  
<?php
}
else
{?>
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

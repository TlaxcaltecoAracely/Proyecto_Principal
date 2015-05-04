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
<meta HTTP-EQUIV="Content-Type" content="tex/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta charset="UTF-8">

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
			
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Materia Prima
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			<li><a href="opcion2" data-toggle="modal" name="bot" data-target="#myModal">Registrar Materia Prima</a></li>
			<li class="divider"></li>
			       <?php echo"<li><a href=mostrar.php>Consultar Todo</a></li>";?>
			 </ul>
			</li>
			 
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
	
	

<!-- VENTANA REGISTRAR MATERIA PRIMA -->
    <div class="container">
      <div class="modal fade"  data-keyboard="false" data-backdrop="static" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"  aria-hidden="true">X</button>
              <h4  class="alert alert-info" id="myModalLabel">Añadir Materia nueva:</h4>
            </div>
            <div class="modal-body">              
            <!-- FORMULARIO  -->
  
              <form class="form-horizontal" name="formulario" method="POST" action="insertar2.php" class="login" onsubmit="return revisar()">
                   

                    <div class="form-group">
                   <label for="especialidad" style="color: blue"class="col-sm-3 control-label">Nombre_Material:</label>
                   <div class="col-sm-6">
                    <input type="text"  style="color: orange"class="form-control" name="nombre" placeholder="Nombre de la materia"required>
                   </div>                   
                   </div>

                    <div class="form-group">
                  <label for="nombre_letrado" style="color: blue"class="col-sm-3 control-label">Unidades_Disponibles:</label>
                  <div class="col-sm-6">
                    <input type="text" style="color: orange"class="form-control" name="unidades" placeholder="Cantidad de materia disponible"required>
                  </div>                    
                    </div>

 
                    <div class="form-group">
                  <label for="proceso_expediente" style="color: blue"class="col-sm-3 control-label">Tipo_Material:</label>
                  <div class="col-sm-6">
                    <input type="text" style="color: orange"class="form-control" name="tipo" placeholder="Tipo"required>
                  </div>                    
                    </div>

                   

                   <div class="form-group">
                  <label for="text" style="color: blue"class="col-sm-2 col-sm-offset-1 control-label">Talla:</label>
                  <div class="col-md-6">
                    <input type="text" style="color: orange"class="form-control" name="talla" placeholder="Talla de materia"required>
                  </div>
                </div>


                  <div class="form-group">
                  <label for="text" style="color: blue"class="col-sm-2 col-sm-offset-1 control-label">Color:</label>
                  <div class="col-md-6">
                    <input type="text" style="color: orange"class="form-control" name="color" placeholder="Color"required>
                  </div>
                </div>
                  
                 <div class="form-group">
                  <label for="organo" style="color: blue"class="col-sm-3 control-label">Precio_Unidad:</label>
                  <div class="col-sm-6">
                    <input type="text" style="color: orange"class="form-control" name="precio" placeholder="Precio"required>
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
 
   
   </center>
   <script type="text/javascript" src='js/jquery-2.1.0.js'></script>
   <script type="text/javascript" src='js/bootstrap.min.js'></script>
</body>
</html>  



<!-- fin de codigo--->
<?php
	
	$mysqli=new mysqli("localhost","root","123456","Web-sis"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	//else{
	//echo"Felicidaddes se logro la conexion";}
?>
<?php

	$query="SELECT idMateria_Prima, Nombre_Material, Unidades_Disponibles, Tipo_material, Talla, Color, Precio_unidad	FROM materia_prima";
	 $resultado=$mysqli->query($query);
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta charset="UTF-8">


<!-- TABLA DE MATERIA REGISTRADA -->
	<div class="container">
		<div class="row">
			<br>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Material Registrado</div>
					<table class="table table-bordered table-condensed table-hover">
					
				<!-- Inicion del codigo de la Tabla-->	
				
						<thead>
							<tr class="warning">
							    
								<th>idMateria_prima</th>
								<th>Nombre_Material</th>
								<th>Unidades_Disponibles</th>
								<th>Talla</th>
								<th>Color</th>
								<th>Precio_unidad</th>
								<th> </th>
								<th> </th>
							</tr>	
							
						</thead>				
						
						<tbody>
						
						<?php while($row=$resultado->fetch_assoc()){ ?>
						
						
							<tr>
							<!--para que puedas tienes que me terlo en detalles y que muestr la tabla-->
							    <td class="success">
								<?php echo $row['idMateria_Prima'];?>
							    </td>
								
						
								<td> <?php echo $row['Nombre_Material'];?></td>
								<td><?php echo $row['Unidades_Disponibles']; ?></td>
								<td><?php echo $row['Talla']; ?></td>
								<td><?php echo $row['Color']; ?></td>
								<td><?php echo $row['Precio_unidad']; ?></td>						
								<td class="success">
								<a href="modificar.php">Modificar</a>
							    </td>
								<td class="success">
								
								<a  href="eliminar.php?id=<?php echo $row['idMateria_Prima'];?>">Eliminar</a>
							    </td>
					
								
							</tr>
							<?php } ?>
						</tbody>	
									
					</table>							
				</div>
			</div>
		</div>
	</div>
	<!-- FIN DE TABLA -->
	
	
	 <!--  --> 
 
   
    

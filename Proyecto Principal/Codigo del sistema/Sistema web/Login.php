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
	  
   </style>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta charset="UTF-8">
  
</head>
<body>
  <center>
  <div class="container">
		<div class="page-header">
			<h1>Control de Ventas de Playeras y Sudaderas<small> </small></h1>
		</div>
	</div>
	<div class="container">
	<div class="page-header">
		<ul class="nav nav-pills">
			<li><a href="#">Registrar Clientes</a></li>
			<li><a href="#">Registrar Materia Prima</a></li>
			<li><a href="#">Registrar Pagos por Pedido</a></li>
			<li><a href="#">Registrar Gastos</a></li>
			<li><a href="#">Registrar Empleados</a></li>
			
		</ul>
		</div>
	</div>
	<br><br>

  <!--  -->
   
   <div class="container">
      <div class=row>
	   <form class="form-horizontal" role="form" action="validar.php" method= "POST">
	     <fieldset  id="dise">
					<h1>Iniciar Sesi&oacute;n 
					</h1>
		    
				<div class= "form-group">
					<label for="password" class="col-md-2 col-md-offset-3 control-label"> Usuario:
					</label>
					<div class="col-md-3">
						<input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario" required>
					</div>
					
				</div>
				
				<div class="form-group">
				    <label for="password" class="col-md-2 col-md-offset-3 control-label"> Contraseña:
					</label>
					<div class="col-md-3">
					   <input type="password" class="form-control" name="password" placeholder="contraseña" required>
					</div>
				</div>
				
				
				
				<div class="row">
			<div class="col-md-14">
				
				<button type="submit" class="btn btn-primary ">Entrar
				</button>	
				<button  type="reset" class="btn btn-danger ">Cancelar</button>
					
			</div>
			
		</div>
		
			</fieldset>
	   </form>
	  </div>
   </div>
   <label>cuenta de cliente/Usuario:prueba/contraseña:321</label>
   </center>
</body>
</html>  
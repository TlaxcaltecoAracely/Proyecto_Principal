<?php
  
  $query="SELECT idMateria_Prima, Nombre_Material, Unidades_Disponibles, Tipo_material, Talla, Color, Precio_unidad	FROM materia_prima";
  $resultado=$mysqli->query($query);
?>  
         

		 <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"  aria-hidden="true">X</button>
              <h4  class="alert alert-info" id="myModalLabel">Añadir Materia nueva:</h4>
            </div>
            <div class="modal-body">              
            <!-- FORMULARIO  -->
  
              <form class="form-horizontal" name="formulario" method="POST" action="insertar.php" class="login" onsubmit="return revisar()">
                   

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
             
       
<?php
require_once("Models/Perfil.php");

require_once("Views/templates/header.php");
require_once("Views/templates/menu.php");
$perfil = new Perfil();
$datos = $perfil->listar();
?>


<div class="row">
	<div class="col-md-8 offset-md-3">
			<form action="procesar.php" method="post">
				<div class="row">

					<div class="col-md-4">
						<label>Nombre</label>
						<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Name" name="nombre">
					</div>

					<div class="col-md-4">
						<label>Apellido</label>
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Apellido" name="apellido">
					</div>
				</div>

				<br>

				<div class="row">
					<div class="col-md-4">
						<label>Usuario</label>
						<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Usuario" name="usuario">
					</div>

					<div class="col-md-4">
						<label>Clave</label>
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Clave" name="clave">
					</div>
				</div>

				<br>

				<div class="row">
					<div class="col-md-4 offset-md-2">
						<label>Perfil</label>
						<select class="form-control form-control-sm" name="perfil">
							<?php
								
								foreach ($datos as $dato) {
									echo "<option>".  $dato['nombre']."</option>";
								}

							?>
						</select>
					</div>
				</div>

				<br>
				<div class="offset-md-3">
					<button type="submit" class="btn btn-primary" name="btn_registro">Registrar</button>
				</div>
				
			</form>
	</div>

</div>
<?php

require_once("Views/templates/footer.php");

?>
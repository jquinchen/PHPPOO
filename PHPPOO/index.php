<?php
require_once("Views/templates/header.php");
require_once("Views/templates/menu.php");
?>

<div class="row">
	<div class="col-md-4 offset-md-4">
			<form method="post" action="procesar.php">
  				<div class="form-group">
   				 <label for="exampleInputEmail1">Usuario</label>
  				 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User" name="usuario">
  				</div>

		  		<div class="form-group">
		  		  <label for="exampleInputPassword1">Clave</label>
		 		  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="clave">
		  		</div>

		  		<button type="submit" class="btn btn-primary" name="btn_ingreso">Submit</button>
			</form>
	</div>

</div>

<?php
require_once("Views/templates/footer.php");
?>
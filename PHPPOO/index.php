<?php
include ("Models/Persona.php");
	$javier = new Persona("Javier", "Quinchen", "11-05-1999");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Clase Persona</title>
</head>
<body>

<h1>Persona</h1>
<br>
<h4>Nombre: </h4>
	<?php
	echo $javier->getNombre() ." " ;  
	echo $javier->getApellido() . " <br> ";
	?>
<h4>Fecha de Nacimiento: </h4>
	<?php
	echo $javier->getFecha();
	//$javier->add();
	?>
</body>
</html>
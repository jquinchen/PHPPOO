<?php
require_once("Models/Perfil.php");
require_once("Models/Usuario.php");


if (isset($_POST['btn_registro'])) {
	

	$usuario = new Usuario();
	$perfil = new Perfil();

	//Buscar ID_PERFIL -> $id_perfil
		$nombre_perfil = $_POST['perfil'];
		$perfil->setNombre($nombre_perfil);
		$resultado = $perfil->buscar_por_nombre();
	
		foreach ($resultado as $dato) {
			$id_perfil =  $dato['id_perfil'];
		}
		$usuario->setPerfil($id_perfil);
		

	$nombre = $_POST['nombre'];
		$usuario->setNombre($nombre);

	$apellido = $_POST['apellido'];
		$usuario->setApellido($apellido);

	$usuario_name = $_POST['usuario'];
		$usuario->setUsuario($usuario_name);
		
	$clave = $_POST['clave'];
	$clave_md5 = md5($clave);
		$usuario->setClave($clave_md5);

	$usuario->agregar_usuario();

}
if (isset($_POST['btn_ingreso'])) {
	$usuario = new Usuario();

	$usuario_ing = $_POST['usuario'];
	$clave = $_POST['clave'];
		$clave_md5 = md5($clave);

	$usuario->setUsuario($usuario_ing);
	$usuario->setClave($clave_md5);
	$datos = $usuario->validar_usuario();
	foreach ($datos as $dato) {
			$dato_nombre =  $dato['nombre'];
			$dato_apellido = $dato['apellido'];
	}

	if ($dato_nombre != "") {
		header('Location: home.php');
	}
	

	
} 

?>
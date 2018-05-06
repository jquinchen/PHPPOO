<?php
 require_once("Conexion.php");

class Usuario
{
    public $id_usuario;
    public $nombre;
	public $apellido;
    public $usuario;
    public $clave;
    public $perfil;

	public $fecha;
    private $con;

/*Constructor*/
public function __construct()
  {
      $this->con = new Conexion();
      $this->id_usuario= $id_usuario;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->usuario= $usuario;
      $this->clave = $clave;
      $this->perfil = $perfil;
      $this->fecha = $fecha;
  }


/*GETTER SETTER*/
    
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

    }

    public function getClave()
    {
        return $this->clave;
    }


    public function setClave($clave)
    {
        $this->clave = $clave;

    }
    
    public function getPerfil()
    {
        return $this->perfil;
    }

    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

    }

/*FUNCIONES*/

    public function agregar_usuario(){
            $sql = "INSERT INTO Usuarios(nombre, apellido, usuario, clave, perfil, fecha)
            VAlUES ('{$this->nombre}', '{$this->apellido}', '{$this->usuario}', '{$this->clave}', '{$this->perfil}',
            NOW() )";
            $this->con->consultaSimple($sql);
    }

    public function validar_usuario(){
        $sql="SELECT * FROM Usuarios WHERE usuario = '{$this->usuario}' && clave = '{$this->clave}' ";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
    }
    

    
}
 

?>
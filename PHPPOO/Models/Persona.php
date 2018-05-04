<?php
 require_once("Conexion.php");

class Persona
{
    public $nombre;
	public $apellido;
	public $fecha;
    private $con;

/*Constructor*/
public function __construct($nombre, $apellido, $fecha)
  {
      $this->con = new Conexion();
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->fecha = $fecha;
  }


/*GETTER SETTER*/


    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }
    public function add(){
            $sql = "INSERT INTO estudiantes(nombre, apellido, fecha)
            VAlUES ('{$this->nombre}', '{$this->apellido}', NOW() )";
            $this->con->consultaSimple($sql);
        }
}
 

?>
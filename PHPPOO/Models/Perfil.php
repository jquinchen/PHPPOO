<?php
 require_once("Conexion.php");

class Perfil
{
    public $id_perfil;
    public $nombre;
    private $con;

/*Constructor*/
public function __construct()
  {
      $this->con = new Conexion();
  }

/*GETTER SETTER*/

    public function getIdPerfil()
    {
        return $this->id_perfil;
    }
    public function setIdPerfil($id_perfil)
    {
        $this->id_perfil = $id_perfil;

    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


/*FUNCIONES*/
    public function listar(){
        $sql = "SELECT * FROM Perfil";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
    }
    public function buscar_por_nombre(){
        $sql = "SELECT * FROM Perfil WHERE nombre= '{$this->nombre}'";
        $id_perfil = $this->con->consultaRetorno($sql);
        return $id_perfil;
    }

   

    

}
 

?>
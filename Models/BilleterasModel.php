<?php

class BilleterasModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=operaciones_airtm;charset=utf8', 'root', '');
    }

    function GetBilleteras(){
        $sentencia = $this->db->prepare("SELECT * FROM billetera");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetBilletera($id){
      $sentencia = $this->db->prepare("SELECT * FROM billetera WHERE id=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_OBJ);
  }

  function EditarBilletera($id,$nombre,$comision_unica,$comision_porcentual){
    $sentencia = $this->db->prepare("UPDATE billetera SET nombre=?,comision_unica=?,comision_porcentual=? WHERE id=?");
    $sentencia->execute(array($nombre,$comision_unica,$comision_porcentual,$id));
}  

    public function AgregarBilletera($nombre,$comision_unica,$comision_porcentual){
        $sentencia = $this->db->prepare("INSERT INTO billetera(nombre,comision_unica,comision_porcentual) VALUES(?,?,?)");
        $sentencia->execute(array($nombre,$comision_unica,$comision_porcentual));
    }

    public function EliminarBilletera($id){
        $sentencia = $this->db->prepare("DELETE FROM billetera WHERE id=?");
        $sentencia->execute(array($id));
    }
}

?>

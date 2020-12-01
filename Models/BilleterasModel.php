<?php



include "./config.php";



class BilleterasModel {



    private $db;



    function __construct(){

        include "./config.php";

        $this->db = new PDO('mysql:host='.$localhost.';dbname='.$name.';charset=utf8', $user, $pass);

    }



    function GetBilleteras(){
        $sentencia = $this->db->prepare("SELECT * FROM billetera");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetMonedas(){
        $sentencia = $this->db->prepare("SELECT * FROM monedas ORDER BY id ASC");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetMoneda($moneda){
        $sentencia = $this->db->prepare("SELECT * FROM monedas WHERE id = ?");
        $sentencia->execute(array($moneda));
      return $sentencia->fetch(PDO::FETCH_OBJ);
    }    


    function GetBilletera($id){
      $sentencia = $this->db->prepare("SELECT * FROM billetera WHERE id=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_OBJ);
  }


  function EditarBilletera($id,$nombre,$comision_unica,$comision_porcentual,$comision_minima,$imagen = null){
    $pathImg = null;
        if ($imagen){
            $pathImg = $this->uploadImage($imagen);
            $sentencia = $this->db->prepare("UPDATE billetera SET nombre=?,comision_unica=?,comision_porcentual=?,comision_minima=?,imagen=? WHERE id=?");
            $sentencia->execute(array($nombre,$comision_unica,$comision_porcentual,$comision_minima,$pathImg,$id));
        }else{
            $sentencia = $this->db->prepare("UPDATE billetera SET nombre=?,comision_unica=?,comision_porcentual=?,comision_minima=?,imagen=? WHERE id=?");
            $sentencia->execute(array($nombre,$comision_unica,$comision_porcentual,$comision_minima,$imagen,$id));
        }
    }


    public function AgregarBilletera($nombre,$comision_unica,$comision_porcentual,$comision_minima, $imagen = null){
        $pathImg = null;
        if ($imagen){
            $pathImg = $this->uploadImage($imagen);
            $sentencia = $this->db->prepare("INSERT INTO billetera(nombre,comision_unica,comision_porcentual,comision_minima, imagen) VALUES(?,?,?,?,?)");
            $sentencia->execute(array($nombre,$comision_unica,$comision_porcentual,$comision_minima, $pathImg));
        }else{
            $sentencia = $this->db->prepare("INSERT INTO billetera(nombre,comision_unica,comision_porcentual,comision_minima) VALUES(?,?,?,?)");
            $sentencia->execute(array([$nombre,$comision_unica,$comision_porcentual,$comision_minima]));
        }
    }

    private function uploadImage($image){
        $target = 'imgs/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }




    public function EliminarBilletera($id){
        $sentencia = $this->db->prepare("DELETE FROM billetera WHERE id=?");
        $sentencia->execute(array($id));
    }

}

?>
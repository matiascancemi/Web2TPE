<?php

class TransaccionesModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=operaciones_airtm;charset=utf8', 'root', '');
    }

    public function GetTransacciones(){
        $sentencia = $this->db->prepare("SELECT * FROM transaccion INNER JOIN billetera ON transaccion.id_billetera = billetera.id");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function GetTransaccionesPorBilletera($id_billetera){
        $sentencia = $this->db->prepare("SELECT * FROM transaccion INNER JOIN billetera ON transaccion.id_billetera = billetera.id WHERE billetera.id = ?");
        $sentencia->execute(array($id_billetera));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }    

    public function GetTransaccion($id){
      $sentencia = $this->db->prepare("SELECT * FROM transaccion INNER JOIN billetera ON transaccion.id_billetera = billetera.id AND id_tns=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_OBJ);
  }

    public function AgregarTransaccion($id_billetera,$fecha,$fecha_tns,$tipo_de_operacion,$saldo_enviar,$saldo_recibir,$tipo_cambio,$ganancia){
        $ganancia = $this->CalcularGanancia($id_billetera,$tipo_de_operacion,$saldo_enviar,$saldo_recibir);
        $sentencia = $this->db->prepare("INSERT INTO transaccion(id_billetera,fecha,fecha_tns,tipo_de_operacion,saldo_enviar,saldo_recibir,tipo_cambio,ganancia) VALUES(?,?,?,?,?,?,?,?)");
        $sentencia->execute(array($id_billetera,$fecha,$fecha_tns,$tipo_de_operacion,$saldo_enviar,$saldo_recibir,$tipo_cambio,$ganancia));
    }

    public function EditarTransaccion($id_tns,$id_billetera,$fecha,$fecha_tns,$tipo_de_operacion,$saldo_enviar,$saldo_recibir,$tipo_cambio,$ganancia){
        $ganancia = $this->CalcularGanancia($id_billetera,$tipo_de_operacion,$saldo_enviar,$saldo_recibir);  
        $sentencia = $this->db->prepare("UPDATE transaccion SET id_billetera=?,fecha=?,fecha_tns=?,tipo_de_operacion=?,saldo_enviar=?,saldo_recibir=?,tipo_cambio=?,ganancia=? WHERE id_tns=?");
        $sentencia->execute(array($id_billetera,$fecha,$fecha_tns,$tipo_de_operacion,$saldo_enviar,$saldo_recibir,$tipo_cambio,$ganancia,$id_tns));
    }      

    public function EliminarTransaccion($id){
        $sentencia = $this->db->prepare("DELETE FROM transaccion WHERE id_tns=?");
        $sentencia->execute(array($id));
    }

    private function CalcularGanancia($id,$tipo_de_operacion,$saldo_enviar,$saldo_recibir){
        $ganancias = $this->db->prepare("SELECT comision_unica, comision_porcentual FROM billetera WHERE id = ?");
        $ganancias->execute(array($id));
        $resultado = $ganancias->fetchAll(PDO::FETCH_OBJ);
        foreach($resultado as $item) {
			$com_unica = $item->comision_unica;
            $com_porcentual = (1 - $item->comision_porcentual);
            if ($tipo_de_operacion == "Retiro"){
                $ganancia = (($saldo_recibir - $com_unica) * $com_porcentual) - $saldo_enviar;
            }else{
                $ganancia = ($saldo_recibir - $saldo_enviar);
            }
        }
        return $ganancia;
    }

}

?>
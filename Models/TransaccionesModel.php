<?php



class TransaccionesModel
{

    private $db;

    function __construct()
    {
        include "./config.php";
        $this->db = new PDO('mysql:host=' . $localhost . ';dbname=' . $name . ';charset=utf8', $user, $pass);
    }

    public function GetTransacciones($usuario)
    {
        $sentencia = $this->db->prepare("SELECT * FROM transaccion WHERE id_usuario = ? ORDER BY id_tns DESC");
        $sentencia->execute(array($usuario));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function GetTransaccionesAdmin()
    {
        $sentencia = $this->db->prepare("SELECT * FROM transaccion ORDER BY id_tns DESC");
        $sentencia->execute(array());
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }    

    public function GetTransaccionesPorFecha($usuario, $desde, $hasta, $id_billetera)
    {
        if (isset($id_billetera)) {
            $sentencia = $this->db->prepare("SELECT * FROM transaccion WHERE id_usuario = ? AND id_billetera = ? AND fecha_tns >= ? AND fecha_tns <= ? ORDER BY id_tns DESC");
            $sentencia->execute(array($usuario, $id_billetera, $desde, $hasta));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        } else {
            $sentencia = $this->db->prepare("SELECT * FROM transaccion WHERE id_usuario = ? AND fecha_tns >= ? AND fecha_tns <= ? ORDER BY id_tns DESC");
            $sentencia->execute(array($usuario, $desde, $hasta));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
    }



    // VER TRANSACCIONES POR BILLETERA //
    public function GetTransaccionesPorBilletera($id_billetera, $usuario)
    {
        $sentencia = $this->db->prepare("SELECT * FROM transaccion INNER JOIN billetera ON transaccion.id_billetera = billetera.id WHERE billetera.id = ? AND id_usuario = ? ORDER BY id_tns DESC");
        $sentencia->execute(array($id_billetera, $usuario));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }




    // VER TRANSACCIONES DE USUARIO POR ID //
    public function GetTransaccion($id, $id_usuario)
    {
        $sentencia = $this->db->prepare("SELECT * FROM transaccion WHERE id_tns=? AND id_usuario = ?");
        $sentencia->execute(array($id, $id_usuario));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }



    // SALTO DE RESTRICCIÓN DE USUARIOS PARA ADMIN //
    public function GetTransaccionAdmin($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM transaccion WHERE id_tns=?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }




    // AGREGAR TRANSACCIÓN //
    public function AgregarTransaccion($id_billetera, $id_usuario, $fecha, $fecha_tns, $tipo_de_operacion, $saldo_enviar, $saldo_recibir, $tipo_cambio, $ganancia, $moneda, $valor_de_moneda)
    {
        $sentencia = $this->db->prepare("INSERT INTO transaccion(id_billetera,id_usuario,fecha,fecha_tns,tipo_de_operacion,saldo_enviar,saldo_recibir,tipo_cambio,ganancia,moneda,valor_de_moneda) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
        $sentencia->execute(array($id_billetera, $id_usuario, $fecha, $fecha_tns, $tipo_de_operacion, $saldo_enviar, $saldo_recibir, $tipo_cambio, $ganancia, $moneda, $valor_de_moneda));
    }



    public function EditarTransaccion($id_tns, $id_billetera, $id_usuario, $fecha, $fecha_tns, $tipo_de_operacion, $saldo_enviar, $saldo_recibir, $tipo_cambio, $ganancia, $moneda)
    {
        $sentencia = $this->db->prepare("UPDATE transaccion SET id_billetera=?,id_usuario=?,fecha=?,fecha_tns=?,tipo_de_operacion=?,saldo_enviar=?,saldo_recibir=?,tipo_cambio=?,ganancia=?,moneda=? WHERE id_tns=?");
        $sentencia->execute(array($id_billetera, $id_usuario, $fecha, $fecha_tns, $tipo_de_operacion, $saldo_enviar, $saldo_recibir, $tipo_cambio, $ganancia, $id_tns, $moneda));
    }


    public function EliminarTransaccion($id, $usuario)
    {
        $sentencia = $this->db->prepare("DELETE FROM transaccion WHERE id_tns= ? AND id_usuario = ?");
        $sentencia->execute(array($id, $usuario));
    }

}

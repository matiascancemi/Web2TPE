<?php

class AdministradoresModel {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=operaciones_airtm;charset=utf8', 'root', '');
    }

    function GetUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM administrador WHERE usuario=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

}

?>
<?php

class AdministradoresModel {

    private $db;


    function __construct(){
        include "./config.php";
        $this->db = new PDO('mysql:host='.$localhost.';dbname='.$name.';charset=utf8', $user, $pass);
    }


    function ListarUsuarios(){
        $sentencia = $this->db->prepare("SELECT * FROM usuarios");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM usuarios WHERE usuario=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function EliminarUsuario($user){
        $sentencia = $this->db->prepare("DELETE FROM usuarios WHERE id_adm=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }    

    function ChequeoRol($usuario){
        $sentencia = $this->db->prepare("SELECT rol FROM usuarios WHERE id_adm=?");
        $sentencia->execute(array($usuario));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }   

    function ConvertirAdmin($usuario, $valor){
        $sentencia = $this->db->prepare("UPDATE usuarios SET rol = ? WHERE id_adm=?");
        $sentencia->execute(array($valor, $usuario));
    }

    function BuscarReferido($user){
        $sentencia = $this->db->prepare("SELECT id_adm FROM usuarios WHERE usuario=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function CrearUsuario($fecha,$nombre,$apellido,$email,$usuario,$contrasena,$referido){
        $sentencia = $this->db->prepare("INSERT INTO usuarios(fecha,nombre,apellido,email,usuario,contrasena,referido,activo) VALUES(?,?,?,?,?,?,?,?)");
        $sentencia->execute(array($fecha,$nombre,$apellido,$email,$usuario,$contrasena,$referido,1));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }   


}



?>
<?php

class ComentariosModel {

    private $db;

    function __construct(){
        include "./config.php";
        $this->db = new PDO('mysql:host='.$localhost.';dbname='.$name.';charset=utf8', $user, $pass);
    }

    public function GetComentarios($id_tns){
        $sentencia = $this->db->prepare("SELECT * FROM comentarios INNER JOIN usuarios ON comentarios.id_usuario = usuarios.id_adm WHERE id_tns=?");
        $sentencia->execute(array($id_tns));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    public function GetComentario($id){
      $sentencia = $this->db->prepare("SELECT * FROM comentarios WHERE id=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_OBJ);
  }

    public function AgregarComentario($id_tns,$id_usuario,$comentario, $valoracion){
        $sentencia = $this->db->prepare("INSERT INTO comentarios(id, id_tns,id_usuario,comentario,valoracion) VALUES(?,?,?,?,?)");
        $sentencia->execute(array(null, $id_tns,$id_usuario,$comentario,$valoracion));
    }

    public function EditarComentario($id_tns,$id_usuario,$comentario){
        $sentencia = $this->db->prepare("UPDATE comentarios SET id_tns=?,id_usuario=?,comentario=? WHERE id=?");
        $sentencia->execute(array($id_tns,$id_usuario,$comentario));
    }      

    public function EliminarComentario($id){
        $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id= ?");
        $sentencia->execute(array($id));
    }  



}



?>
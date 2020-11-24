<?php



class EstadisticasModel {

    private $db;

    function __construct(){

        include "./config.php";

        $this->db = new PDO('mysql:host='.$localhost.';dbname='.$name.';charset=utf8', $user, $pass);

    }

}



?>
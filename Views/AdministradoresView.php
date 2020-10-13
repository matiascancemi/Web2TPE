<?php

require_once "./libs/Smarty.class.php";

class AdministradoresView{

    private $title;

    function __construct(){
        $this->title = "Logueo";
    }

    function ShowLogin($mensaje = ""){

        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('mensaje', $mensaje);

        $smarty->display('templates/login.tpl'); // muestro el template 
    }


    
}

?>    
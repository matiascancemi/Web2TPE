<?php

require_once "./libs/Smarty.class.php";

class BilleterasView{

    private $title;

    function __construct(){
        $this->title = "Lista de Billeteras";
    }

    function ShowHome($billeteras){

        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('billeteras_s', $billeteras);
      
        $smarty->display('templates/billeteras.tpl'); // muestro el template 
    }

    function MostrarBilletera($billetera){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('billeteraedit_s', $billetera);
      
        $smarty->display('templates/editar_billetera.tpl'); // muestro el template 
      
    }

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    
}

?>

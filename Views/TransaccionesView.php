<?php

require_once "./libs/Smarty.class.php";

class TransaccionesView{

    private $title;

    function __construct(){
        $this->title = "Lista de transacciones";
    }

    function ShowHome($transacciones, $billeteras, $id_billetera){

        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('transacciones_s', $transacciones);
        $smarty->assign('billeteras_s', $billeteras);
        $smarty->assign('id_billetera', $id_billetera);
      
        $smarty->display('templates/transacciones.tpl'); // muestro el template 
    }

    function FormularioEditarTransaccion($vertransaccion, $billeteras){
        $smarty = new Smarty();
        $this->title = "Edición de Transacción";
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('transaccion_s', $vertransaccion);
        $smarty->assign('billeteras_s', $billeteras);

        $smarty->display('templates/editar_transaccion.tpl'); // muestro el template 
    }

    function MostrarTransaccion($vertransaccion){
        $smarty = new Smarty();
        $this->title = "Detalle de Transacción";
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('transaccion', $vertransaccion);

        $smarty->display('templates/vertransaccion.tpl'); // muestro el template 
    }    

    function ShowHomeLocation(){
        header("Location: " .BASE_URL);
    }

    
}

?>

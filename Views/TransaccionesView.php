<?php



require_once "./libs/Smarty.class.php";



class TransaccionesView{



    private $title;
    private $fecha;



    function __construct(){

        $this->title = "Lista de transacciones";
        $this->fecha = date('d-m-Y');


    }

    function InicioInvitado($transacciones, $billeteras, $monedas){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('transacciones_s', $transacciones);
        $smarty->assign('billeteras_s', $billeteras);
        $smarty->assign('fecha_s', $this->fecha);
        $smarty->assign('monedas_s', $monedas);
        $smarty->display('templates/inicio.tpl'); // muestro el template 
    }    


    function ShowHome($transacciones, $billeteras, $id_billetera, $monedas){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('transacciones_s', $transacciones);
        $smarty->assign('billeteras_s', $billeteras);
        $smarty->assign('fecha_s', $this->fecha);
        $smarty->assign('id_billetera', $id_billetera);
        $smarty->assign('monedas_s', $monedas);
        $smarty->display('templates/transacciones.tpl'); // muestro el template 
    }


    function TransaccionesInvitado($transacciones, $billeteras, $id_billetera, $monedas){

        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('transacciones_s', $transacciones);
        $smarty->assign('billeteras_s', $billeteras);
        $smarty->assign('fecha_s', $this->fecha);
        $smarty->assign('id_billetera', $id_billetera);
        $smarty->assign('monedas_s', $monedas);
        $smarty->display('templates/transacciones_invitado.tpl'); // muestro el template 

    }



    function FormularioEditarTransaccion($vertransaccion, $billeteras, $monedas){

        $smarty = new Smarty();

        $this->title = "Edición de Transacción";
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('transaccion_s', $vertransaccion);
        $smarty->assign('billeteras_s', $billeteras);
        $smarty->assign('monedas_s', $monedas);
        $smarty->display('templates/editar_transaccion.tpl'); // muestro el template 

    }



    function MostrarTransaccion($vertransaccion, $billeteras, $monedas){

        $smarty = new Smarty();
        $this->title = "Detalle de Transacción";
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('billeteras_s', $billeteras);
        $smarty->assign('transaccion', $vertransaccion);
        $smarty->assign('monedas_s', $monedas);
        $smarty->display('templates/vertransaccion.tpl'); // muestro el template 

    }    



    function ShowHomeLocation(){

        header("Location: " .BASE_URL);

    }



    

}



?>
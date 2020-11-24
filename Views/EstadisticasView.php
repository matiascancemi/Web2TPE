<?php

require_once "./libs/Smarty.class.php";


class EstadisticasView

{
    private $title;
    function __construct()
    {
        $this->title = "Estadisticas";
    }



    function Home($transacciones, $billeteras, $id_billetera, $total, $totaldetns, $desde, $hasta)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('total_s', $total);
        $smarty->assign('transacciones_s', $transacciones);
        $smarty->assign('billeteras_s', $billeteras);
        $smarty->assign('totaldetns_s', $totaldetns);
        $smarty->assign('desde_s', $desde);
        $smarty->assign('hasta_s', $hasta);
        $smarty->assign('id_billetera_s', $id_billetera);
        $smarty->display('templates/estadisticas.tpl'); // muestro el template 
    }

    

}
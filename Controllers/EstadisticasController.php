<?php
require_once "./Models/TransaccionesModel.php";
require_once "./Models/BilleterasModel.php";
require_once "./Models/EstadisticasModel.php";
require_once "./Views/EstadisticasView.php";


class EstadisticasController {


    private $model;
    private $view;
    private $billeteras;


	function __construct(){
        $this->billeteras = new BilleterasModel();
        $this->transacciones = new TransaccionesModel();
        $this->model = new EstadisticasModel();
        $this->view = new EstadisticasView();
    }



    function Home(){
        $this->checkLoggedIn();
        if (isset($params[':ID'])){
            $id_billetera = $params[':ID'];
        }else{
            $id_billetera = null;
        }
        $transacciones = $this->transacciones->GetTransacciones($_SESSION["ID"]);
        $billeteras = $this->billeteras->GetBilleteras();
        $total = $this->total($transacciones);
        $totaldetns = count($transacciones);
        $this->view->Home($transacciones, $billeteras, $id_billetera, $total, $totaldetns, null, null);
    }



    public function VerTransaccionesPorFecha($params = null){
        $this->checkLoggedIn();
        if (isset($params[':ID'])){
            $id_billetera = $params[':ID'];
        }else if(isset($_POST['id_billetera'])&&($_POST['id_billetera']!=0)){
            $id_billetera = $_POST['id_billetera'];
        }
        else{
            $id_billetera = null;
        }
        if (isset($params[':DESDE'])){
            $desde = date("Y-m-d", strtotime($params[':DESDE']));
        }else if(isset($_POST['desde'])){
            $desde= date("Y-m-d", strtotime($_POST['desde']));;
        }else{
            $fecha_actual = date("Y-m-d");
            $desde = date("Y-m-d",strtotime($fecha_actual));
        }
        if (isset($params[':HASTA'])){
            $hasta = date("Y-m-d", strtotime($params[':HASTA']));
        }else if(isset($_POST['hasta'])){
            $hasta= date("Y-m-d", strtotime($_POST['hasta']));;
        }else{
            $fecha_actual = date("Y-m-d");
            $hasta = $fecha_actual;
        }
        $transacciones = $this->transacciones->GetTransaccionesPorFecha($_SESSION["ID"], $desde, $hasta, $id_billetera);
        $billeteras = $this->billeteras->GetBilleteras();
        $total = $this->total($transacciones);
        $totaldetns = count($transacciones);
        $this->view->Home($transacciones, $billeteras, $id_billetera, $total, $totaldetns, $desde, $hasta);
    } 


    private function total($transacciones){
        $sumatoria = 0;
        foreach ($transacciones as $transaccion) {
            if ( $transaccion->ganancia){
                $sumatoria = $transaccion->ganancia + $sumatoria;
            }
        }
        return $sumatoria;
    }


    private function checkLoggedIn() {
        if (!isset($_SESSION['USUARIO'])){
            header('Location: ' . LOGIN);
            die();
        }
    }



}
?>
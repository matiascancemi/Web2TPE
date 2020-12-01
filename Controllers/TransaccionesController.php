<?php
require_once "./Models/TransaccionesModel.php";
require_once "./Models/BilleterasModel.php";
require_once "./Views/TransaccionesView.php";

class TransaccionesController {
    private $model;
    private $model1;
    private $view;


	function __construct(){
        $this->model = new TransaccionesModel();
        $this->model1 = new BilleterasModel();
        $this->view = new TransaccionesView();
    }


    function InicioInvitado(){
        $contar_transacciones = $this->model->ContarUltimasTransacciones();
        $transacciones_por_pagina = 4;
        $paginas = $contar_transacciones/$transacciones_por_pagina;
        $cant_paginas = ceil($paginas);
        if (isset($_GET["pagina"])){
            $desde = (($_GET["pagina"]-1)*$transacciones_por_pagina);
        }else{
            $desde = 0;
        }
        $hasta = $transacciones_por_pagina + $desde;
        $transacciones = $this->model->UltimasTransacciones($desde, $hasta);
        $billeteras = $this->model1->GetBilleteras();
        $monedas = $this->model1->GetMonedas();
        $this->view->InicioInvitado($transacciones, $billeteras, $monedas, $cant_paginas);
    }

    function Home(){
        $this->checkLoggedIn();
        if (isset($_GET['billetera'])){
            $id_billetera = $_GET['billetera'];
            $transacciones = $this->model->GetTransaccionesPorBilletera($id_billetera, $_SESSION["ID"]);
        }else{
            $id_billetera = null;
            $transacciones = $this->model->GetTransacciones($_SESSION["ID"]);
        }
        $billeteras = $this->model1->GetBilleteras();
        $monedas = $this->model1->GetMonedas();
        $this->view->ShowHome($transacciones, $billeteras, $id_billetera, $monedas);
    }

    function HomeAdmin(){
        $this->checkLoggedIn();
        if (isset($_GET['billetera'])){
            $id_billetera = $_GET['billetera'];
        }else{
            $id_billetera = null;
        }
        $transacciones = $this->model->GetTransaccionesAdmin();
        $billeteras = $this->model1->GetBilleteras();
        $monedas = $this->model1->GetMonedas();
        $this->view->ShowHome($transacciones, $billeteras, $id_billetera, $monedas);
    }   
    
    function VerTodasLasTransacciones(){
        if (isset($_GET['billetera'])){
            $id_billetera = $_GET['billetera'];
        }else{
            $id_billetera = null;
        }
        $transacciones = $this->model->GetTransaccionesAdmin();
        $billeteras = $this->model1->GetBilleteras();
        $monedas = $this->model1->GetMonedas();
        $this->view->TransaccionesInvitado($transacciones, $billeteras, $id_billetera, $monedas);
    }       


    public function VerTransaccionPorBilletera(){
        $this->checkLoggedIn();
        if (isset($_GET['billetera'])){
            $id_billetera = $_GET['billetera'];
        }else{
            $id_billetera = null;
        }
        $transacciones = $this->model->GetTransaccionesPorBilletera($id_billetera, $_SESSION["ID"]);
        $billeteras = $this->model1->GetBilleteras();
        $monedas = $this->model1->GetMonedas();
        $this->view->ShowHome($transacciones, $billeteras, $id_billetera, $monedas);
    }   

    public function VerTransaccion(){
        //$this->checkLoggedIn();
        if (isset($_GET['id'])){
            $Transaccion_id = $_GET['id'];
            $transaccion = $this->model->GetTransaccionAdmin($Transaccion_id);
            $billeteras = $this->model1->GetBilleteras();
            $monedas = $this->model1->GetMonedas();
            $this->view->MostrarTransaccion($transaccion, $billeteras, $monedas);
        }else{
            header("Location: ". BASE_URL . "home");
        }
    }

    
    public function AgregarTransaccion(){
        $this->checkLoggedIn();
        $fechadehoy =  date('Y-m-d');
        $fecha_tns = date("Y-m-d", strtotime($_POST['fecha_tns']));
        $ganancia = $this->CalcularGanancia($_POST['id_billetera'],$_POST['tipo_de_operacion'],$_POST['saldo_enviar'], $_POST['saldo_recibir']);
        if ($_POST['monedas']!=0){ // SACO EL VALOR DE LA MONEDA
            $monedas = $this->model1->GetMoneda($_POST['monedas']);
            $iso = $monedas->iso;
            $url = "https://rates.airtm.io/air-rates";
            $json = file_get_contents($url);
            $rates = json_decode($json, true);
            $valor_de_moneda = 0;
            //var_dump($rates);
            foreach ($rates as $key=>$value) {
                if ($key == $iso){
                    foreach ($value as $key2=>$value2){
                            foreach ($value2[0] as $key => $value) {
                                if ($_POST['tipo_de_operacion']=="Fondeo"){
                                    if ($key == "sell"){
                                        $valor_de_moneda = $value;
                                    }
                                }else{
                                    if ($key == "buy"){
                                        $valor_de_moneda = $value;
                                    }
                                }
                            }
                    }
                }
             }
             $this->CalcularGananciaBancaLocal($_POST['id_billetera'],$_POST['tipo_de_operacion'],$_POST['saldo_enviar'], $_POST['saldo_recibir'],$_POST['tipo_cambio'],$valor_de_moneda);
        } 
        $this->model->AgregarTransaccion($_POST['id_billetera'],$_SESSION["ID"],$fechadehoy,$fecha_tns,$_POST['tipo_de_operacion'],$_POST['saldo_enviar'],$_POST['saldo_recibir'],$_POST['tipo_cambio'],$ganancia,$_POST['monedas'],$valor_de_moneda);
        header("Location: " . BASE_URL . "home");
    }


    public function FormularioEditarTransaccion(){
        $this->checkLoggedIn();
        $Transaccion_id = $_GET["id"];
        $id_usuario = $_SESSION["ID"];
        if ($this->model->GetTransaccion($Transaccion_id, $id_usuario)){
            $transaccion = $this->model->GetTransaccion($Transaccion_id, $id_usuario);
            $billeteras = $this->model1->GetBilleteras();
            $monedas = $this->model1->GetMonedas();
            $this->view->FormularioEditarTransaccion($transaccion, $billeteras, $monedas);
        }else{
            header("Location: ". BASE_URL . "home");
        }
    }


    public function EditarTransaccion(){
        $this->checkLoggedIn();
        $id_tns = $_POST["id_tns"];
        $fechadehoy =  date('Y-m-d H:i:s');
        $fecha_tns = date("Y-m-d", strtotime($_POST['fecha_tns']));
        $ganancia = $this->CalcularGanancia($_POST['id_billetera'],$_POST['tipo_de_operacion'],$_POST['saldo_enviar'], $_POST['saldo_recibir']);
        $this->model->EditarTransaccion($id_tns, $_POST['id_billetera'],$_SESSION["ID"],$fechadehoy,$fecha_tns,$_POST['tipo_de_operacion'],$_POST['saldo_enviar'],$_POST['saldo_recibir'],$_POST['tipo_cambio'],$ganancia,$ganancia,$_POST['moneda']);
        header("Location: " . BASE_URL . "home");
    }    


    public function EliminarTransaccion(){
        $this->checkLoggedIn();
        $Transaccion_id = $_GET['id'];
        $id_usuario = $_SESSION["ID"];
        if ($this->model->EliminarTransaccion($Transaccion_id, $id_usuario)){
            $this->model->EliminarTransaccion($Transaccion_id, $id_usuario);
            $this->view->ShowHomeLocation();
        }else{
            header("Location: ". BASE_URL . "home");
        }
    }

    

    private function checkLoggedIn() {
        if (!isset($_SESSION['USUARIO'])){
            header('Location: ' . LOGIN);
            die();
        }
    }

    private function CalcularGanancia($id_billetera, $tipo_de_operacion, $saldo_enviar, $saldo_recibir){
        $resultado = $this->model1->GetBilletera($id_billetera);
        foreach ($resultado as $item) {
            $com_unica = $item->comision_unica;
            $com_minima = $item->comision_minima;
            $com_porcentual = (1 - $item->comision_porcentual);
            if ($tipo_de_operacion == "Retiro") {
                $ganancia = (($saldo_recibir - $com_unica) * $com_porcentual) - $saldo_enviar;
            } else {
                if ($com_minima != 0) {
                    if (($saldo_enviar * $com_porcentual) < $com_minima) {
                        $ganancia = ($saldo_recibir - $com_minima) - $saldo_enviar;
                    } else {
                        $ganancia = ($saldo_recibir - $saldo_enviar);
                    }
                } else {
                    $ganancia = ($saldo_recibir - $saldo_enviar);
                }
            }
        }
        return $ganancia;
    }

    private function CalcularGananciaBancaLocal($id_billetera, $tipo_de_operacion, $saldo_enviar, $saldo_recibir, $tipo_cambio, $valor_de_moneda){
        $resultado = $this->model1->GetBilletera($id_billetera);
        foreach ($resultado as $item) {
            if ($tipo_de_operacion == "Retiro") {
                $ganancia = ($saldo_recibir / $tipo_cambio) - ($saldo_recibir / $valor_de_moneda);
            } else {
                $ganancia = ($saldo_enviar / $tipo_cambio) - ($saldo_enviar / $valor_de_moneda);
            }
        }
        return $ganancia;
    }    


}

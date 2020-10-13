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

    function Home($params = null){
        if (isset($params[':ID'])){
            $id_billetera = $params[':ID'];
        }else{
            $id_billetera = null;
        }
        $transacciones = $this->model->GetTransacciones();
        $billeteras = $this->model1->GetBilleteras();
        session_start();
        $this->view->ShowHome($transacciones, $billeteras, $id_billetera);
    }

    public function VerTransaccionPorBilletera($params = null){
        $id_billetera = $params[':ID'];
        $transacciones = $this->model->GetTransaccionesPorBilletera($id_billetera);
        $billeteras = $this->model1->GetBilleteras();
        session_start();
        $this->view->ShowHome($transacciones, $billeteras, $id_billetera);
    }    

    public function VerTransaccion($params = null){
        $Transaccion_id = $params[':ID'];
        $transaccion = $this->model->GetTransaccion($Transaccion_id);
        session_start();
        $this->view->MostrarTransaccion($transaccion);
    }
    
    public function AgregarTransaccion(){
        $this->checkLoggedIn();
        $fechadehoy =  date('Y-m-d H:i:s');
        $fecha_tns = date("Y-m-d", strtotime($_POST['fecha_tns']));
        $ganancia = 0;
        $this->model->AgregarTransaccion($_POST['id_billetera'],$fechadehoy,$fecha_tns,$_POST['tipo_de_operacion'],$_POST['saldo_enviar'],$_POST['saldo_recibir'],$_POST['tipo_cambio'],$ganancia);
        header("Location: " . BASE_URL);
    }

    public function FormularioEditarTransaccion($params = null){
        $this->checkLoggedIn();
        $Transaccion_id = $params[':ID'];
        $transaccion = $this->model->GetTransaccion($Transaccion_id);
        $billeteras = $this->model1->GetBilleteras();
        $this->view->FormularioEditarTransaccion($transaccion, $billeteras);
    }

    public function EditarTransaccion($params = null){
        $this->checkLoggedIn();
        $id_tns = $params[':ID'];
        $fechadehoy =  date('Y-m-d H:i:s');
        $fecha_tns = date("Y-m-d", strtotime($_POST['fecha_tns']));
        $ganancia = 0;
        $this->model->EditarTransaccion($id_tns, $_POST['id_billetera'],$fechadehoy,$fecha_tns,$_POST['tipo_de_operacion'],$_POST['saldo_enviar'],$_POST['saldo_recibir'],$_POST['tipo_cambio'],$ganancia);
        header("Location: " . BASE_URL);
    }    

    public function EliminarTransaccion($params = null){
        $this->checkLoggedIn();
        $Transaccion_id = $params[':ID'];
        $this->model->EliminarTransaccion($Transaccion_id);
        $this->view->ShowHomeLocation();
    }
    
    private function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['USUARIO'])){
            header('Location: ' . LOGIN);
            die();
        }
    }

}


?>

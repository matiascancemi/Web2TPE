<?php
require_once "./Models/BilleterasModel.php";
require_once "./Views/BilleterasView.php";

class BilleterasController {

    private $model;
    private $view;

	function __construct(){
        $this->model = new BilleterasModel();
        $this->view = new BilleterasView();
    }

    function Home(){
        $billeteras = $this->model->GetBilleteras();
        session_start();
        $this->view->ShowHome($billeteras);
    }

    public function GetBilletera($params = null){
        $this->checkLoggedIn();
        $billetera_id = $params[':ID'];
        $billetera = $this->model->GetBilletera($billetera_id);
        session_start();
        $this->view->MostrarBilletera($billetera);
    }
    
    public function AgregarBilletera(){
        $this->checkLoggedIn();
        $this->model->AgregarBilletera($_POST['nombre'],$_POST['comision_unica'],$_POST['comision_porcentual']);
        session_start();
        header("Location: " . BASE_URL . "billeteras");
    }

    public function EditarBilletera($params = null){
        $this->checkLoggedIn();
        $billetera_id = $params[':ID'];
        $this->model->EditarBilletera($billetera_id, $_POST['nombre'],$_POST['comision_unica'],$_POST['comision_porcentual']);
        session_start();
        header("Location: " . BASE_URL . "billeteras");
    }    

    function EliminarBilletera($params = null){
        $this->checkLoggedIn();
        $billetera_id = $params[':ID'];
        $this->model->EliminarBilletera($billetera_id);
        session_start();
        header("Location: " . BASE_URL . "billeteras");
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

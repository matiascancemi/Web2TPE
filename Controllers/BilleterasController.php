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

        $this->checkLoggedIn();

        $billeteras = $this->model->GetBilleteras();

        $this->view->ShowHome($billeteras);

    }



    public function GetBilletera($params = null){

        $this->checkLoggedIn();

        $billetera_id = $params[':ID'];

        $billetera = $this->model->GetBilletera($billetera_id);

        $monedas = $this->model->GetMonedas();

        $this->view->MostrarBilletera($billetera, $monedas);

    }

    

    public function AgregarBilletera(){

        $this->checkLoggedInAdmin();
        if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" 
                || $_FILES['input_name']['type'] == "image/png" ) {
                    $this->model->AgregarBilletera($_POST['nombre'],$_POST['comision_unica'],$_POST['comision_porcentual'],$_POST['comision_minima'], $_FILES['input_name']['tmp_name']);
        }
        else {
                $this->model->AgregarBilletera($_POST['nombre'],$_POST['comision_unica'],$_POST['comision_porcentual'],$_POST['comision_minima']);
        }

        header("Location: " . BASE_URL . "billeteras");

    }



    public function EditarBilletera($params = null){

        $this->checkLoggedInAdmin();

        $billetera_id = $params[':ID'];

        if (isset($_POST['eliminarimagen'])){
            $imagen = NULL;
        }else{
            if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" 
            || $_FILES['input_name']['type'] == "image/png" ){
                $imagen = $_FILES['input_name']['tmp_name'];
            }else{
                $imagen = $_POST['imagen'];
            }
        }

        $this->model->EditarBilletera($billetera_id, $_POST['nombre'],$_POST['comision_unica'],$_POST['comision_porcentual'],$_POST['comision_minima'],$imagen);

        header("Location: " . BASE_URL . "billeteras");

    }    



    function EliminarBilletera($params = null){

        $this->checkLoggedInAdmin();

        $billetera_id = $params[':ID'];

        $this->model->EliminarBilletera($billetera_id);

        header("Location: " . BASE_URL . "billeteras");

    }

    

    private function checkLoggedIn() {
        @session_start();
        if (!isset($_SESSION['USUARIO'])){
            header('Location: ' . LOGIN);
        }
    }



    private function checkLoggedInAdmin() {
        @session_start();
        if ($_SESSION['ROL']!=0){
            header("Location: " . BASE_URL . "transacciones");
        }

    }    



}





?>
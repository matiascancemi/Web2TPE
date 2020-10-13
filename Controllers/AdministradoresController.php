<?php
require_once "./Models/AdministradoresModel.php";
require_once "./Views/AdministradoresView.php";

class AdministradoresController {

    private $model;
    private $view;

	function __construct(){
        $this->model = new AdministradoresModel();
        $this->view = new AdministradoresView();
    }

    function comprobarUsuario(){
        $nombredeusuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $contrasena_codificada = md5($contrasena);

        if(isset($nombredeusuario)){
            $Usuario = $this->model->GetUser($nombredeusuario);

            if(isset($Usuario) && $Usuario){
                // Existe el usuario

                if ($Usuario->contrasena == $contrasena_codificada){

                    session_start();
                    $_SESSION["USUARIO"] = $Usuario->usuario;
                    $_SESSION['LAST_ACTIVITY'] = time();
                    $this->view->ShowLogin("Bienvenido");
                }else{
                    $this->view->ShowLogin("Contraseña incorrecta");
                }

            }else{
                // No existe el user en la DB
                $this->view->ShowLogin("El usuario no existe");
            }
        }
    }

    function Login(){

        $this->view->ShowLogin();

    }

    function Logout(){
        session_start();
        session_destroy();
        header("Location: ".LOGIN);

    }
    

}


?>
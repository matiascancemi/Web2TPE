<?php
require_once "./Models/AdministradoresModel.php";
require_once "./Views/AdministradoresView.php";
require_once "./Models/BilleterasModel.php";



class AdministradoresController {

    private $model;
    private $model1;
    private $view;

	function __construct(){
        $this->model = new AdministradoresModel();
        $this->view = new AdministradoresView();
        $this->model1 = new BilleterasModel();
    }

    function comprobarUsuario(){
        $nombredeusuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $contrasena_codificada = md5($contrasena);

        if(isset($nombredeusuario)){
            $Usuario = $this->model->GetUser($nombredeusuario);

            if(isset($Usuario) && $Usuario){
                // Existe el usuario
                if ($Usuario->activo==0){
                    $this->view->ShowLogin("Usuario registrado pero no validado, espere confirmación.");
                }
                else if ($Usuario->contrasena == $contrasena_codificada){
                    @session_start();
                    $_SESSION["USUARIO"] = $Usuario->usuario;
                    $_SESSION["ROL"] = $Usuario->rol;
                    $_SESSION["ID"] = $Usuario->id_adm;
                    $_SESSION['LAST_ACTIVITY'] = time();
                    header("Location: " . BASE_URL . "home");
                }else{
                    $this->view->ShowLogin("Contraseña incorrecta");
                }

            }else{

                // No existe el user en la DB

                $this->view->ShowLogin("El usuario no existe");

            }

        }

    }

    function CrearUsuarioFormulario(){
        $this->view->CrearUsuarioFormulario();
    }

    function CrearUsuario(){
        $usuario = $_POST["usuario"];
        $contrasena = md5($_POST["contrasena"]);
        $fecha =  date("Y-m-d H:i:s");
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $referido_usuario = $_POST['referido'];
        $referido = $this->model->BuscarReferido($referido_usuario);
        $referido_id = $referido->id_adm;
        $this->model->CrearUsuario($fecha,$nombre,$apellido,$email,$usuario,$contrasena,$referido_id);
        $this->comprobarUsuario($nombre, $_POST["contrasena"]);
    }

    function ListarUsuarios(){
        $this->checkLoggedInAdmin();
        $Usuarios = $this->model->ListarUsuarios();
        $billeteras = $this->model1->GetBilleteras();
        $this->view->GestionarUsuarios($Usuarios, $billeteras);
    }

    function ConvertirAdmin(){
        $this->checkLoggedInAdmin();
        $id_usuario = $_GET['id'];
        $roldeusuario = $this->model->ChequeoRol($id_usuario);
        foreach ($roldeusuario as $rol) {
            if ($rol==1){
                $valor = 0;
            }else{
                $valor = 1;
            }
        }
        if ($id_usuario == $_SESSION["ID"]){
            $_SESSION["ROL"] = $valor;
        }
        $this->model->ConvertirAdmin($id_usuario, $valor);
        header("Location: " . BASE_URL . "usuarios");
    }

    function EliminarUsuario(){
        $this->checkLoggedInAdmin();
        $id_usuario = $_GET['id'];
        $this->model->EliminarUsuario($id_usuario);
        header("Location: " . BASE_URL . "usuarios");
    }    



    function Login(){
        $this->view->ShowLogin();
    }

    function Logout(){
        session_destroy();
        header("Location: " . BASE_URL);

    }

    function checkLoggedIn() {
        if (!isset($_SESSION['USUARIO'])){
            header('Location: ' . BASE_URL . 'login');
            die;
        }
    }

    function checkLoggedInAdmin() {
        if (!isset($_SESSION['USUARIO']) || ($_SESSION['ROL'] != 0)){
            header("Location: " . BASE_URL . 'transacciones');
            die;
        }
    }    



}

?>
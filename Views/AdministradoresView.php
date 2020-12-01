<?php

require_once "./libs/Smarty.class.php";



class AdministradoresView{
    private $title;
    private $inicio;
    private $gestionar_usuarios;

    function __construct(){
        $this->title = "Logueo";
        $this->inicio = "SoyCajero.com - Administrador de Transacciones para Cajeros de AirTM";
        $this->gestionar_usuarios = "Administrador - Gestión de Usuarios - Administrador de Transacciones para Cajeros de AirTM";
    }


    function ShowLogin($mensaje = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('mensaje', $mensaje);

        $smarty->display('templates/login.tpl'); // muestro el template 

    }

    function CrearUsuario($mensaje = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('mensaje', $mensaje);
        $smarty->display('templates/login.tpl'); // muestro el template 

    }    

    function CrearUsuarioFormulario(){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->inicio);
        $smarty->display('templates/registro.tpl'); // muestro el template 
    }    

    function GestionarUsuarios($Usuarios, $billeteras){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->gestionar_usuarios);
        $smarty->assign('usuarios_s', $Usuarios);
        $smarty->assign('billeteras_s', $billeteras);
        $smarty->display('templates/gestionar_usuarios.tpl'); // muestro el template   
    }


    function Mensajes($mensaje = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('mensaje', $mensaje);

        $smarty->display('templates/mensajes.tpl'); // muestro el template 
    }





    

}
?>
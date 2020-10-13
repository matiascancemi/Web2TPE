<?php
    require_once 'Controllers/BilleterasController.php';
    require_once 'Controllers/TransaccionesController.php';
    require_once 'Controllers/AdministradoresController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "TransaccionesController", "Home");


    // LOGUEO

    $r->addRoute("login", "GET", "AdministradoresController", "Login");
    $r->addRoute("logout", "GET", "AdministradoresController", "Logout");
    $r->addRoute("login", "POST", "AdministradoresController", "comprobarUsuario");

    //TRANSACCIONES
    $r->addRoute("transacciones", "GET", "TransaccionesController", "Home");
    $r->addRoute("transacciones/billetera/:ID", "GET", "TransaccionesController", "VerTransaccionPorBilletera");
    $r->addRoute("ver/transaccion/:ID", "GET", "TransaccionesController", "VerTransaccion");
    $r->addRoute("agregar/transaccion", "POST", "TransaccionesController", "AgregarTransaccion");
    $r->addRoute("eliminar/transaccion/:ID", "GET", "TransaccionesController", "EliminarTransaccion");
    $r->addRoute("editar/transaccion/:ID", "GET", "TransaccionesController", "FormularioEditarTransaccion");
    $r->addRoute("editar/transaccion/:ID", "POST", "TransaccionesController", "EditarTransaccion");

    // BILLETERAS
    $r->addRoute("billeteras", "GET", "BilleterasController", "Home");
    $r->addRoute("agregar/billetera", "POST", "BilleterasController", "AgregarBilletera");
    $r->addRoute("eliminar/billetera/:ID", "GET", "BilleterasController", "EliminarBilletera");
    $r->addRoute("editar/billetera/:ID", "GET", "BilleterasController", "GetBilletera");
    $r->addRoute("editar/billetera/:ID", "POST", "BilleterasController", "EditarBilletera");

    //Ruta por defecto.
    $r->setDefaultRoute("TransaccionesController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>

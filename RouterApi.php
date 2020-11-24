<?php
require_once 'RouterClass.php';
require_once 'api/ApiComentariosController.php';

// instacio el router
$router = new Router();

// armo la tabla de ruteo de la API REST
//$router->addRoute('comentarios', 'GET', 'ApiComentariosModel', 'GetComentarios');
$router->addRoute('comentarios/transaccion/:ID', 'GET', 'ApiComentariosController', 'GetComentarios');
$router->addRoute('comentarios/:ID', 'GET', 'ApiComentariosController', 'GetComentario');
$router->addRoute('comentarios/:ID', 'DELETE', 'ApiComentariosController', 'EliminarComentario');
$router->addRoute('comentarios', 'POST', 'ApiComentariosController', 'AgregarComentario');



 //run
 $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 03:42:44
  from 'C:\xampp\htdocs\cajeros_airtm\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbc73243bec60_27856591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47df018ed6e53ee40dfb92c07fadfde300ed43ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cajeros_airtm\\templates\\menu.tpl',
      1 => 1606185762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbc73243bec60_27856591 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="nav-menu d-none d-lg-block">
    <ul>
        <?php if ((isset($_SESSION['USUARIO']))) {?>
            <li><a href="billeteras">Billeteras</a></li>
            <li class="drop-down"><a href="transacciones">Transacciones</a>
                <ul>
                    <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar Transacción</a></li>
                </ul>
            </li>
            
            <li><a href="estadisticas">Estadisticas</a></li>
            
        <?php }?>
        <?php if ((isset($_SESSION['ROL'])) && $_SESSION['ROL'] == 0) {?>
            <li class="drop-down"><a href="#">Administrador</a>
                <ul>
                    <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg.billetera">Agregar Billeteras</a></li>
                    <li><a href="usuarios">Usuarios</a></li>
            </li>
        <?php }?>
    </ul>
</nav>
    <?php if (!(isset($_SESSION['USUARIO']))) {?>
      <a href="login" class="get-started-btn scrollto">Login</a>
      <?php } else { ?>
      <a href="logout" class="get-started-btn scrollto">Salir</a>
      <?php }?>
<!-- .nav-menu --><?php }
}

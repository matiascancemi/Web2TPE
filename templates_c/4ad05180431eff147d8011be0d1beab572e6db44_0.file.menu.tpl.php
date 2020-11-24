<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 03:39:55
  from '/home/soycajero/public_html/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8fe5cb3972c7_35329984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ad05180431eff147d8011be0d1beab572e6db44' => 
    array (
      0 => '/home/soycajero/public_html/templates/menu.tpl',
      1 => 1603265994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8fe5cb3972c7_35329984 (Smarty_Internal_Template $_smarty_tpl) {
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

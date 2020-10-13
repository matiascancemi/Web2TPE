<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-05 09:07:06
  from 'C:\xampp\htdocs\TPE_Web2\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7ac61a334fa5_23127440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53cf1da7b4fd91fe17e53e9ce91ed5fe118e8864' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2\\templates\\menu.tpl',
      1 => 1601881625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7ac61a334fa5_23127440 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="home">Home</a></li>
            <li><a href="billeteras">Billeteras</a>
          <li><a href="transacciones">Transacciones</a>
          </li>
          <?php if ((isset($_SESSION['USUARIO']))) {?>
          <li class="drop-down"><a href="#">Administrador</a>
            <ul>
              <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg.billetera">Agregar Billeteras</a></li>
              <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar Transacción</a></li>
          </li>
          <?php }?>
        </ul>
      </nav><!-- .nav-menu --><?php }
}

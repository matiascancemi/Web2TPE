<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 01:19:32
  from '/home/airtm/public_html/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8fc4e4cc1d28_90552434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad78363f2a7434fabedb8f506d08840401cdf15' => 
    array (
      0 => '/home/airtm/public_html/templates/menu.tpl',
      1 => 1603257570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8fc4e4cc1d28_90552434 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="nav-menu d-none d-lg-block">
    <ul>
        <li class="btn-get-started scrollto"><a href="home">Home</a></li>
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
</nav><!-- .nav-menu --><?php }
}

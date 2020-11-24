<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 02:08:33
  from '/home/soycajero/public_html/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8fd061455555_31752471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63fa98deaf1a5f5b13aa455a8b21c46981310738' => 
    array (
      0 => '/home/soycajero/public_html/templates/login.tpl',
      1 => 1602925002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8fd061455555_31752471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</li>
            </ol>
            <h2><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</h2>

        </div>
    </section><!-- End Breadcrumbs -->


    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <?php if (!(isset($_SESSION['USUARIO']))) {?>
                    <div class="col-lg-12">
                        <p>
                            <?php if ((isset($_smarty_tpl->tpl_vars['mensaje']->value))) {?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h2> <?php }?>
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <form action="login" method="post">
                            <div class="form-group">
                                <label for="priority">Usuario</label>
                                <input class="form-control" id="usuario" name="usuario">
                            </div>
                            <div class="form-group">
                                <label for="priority">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena">
                            </div>
                            <button type="submit" class="btn btn-primary">Loguearse</button>
                        </form>
                    </div>
                </div>
            <?php } elseif ($_SESSION['ROL'] == 0) {?>
                <h3>Bienvenido Administrador!</h3><br>
            <?php } else { ?>
                <h3>Bienvenido Cajero!</h3><br>
            <?php }?>

        </div>
    </section>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

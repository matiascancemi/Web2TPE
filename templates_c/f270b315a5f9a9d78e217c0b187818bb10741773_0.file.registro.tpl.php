<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 05:34:24
  from 'C:\xampp\htdocs\cajeros_airtm\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f97a3508299d5_06937709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f270b315a5f9a9d78e217c0b187818bb10741773' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cajeros_airtm\\templates\\registro.tpl',
      1 => 1603319802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f97a3508299d5_06937709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Registro de Usuario</a></li>
                <li><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</li>
            </ol>
            <h2><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="services" class="services portfolio">
        <div class="container" data-aos="fade-up">
            <form action="registro" method="POST">
                <div class="row">
                    <div class="col-lg-12 col-sm-1">
                        <div class="form-group">
                            <label for="description">Usuario</label>
                            <input type="text" class="form-control" name="usuario" value="">
                        </div> 
                        <div class="form-group">
                            <label for="description">Contraseña</label>
                            <input type="password" class="form-control" name="contrasena" value="">
                        </div>                                                
                        <div class="form-group">
                            <label for="description">Nombre Completo</label>
                            <input type="text" class="form-control" name="nombre" value="">
                        </div>   
                        <div class="form-group">
                            <label for="description">Apellido</label>
                            <input type="text" class="form-control" name="apellido" value="">
                        </div>   
                        <div class="form-group">
                            <label for="description">Email</label>
                            <input type="email" class="form-control" name="email" value="">
                        </div>   
                        <div class="form-group">
                            <label for="description">Referido (Nombre de Usuario)</label>
                            <input type="text" class="form-control" name="referido" value="">
                        </div> 
                        <button type="submit" class="btn btn-primary">Registrarse</button>                                                                                                
                    </div>
                </div>
            </form>
        </div>
    </section>

</main>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

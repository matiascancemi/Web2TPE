<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 06:58:40
  from 'C:\xampp\htdocs\cajeros_airtm\templates\gestionar_usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f97b71083c3a9_79528400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '008f573526334ebec412ddd04fc5896fecb6c3ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cajeros_airtm\\templates\\gestionar_usuarios.tpl',
      1 => 1603778315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f97b71083c3a9_79528400 (Smarty_Internal_Template $_smarty_tpl) {
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

    <section id="services" class="services portfolio">

        <div class="container" data-aos="fade-up">

            <div class="row transacciones contact">
              <table width="100%">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Email</th>
                  <th>Usuario</th>
                  <th>Rol</th>
                  <th></th>
                </tr>
              </thead>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios_s']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->nombre;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->apellido;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->usuario;?>
</td>
                  <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['usuario']->value->rol;
$_prefixVariable1 = ob_get_clean();
if (($_prefixVariable1 == 1)) {?>Usuario <a href="usuarios/admin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_adm;?>
" title="Convertir en Administrador"><i class="fas fa-user-shield"></i></a><?php } else { ?>Administrador <a href="usuarios/admin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_adm;?>
" title="Convertir en Usuario"><i class="fas fa-user"></i></a><?php }?></td>
                  <td><a href="usuarios/eliminar/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_adm;?>
" title="Eliminar Usuario"><i class="fas fa-window-close"></i></a></td>
                </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </table>

            </div>

        </div>

    </section>



</main>







<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

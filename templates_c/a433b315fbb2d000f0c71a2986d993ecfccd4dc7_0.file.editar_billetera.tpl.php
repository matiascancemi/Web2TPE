<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 07:00:22
  from 'C:\xampp\htdocs\cajeros_airtm\templates\editar_billetera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbca1760d46e6_97749805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a433b315fbb2d000f0c71a2986d993ecfccd4dc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cajeros_airtm\\templates\\editar_billetera.tpl',
      1 => 1606197620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbca1760d46e6_97749805 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php if ((isset($_SESSION['ROL'])) && $_SESSION['ROL'] == 0) {?>
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
       
                <form action="editar/billetera/<?php echo $_smarty_tpl->tpl_vars['billeteraedit_s']->value->id;?>
" method="post">
                <?php if ((isset($_smarty_tpl->tpl_vars['billeteraedit_s']->value->imagen))) {?>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['billeteraedit_s']->value->imagen;?>
"/>
                 <?php }?>   
                    <div class="form-group">
                        <label for="title">Nombre de Billetera</label>
                        <input class="form-control" id="title" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['billeteraedit_s']->value->nombre;?>
">
                        <small id="emailHelp" class="form-text text-muted">Nombre</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Comisión Única</label>
                        <input class="form-control" id="comision_unica" name="comision_unica" value="<?php echo $_smarty_tpl->tpl_vars['billeteraedit_s']->value->comision_unica;?>
 ">
                    </div>
                    <div class="form-group">
                        <label for="priority">Comisión Porcentual</label>
                        <input class="form-control" id="comision_porcentual" name="comision_porcentual" value="<?php echo $_smarty_tpl->tpl_vars['billeteraedit_s']->value->comision_porcentual;?>
">
                        </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                    </form>

      </div>
    </section>
    <?php } else { ?>
        <section id="services" class="services">
      <div class="container" data-aos="fade-up">
       
                <h3>Usted no tiene permisos para editar billeteras. Consulte al Administrador</h3>

      </div>
    </section>
    <?php }?>
  </main>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

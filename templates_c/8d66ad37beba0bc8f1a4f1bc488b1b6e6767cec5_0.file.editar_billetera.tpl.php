<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 07:34:49
  from 'C:\xampp\htdocs\TPE_Web2\templates\editar_billetera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87df794e2815_94530911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d66ad37beba0bc8f1a4f1bc488b1b6e6767cec5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_Web2\\templates\\editar_billetera.tpl',
      1 => 1602738442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f87df794e2815_94530911 (Smarty_Internal_Template $_smarty_tpl) {
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
       
                <form action="editar/billetera/<?php echo $_smarty_tpl->tpl_vars['billeteraedit_s']->value->id;?>
" method="post">
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

  </main>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 07:21:39
  from 'C:\xampp\htdocs\cajeros_airtm\templates\mensajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f97bc738f2d02_75454301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5ee4fc1995b85f05015d75649cbaafb9c20b643' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cajeros_airtm\\templates\\mensajes.tpl',
      1 => 1603779321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f97bc738f2d02_75454301 (Smarty_Internal_Template $_smarty_tpl) {
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
              <h2><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h2>
        </div>
    </section>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 01:50:01
  from '/home/airtm/public_html/templates/inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8fcc096e3227_21533100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4331776c5d14feb86ca65de5f50038d7a1c3c126' => 
    array (
      0 => '/home/airtm/public_html/templates/inicio.tpl',
      1 => 1603259399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8fcc096e3227_21533100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main id="main">

<section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
      <h1>SoyCajero.com</h1>
      <h2>Admnistrador de transacciones para cajeros de AirTM!</h2>
      <div class="d-lg-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video vbox-item" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
      <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

</section>

<section id="about" class="about">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>¿Qué es?</h2>
          SoyCajero.com es una plataforma creada para facilitar el control, historial y estadísticas de usuarios cajeros de AirTM.
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Algunas características con las que podrás contar.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Control de Transacciones Realizadas como Cajero de AirTM</li>
              <li><i class="ri-check-double-line"></i> Estadísticas de Ganancias.</li>
              <li><i class="ri-check-double-line"></i> Control de Billeteras Electrónicas.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              <h5>Fase Beta</h5>
              El sitio web se encuenta en la versión Beta. Se irán desarrollando nuevas características que se habilitarán para todos los usuarios registrados.
            </p>
            <a href="#" class="btn-learn-more">Solicitar Registro</a>
          </div>
        </div>

      </div>
    </section>


</main>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 23:38:30
  from '/home/soycajero/public_html/templates/inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f90feb6aa46a0_64472028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab17994c9ba631d42c34aae6ca77e347be119476' => 
    array (
      0 => '/home/soycajero/public_html/templates/inicio.tpl',
      1 => 1603337907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f90feb6aa46a0_64472028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main id="main">

<section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
      <h1>SoyCajero.com</h1>
      <h2>Admnistrador de transacciones para cajeros de airtm!</h2>
      <div class="d-lg-flex">
        <a href="registro" class="btn-get-started scrollto">¿Quieres ser Beta?</a>
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
          <h2>¿Qué es SoyCajero?</h2>
          SoyCajero.com es una plataforma creada para facilitar el control, historial y estadísticas de usuarios cajeros de AirTM.
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Algunas características con las que ya contamos.
            </p>
            <ul>
              <li><i class="fas fa-handshake"></i> Control de Transacciones Realizadas como Cajero de AirTM</li>
              <li><i class="far fa-money-bill-alt"></i> Estadísticas de Ganancias.</li>
              <li><i class="fas fa-wallet"></i> Billeteras Electrónicas con Comisiones Precargadas.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              <h5><i class="fas fa-code"></i> Fase Beta</h5>
              El sitio web se encuenta en la versión Beta. Se irán desarrollando nuevas características que se habilitarán para todos los usuarios registrados.
            </p>
            <a href="registro" class="btn-learn-more">Solicitar Registro</a>
          </div>
        </div>

      </div>
    </section>


    <section id="why-us" class="why-us section-bg">
    <div class="container-fluid aos-init aos-animate" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

        <div class="section-title">
        <h2>Algunas preguntas frecuentes</h2>
      </div>

          <div class="accordion-list">
            <ul>
              <li>
                <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span>¿La sincronización con AirTM es automática? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                  <p>
                    No, cada transacción realizada será añadida por el usuario manualmente.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> ¿Debo agregar las billeteras por mi cuenta? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                  <p>
                    No, las billeteras se encuentran pre-cargadas y se irán añadiendo a medida que los usuarios del sitio web las vayan solicitando. Cada billetera ya incorpora su comisión tanto para Fondeo como Retiro.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> ¿Cuanto cuesta? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                  <p>
                    El precio de utilización de la aplicación será de 15 AirUSD mensuales. Obteniendo descuento por ingresar con referido.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#accordion-list-4" class="collapsed"><span>04</span> ¿Habrá sistema de afiliados? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                  <p>
                    Al igual que cualquier plataforma actual, se prevee un sistema de afiliados que permitirá ganar hasta 3 AirUSD mensuales por usuario recomendado activo que utilice la pasarela.
                  </p>
                </div>
              </li>              

            </ul>
          </div>

        </div>

        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img aos-init aos-animate" style="background-image: url(&quot;assets/img/why-us.png&quot;);" data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
      </div>

    </div>
  </section>

</main>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

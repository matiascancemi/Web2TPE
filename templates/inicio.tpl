{include file="header.tpl"}

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

<br>
    <section id="about" class="about">
    <div class="container">
    <div class="section-title">
    <h2>Últimas Transacciones</h2>
    
  </div>
    <div class="row transacciones contact">

    {foreach key=key from=$transacciones_s item=transaccion}

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">

              <div class="info">


                <a href="ver/transaccion/{$transaccion->id_tns}"><div class="icono icono-{foreach from=$billeteras_s item=billetera}{if ({$transaccion->id_billetera}=={$billetera->id})}{$billetera->nombre|lower}{/if}{/foreach}"></div></a>

                  <div><h6>Usuario:</h6> <span>{$transaccion->usuario}</span></div>

                  <div><h6>Fecha</h6> <span>{$transaccion->fecha_tns}</span></div>

                  <div><h6>Tipo de Operación</h6> <span>{$transaccion->tipo_de_operacion}</span></div>

                {if ({$transaccion->moneda})}<div><h6>Moneda</h6> <span>

                  {foreach from=$monedas_s item=moneda}

                  {if ({$transaccion->moneda}=={$moneda->id})}{$moneda->nombre} ({$moneda->iso}){/if}

                {/foreach}

                </span></div>{/if}

                <div><h6>Saldo Enviado</h6> <span>{$transaccion->saldo_enviar}</span></div>

                <div><h6>Saldo Recibido</h6> <span>{$transaccion->saldo_recibir}</span></div>

                <div><h6>Tipo de Cambio</h6> <span>{$transaccion->tipo_cambio}</span></div>

                {if ({$transaccion->valor_de_moneda}> 0)}<div><h6>Valor de Moneda Real</h6> <span>{$transaccion->valor_de_moneda}</span></div>{/if}

                <div class="{if ({$transaccion->ganancia}<=0)}perdida{else}ganancia{/if}"><h6>{if ({$transaccion->ganancia}< 0)}Perdida:{elseif ({$transaccion->ganancia}==0)}No aplica{else}Ganancia:{/if}</h6> </span>{if ({$transaccion->ganancia}!=0)} $ {$transaccion->ganancia|string_format:"%.2f"}{/if}</span></div>

                <div class="btn-detalles"><a href="transaccion?id={$transaccion->id_tns}" class="btn btn-primary">Detalles</a></div>

              </div>

            </div>

      {/foreach}

    </div>
      <nav aria-label="Page navigation example">
    <ul class="pagination">
      {if ({$smarty.get.pagina} >= $cant_paginas)}
        <li class="page-item"><a class="page-link" href="?pagina={$smarty.get.pagina-1}">Anterior</a></li>
      {/if}
      {for $foo=1 to $cant_paginas}
      <li class="page-item {if ({$smarty.get.pagina == $foo})}active{/if}"><a class="page-link" href="?pagina={$foo}">{$foo}</a></li>
      {/for}
      {if ({$smarty.get.pagina} < $cant_paginas)}
        <li class="page-item"><a class="page-link" href="?pagina={$smarty.get.pagina+1}">Siguiente</a></li>
      {/if}
    </ul>
  </nav>
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



{include file="footer.tpl"}
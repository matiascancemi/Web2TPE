{include file="header.tpl"}

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>{$titulo_s}</li>
        </ol>
        <h2>{$titulo_s}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="services" class="services portfolio">
      <div class="container" data-aos="fade-up">

<div class="row justify-content-center">
          <div class="col-lg-6">
                    <ul id="portfolio-flters" class="d-flex justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                              <li class="{if ({$id_billetera}==0)}filter-active{/if}"><a href="transacciones">Todos</li>
          {foreach from=$billeteras_s item=billetera}
          <li class="{if ({$billetera->id}=={$id_billetera})}filter-active{/if}"><a href="transacciones/billetera/{$billetera->id}" class="btn-get-started scrollto">{$billetera->nombre}</a></li>
          {/foreach}
        </ul>
          </div>
        </div>

          <div class="row">

            {foreach from=$transacciones_s item=transaccion}
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="ver/transaccion/{$transaccion->id_tns}">{$transaccion->nombre|upper}</a></h4>
                        <h6>Tipo de Operación: {$transaccion->tipo_de_operacion}</h6>
                        <h6>Saldo Enviado: {$transaccion->saldo_enviar}</h6>
                        <h6>Saldo Recibido: {$transaccion->saldo_recibir}</h6>
                        <h6>Tipo de Cambio: {$transaccion->tipo_cambio}</h6>
                        <h6>Ganancia: {$transaccion->ganancia}</h6> 
                        <a href="ver/transaccion/{$transaccion->id_tns}" class="buy-btn">Ver Detalles</a>       
                        {if isset($smarty.session.USUARIO)}
                        <a href="eliminar/transaccion/{$transaccion->id_tns}" class="buy-btn">Borrar</a>       
                        {/if}
                      </div>
                    </div>
              {/foreach}
            </div>
      </div>
    </section>

  </main>



{include file="footer.tpl"}

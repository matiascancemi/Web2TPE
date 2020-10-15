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

   <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="icono icono-{$transaccion->nombre|lower} grande"></div>
              <div class="member-info">
                <span class="ganancia {if ({$transaccion->ganancia}<=0)}perdida{/if}"><h5>{if ({$transaccion->ganancia}<=0)}Perdida{else}Ganancia{/if}:</h5> {$transaccion->ganancia}</span>
                <span><h5>Fecha:</h5> {$transaccion->fecha_tns}</span>
                <span><h5>Tipo de Operación:</h5> {$transaccion->tipo_de_operacion}</span>
                <span><h5>Saldo a Enviar:</h5> {$transaccion->saldo_enviar}</span>
                <span><h5>Saldor a Recibir:</h5> {$transaccion->saldo_recibir}</span>
                <span><h5>Tipo de Cambio:</h5> {$transaccion->tipo_cambio}</span>
                {if isset($smarty.session.USUARIO)}
                <a href="eliminar/transaccion/{$transaccion->id_tns}"  class="buy-btn">Borrar</a>
                <a href="editar/transaccion/{$transaccion->id_tns}"  class="buy-btn">eDITAR</a>
                {/if}
              </div>
            </div>
          </div>

      </div>
    </section>

  </main>



{include file="footer.tpl"}


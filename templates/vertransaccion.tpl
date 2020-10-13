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
              <div class="pic"><img src="/imgs/logo_airtm.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{$transaccion->nombre|upper}</h4>
                <span>{$transaccion->fecha_tns}</span>
                <span>{$transaccion->tipo_de_operacion}</span>
                <span>{$transaccion->saldo_enviar}</span>
                <span>{$transaccion->saldo_recibir}</span>
                <span>{$transaccion->tipo_cambio}</span>
                <span>{$transaccion->ganancia}</span>
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


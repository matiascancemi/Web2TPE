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

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

              {foreach from=$billeteras_s item=billetera}
              <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 pricing" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                <div class="icono icono-{$billetera->nombre|lower}"></div>
                    <h6>Comisión Unica:{$billetera->comision_unica} </h6>
                    <h6>Comisión Porcentual: {$billetera->comision_porcentual}</h6>
                    {if isset($smarty.session.USUARIO)}
                    <a href="eliminar/billetera/{$billetera->id}" class="buy-btn">Borrar</a> 
                    <a href="editar/billetera/{$billetera->id}" class="buy-btn">Editar</a> 
                    {/if}
             </div>
             {/foreach}
          
        </div>
    </section>

  </main>

{include file="footer.tpl"}

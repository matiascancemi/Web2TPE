{include file="header.tpl"}



<main id="main">



    <!-- ======= Breadcrumbs ======= -->

    <section id="breadcrumbs" class="breadcrumbs">

      <div class="container">



        <ol>

          <li><a href="index.html">Home</a></li>

          <li>{$titulo_s}</li>

        </ol>

        <h2>{$titulo_s}
        </h2>



      </div>

    </section><!-- End Breadcrumbs -->



    <section id="services" class="services portfolio">

      <div class="container" data-aos="fade-up">

      <h4><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" class="boton-agregar-transaccion ">Agregar Transacción</a></h4>

<div class="row justify-content-center">

          <div class="col-lg-8">

                    <ul id="portfolio-flters" class="d-flex justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

                              <li class="{if ({$id_billetera}==0)}filter-active{/if}"><a href="transacciones">Todos</li>

          {foreach from=$billeteras_s item=billetera}

          <li class="{if ({$billetera->id}=={$id_billetera})}filter-active{/if}"><a href="transacciones/billetera/{$billetera->id}" class="btn-get-started scrollto">{$billetera->nombre}</a></li>

          {/foreach}

        </ul>

          </div>

        </div>



          <div class="row transacciones contact">



            {foreach key=key from=$transacciones_s item=transaccion}

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">

                      <div class="info">

                        <a href="ver/transaccion/{$transaccion->id_tns}"><div class="icono icono-{foreach from=$billeteras_s item=billetera}{if ({$transaccion->id_billetera}=={$billetera->id})}{$billetera->nombre|lower}{/if}{/foreach}"></div></a>

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

                        <div class="btn-detalles"><a href="ver/transaccion/{$transaccion->id_tns}" class="btn btn-primary">Detalles</a></div>

                        <div class="btn-borrar"><a href="eliminar/transaccion/{$transaccion->id_tns}" class="btn btn-danger">Borrar</a></div>

                      </div>

                    </div>

              {/foreach}

            </div>

      </div>

    </section>



  </main>







{include file="footer.tpl"}


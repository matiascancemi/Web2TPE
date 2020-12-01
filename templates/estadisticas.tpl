{include file="header.tpl"}

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Estadísticas</a></li>
                <li>{$titulo_s}</li>
            </ol>
            <h2>{$titulo_s}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="services" class="services portfolio">
        <div class="container" data-aos="fade-up">

        <form action="estadisticas/fecha" method="GET">
            <div class="row filtros">
            
                <div class="col-lg-4 col-sm-1">
                    <h3>filtro por fecha</h3>
                      <div class="form-group">
                        Desde: <input name="desde" value="{$desde_s|date_format:"%d-%m-%Y"}">
                      </div>
                      <div class="form-group">
                        Hasta: <input name="hasta" value="{$hasta_s|date_format:"%d-%m-%Y"}">
                      </div>
                </div>
                <div class="col-lg-4 col-sm-1">
                    <h3>filtro por billetera</h3>
                      <div class="form-group">
                      <select name="id_billetera">
                            <option value="0">Todas</option>
                          {foreach from=$billeteras_s item=billetera}
                          <option value="{$billetera->id}" {if ({$billetera->id}=={$id_billetera_s})}selected{/if}>{$billetera->nombre}</option>
                          {/foreach}
                        </select>
                      </div>
                </div>                
            <div class="col-lg-4 col-sm-1">
              <button type="submit" class="btn btn-primary">filtrar</button>
           </div>                
        </div>       

            </form>
                <div class="row transacciones estadisticas">
                <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                    <div class="icon"><i class="far fa-calendar-alt"></i></div>
                    <h4><a href="">fecha</a></h4>
                    <h5>{$desde_s|date_format:"%d/%m/%Y"} / {$hasta_s|date_format:"%d/%m/%Y"} </h5>
                  </div>
                </div>
      
                <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                    <div class="icon"><i class="fas fa-handshake"></i></div>
                    <h4><a href="">cantidad de transacciones</a></h4>
                    <h2>{$totaldetns_s}</h2>
                  </div>
                </div>

                <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                  <div class="icon"><i class="fas fa-money-bill-alt"></i></div>
                  <h4><a href="">ganancias totales</a></h4>
                  <h2>{$total_s|string_format:"%.2f"}</h2>
                </div>
              </div>                

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Billetera</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Tipo de Operación</th>
                                <th scope="col">Saldo Enviado</th>
                                <th scope="col">Saldo Recibido</th>
                                <th scope="col">Tipo de Cambio</th>
                                <th scope="col">Ganancia</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach key=key from=$transacciones_s item=transaccion}
                                <tr>
                                    <th scope="row"><a href="transaccion?id={$transaccion->id_tns}">
                                      {foreach from=$billeteras_s item=billetera}
                                        {if ({$billetera->id}=={$transaccion->id_billetera})}
                                          <img src="{$billetera->imagen}"/>
                                        {/if}       
                                      {/foreach}
                                    </a></th>
                                    <td>{$transaccion->fecha_tns|date_format:"%d/%m/%Y"}</td>
                                    <td>{$transaccion->tipo_de_operacion}</td>
                                    <td>$ {$transaccion->saldo_enviar}</td>
                                    <td>$ {$transaccion->saldo_recibir}</td>
                                    <td>$ {$transaccion->tipo_cambio}</td>
                                    <td>$ {$transaccion->ganancia|string_format:"%.2f"}</td>
                                </tr>
                            {/foreach}
                                <tr>
                                    <th scope="row">Total</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>$ {$total_s|string_format:"%.2f"}</td>
                                </tr>
                        </tbody>
                      </table>
                </div>
        </div>
    </section>

</main>



{include file="footer.tpl"}
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

        <form action="editar/transaccion/{$transaccion_s->id_tns}" method="post">
                <label for="title">Billetera</label>
                <select id="billeteras" name="id_billetera">
                {foreach from=$billeteras_s item=billetera}
                    <option value="{$billetera->id}" {if ({$transaccion_s->id_billetera}=={$billetera->id})}selected{/if}>{$billetera->nombre}</option>
                {/foreach}
                </select>
            </div>
            <div class="form-group">
                <label for="description">Fecha de Transacción</label>
                <input type="text" class="form-control" name="fecha_tns" value="{$transaccion_s->fecha_tns}" placeholder="Ej: 22/02/1986">
            </div>
            <div class="form-group">
                <label for="priority">Tipo de Operación</label>
                    <select id="billeteras" name="tipo_de_operacion">
                        <option value="Fondeo" {if ({$transaccion_s->tipo_de_operacion=="Fondeo"})}selected{/if}>Fondeo</option>
                        <option value="Retiro" {if ({$transaccion_s->tipo_de_operacion=="Retiro"})}selected{/if}>Retiro</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="priority">Saldo a Enviar</label>
                <input class="form-control" id="saldo_enviar" name="saldo_enviar" value="{$transaccion_s->saldo_enviar}">
            </div>
            <div class="form-group">
                <label for="priority">Saldo a Recibir</label>
                <input class="form-control" id="saldo_recibir" name="saldo_recibir" value="{$transaccion_s->saldo_recibir}">
            </div>     
            <div class="form-group">
                <label for="priority">Tipo de Cambio</label>
                <input class="form-control" id="tipo_cambio" name="tipo_cambio" value="{$transaccion_s->tipo_cambio}">
            </div>                        
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>

      </div>
    </section>

  </main>



{include file="footer.tpl"}

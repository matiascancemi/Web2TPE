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

    <section id="services" class="services contact">
        <div class="container contact" data-aos="fade-up">

            <div class="row transacciones contact">

                {foreach from=$billeteras_s item=billetera}
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 pricing" data-aos="zoom-in" data-aos-delay="200">
                        <div class="info">
                            <div class="icono icono-{$billetera->nombre|lower}"></div>
                            {if isset($billetera->imagen)}
                                <img src="{$billetera->imagen}"/>
                            {/if}                        
                            <div><h6>Comisión Unica:</h6> <span>{$billetera->comision_unica}</span></div>
                            <div><h6>Comisión Porcentual:</h6> <span>{$billetera->comision_porcentual}</span></div>
                            <div><h6>Comisión Mínima:</h6> <span>{$billetera->comision_minima}</span></div>
                            {if $smarty.session.ROL == 0}
                                <a href="eliminar/billetera/{$billetera->id}" class="buy-btn">Borrar</a>
                                <a href="editar/billetera/{$billetera->id}" class="buy-btn">Editar</a>
                            {/if}
                        </div>
                    </div>
                {/foreach}

            </div>
        </div>
    </section>

</main>

{include file="footer.tpl"}
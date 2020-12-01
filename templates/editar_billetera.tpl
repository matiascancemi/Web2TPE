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
    {if isset($smarty.session.ROL) && $smarty.session.ROL == 0}
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
       
                <form action="editar/billetera/{$billeteraedit_s->id}" method="post" enctype="multipart/form-data">
                {if isset($billeteraedit_s->imagen)}
                  <img src="{$billeteraedit_s->imagen}" height="200"/>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="eliminarimagen">
                    <label class="form-check-label" for="exampleCheck1">Eliminar Imagen</label>
                    <input id="imagen" name="imagen" type="hidden" value="{$billeteraedit_s->imagen}">
                </div>
                  {else}
                  <div class="form-group">
                  <label for="priority">Imagen</label>
                  <input type="file" name="input_name" id="imagen">
              </div>
                {/if}
                    <div class="form-group">
                        <label for="title">Nombre de Billetera</label>
                        <input class="form-control" id="title" name="nombre" value="{$billeteraedit_s->nombre}">
                        <small id="emailHelp" class="form-text text-muted">Nombre</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Comisión Única</label>
                        <input class="form-control" id="comision_unica" name="comision_unica" value="{$billeteraedit_s->comision_unica} ">
                    </div>
                    <div class="form-group">
                        <label for="priority">Comisión Porcentual</label>
                        <input class="form-control" id="comision_porcentual" name="comision_porcentual" value="{$billeteraedit_s->comision_porcentual}">
                        </div>
                        <div class="form-group">
                        <label for="priority">Comisión Minima</label>
                        <input class="form-control" id="comision_minima" name="comision_minima" value="{$billeteraedit_s->comision_minima}">
                        </div>                        
                    <button type="submit" class="btn btn-primary">Editar</button>
                    </form>

      </div>
    </section>
    {else}
        <section id="services" class="services">
      <div class="container" data-aos="fade-up">
       
                <h3>Usted no tiene permisos para editar billeteras. Consulte al Administrador</h3>

      </div>
    </section>
    {/if}
  </main>



{include file="footer.tpl"}

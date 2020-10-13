
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
          <div class="row">
            {if !isset($smarty.session.USUARIO)}
           <div class="col-lg-12">
                <p>
                   {if isset($mensaje)} <h2>{$mensaje}</h2> {/if}
                </p>
                </div>
                  <div class="col-lg-12">
                        <form action="login" method="post">
                            <div class="form-group">
                                <label for="priority">Usuario</label>
                                <input class="form-control" id="usuario" name="usuario">
                            </div>
                            <div class="form-group">
                                <label for="priority">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena">
                            </div>                          
                            <button type="submit" class="btn btn-primary">Loguearse</button>
                        </form>
                  </div>
              </div>
            {else}
            <h3>Bienvenido!</h3>
            {/if}            

        </div>
    </section>

{include file="footer.tpl"}


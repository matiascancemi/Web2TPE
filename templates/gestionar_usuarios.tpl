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

            <div class="row transacciones contact">
              <table width="100%">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Email</th>
                  <th>Usuario</th>
                  <th>Rol</th>
                  <th></th>
                </tr>
              </thead>
              {foreach from=$usuarios_s item=usuario}
                <tr>
                  <td>{$usuario->nombre}</td>
                  <td>{$usuario->apellido}</td>
                  <td>{$usuario->email}</td>
                  <td>{$usuario->usuario}</td>
                  <td>{if ({$usuario->rol} == 1)}Usuario <a href="usuarios/admin?id={$usuario->id_adm}" title="Convertir en Administrador"><i class="fas fa-user-shield"></i></a>{else}Administrador <a href="usuarios/admin?id={$usuario->id_adm}" title="Convertir en Usuario"><i class="fas fa-user"></i></a>{/if}</td>
                  <td><a href="usuarios/eliminar?id={$usuario->id_adm}" title="Eliminar Usuario"><i class="fas fa-window-close"></i></a></td>
                </tr>
              {/foreach}
              </table>

            </div>

        </div>

    </section>



</main>







{include file="footer.tpl"}
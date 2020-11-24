{include file="header.tpl"}

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Registro de Usuario</a></li>
                <li>{$titulo_s}</li>
            </ol>
            <h2>{$titulo_s}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="services" class="services portfolio">
        <div class="container" data-aos="fade-up">
            <form action="registro" method="POST">
                <div class="row">
                    <div class="col-lg-12 col-sm-1">
                        <div class="form-group">
                            <label for="description">Usuario</label>
                            <input type="text" class="form-control" name="usuario" value="">
                        </div> 
                        <div class="form-group">
                            <label for="description">Contraseña</label>
                            <input type="password" class="form-control" name="contrasena" value="">
                        </div>                                                
                        <div class="form-group">
                            <label for="description">Nombre Completo</label>
                            <input type="text" class="form-control" name="nombre" value="">
                        </div>   
                        <div class="form-group">
                            <label for="description">Apellido</label>
                            <input type="text" class="form-control" name="apellido" value="">
                        </div>   
                        <div class="form-group">
                            <label for="description">Email</label>
                            <input type="email" class="form-control" name="email" value="">
                        </div>   
                        <div class="form-group">
                            <label for="description">Referido (Nombre de Usuario)</label>
                            <input type="text" class="form-control" name="referido" value="">
                        </div> 
                        <button type="submit" class="btn btn-primary">Registrarse</button>                                                                                                
                    </div>
                </div>
            </form>
        </div>
    </section>

</main>



{include file="footer.tpl"}
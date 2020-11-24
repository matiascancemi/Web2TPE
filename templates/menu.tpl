<nav class="nav-menu d-none d-lg-block">
    <ul>
        {if isset($smarty.session.USUARIO)}
            <li><a href="billeteras">Billeteras</a></li>
            <li class="drop-down"><a href="transacciones">Transacciones</a>
                <ul>
                    <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar Transacción</a></li>
                </ul>
            </li>
            
            <li><a href="estadisticas">Estadisticas</a></li>
            
        {/if}
        {if isset($smarty.session.ROL) && $smarty.session.ROL == 0}
            <li class="drop-down"><a href="#">Administrador</a>
                <ul>
                    <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg.billetera">Agregar Billeteras</a></li>
                    <li><a href="usuarios">Usuarios</a></li>
            </li>
        {/if}
    </ul>
</nav>
    {if !isset($smarty.session.USUARIO)}
      <a href="login" class="get-started-btn scrollto">Login</a>
      {else}
      <a href="logout" class="get-started-btn scrollto">Salir</a>
      {/if}
<!-- .nav-menu -->
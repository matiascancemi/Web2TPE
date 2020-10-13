<nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="home">Home</a></li>
            <li><a href="billeteras">Billeteras</a>
          <li><a href="transacciones">Transacciones</a>
          </li>
          {if isset($smarty.session.USUARIO)}
          <li class="drop-down"><a href="#">Administrador</a>
            <ul>
              <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg.billetera">Agregar Billeteras</a></li>
              <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar Transacción</a></li>
          </li>
          {/if}
        </ul>
      </nav><!-- .nav-menu -->
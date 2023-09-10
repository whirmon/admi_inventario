<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bodega-Inventario</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <!--
                llamando la ruta de la vista cursos.blade.php
              -->
                <a class="nav-link" href="{{ url('/inventario') }}">Inventario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/proveedor1')}}">Proveedores</a>
            </li>
        </ul>
      </div>
    </div>
</nav>
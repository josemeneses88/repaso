
<div class="container">
    <h1>MOSTRAR VIAJERO</h1>
    <br>

    <div>
        <p><strong>Identificación:</strong> {{ $viajero->identificacionviajero }}</p>
        <p><strong>Nombre:</strong> {{ $viajero->nombreviajero }}</p>
        <p><strong>Direccion:</strong> {{ $viajero->direccionviajero }}</p>
        <p><strong>Telefono:</strong> {{ $viajero->telefonoviajero }}</p>
    </div>
</div>

<a href="{{url('viajero')}}" class="btn btn-primary"> <h3> Regresar  </h3> </a>

<br>
@if(count($errors) > 0) 
<div class="alert alert-danger" role="alert">
    <ul>
    @foreach($errors->all() as $error)
        <li> {{$error}} </li>
    @endforeach
    </ul>
</div>
@endif

<br>
<label for=Identificacion> Identificacion </label>
<input type="text" name="identificacionviajero" value="{{isset($viajero->identificacionviajero)?$viajero->identificacionviajero:old('identificacionviajero')}}" id="identificacionviajero">
<br>
<br>
<label for=Nombre> Nombre </label> {{--  en iisset pregunta si existe un valor, si existe que lo mueste  $viajero->nombreviajero : si no, que imprima vacio--}}
<input type="text" name="nombreviajero" value="{{isset($viajero->nombreviajero)?$viajero->nombreviajero:old('nombreviajero')}}" id="nombreviajero">
<br>
<br>
<label for=Direccion> Direccion </label>
<input type="text" name="direccionviajero" value="{{isset($viajero->direccionviajero)?$viajero->direccionviajero:old('direccionviajero')}}" id="direccionviajero">
<br>
<br>
<label for=telefono> Telefono </label>
<input type="text" name="telefonoviajero" value="{{isset($viajero->telefonoviajero)?$viajero->telefonoviajero:old('telefonoviajero')}}" id="telefonoviajero">
<br>
<br>
<input type="submit" Value="Guardar"> {{-- se pone value para eliminar el dato del envio name="Enviar" --}}
<br>

<a href="{{url('viajero')}}" class="btn btn-primary"> <h3> Regresar  </h3> </a>




{{-- 17- Creacion de formulario de envio --}}
<h1>CREAR VIAJERO</h1>

{{-- desde aqui se envia a storage, con el uso del methoso post--}}
<form action="{{url('/viajero')}}" method="post" enctype="multipart/form-data">
    @csrf {{-- LLave de seguridad obligatoria --}}
    {{--  Incluye lo que esta en formulario  --}}
    @include('viajero.form');
</form>
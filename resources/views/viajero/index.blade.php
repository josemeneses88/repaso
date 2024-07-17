{{-- 10-   VISTA viajero/INDEX --}}

<a href="{{url('viajero/create')}}" class="btn btn-primary"> <h3> Registrar Nuevo viajero  </h3> </a>
<br>
<br>

<h1>   LISTADO DE VIAJEROS AGREGADOS   </h1>

<table class="table table-light">
    <thead class="thead-light">{{-- Cabezera de la consulta --}}
        <tr>
            <th>ID</th>
            <th>IDENTIFICACION</th>
            <th>NOMBRE</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>


    <tbody>
        @foreach ($viajero as $viajero)
            
        <tr>
            <td>{{$viajero-> id }}</td>
            <td>{{$viajero-> identificacionviajero }}</td>
            <td>{{$viajero-> nombreviajero}}</td>
            <td>{{$viajero-> direccionviajero}}</td>
            <td>{{$viajero-> telefonoviajero}}</td>

            <td>
                {{-- 22- Crear boton Editar: <viajero/id/edit</edit> --}}
                <a href="{{url('/viajero/'.$viajero->id.'/edit')}}">
                Editar 
                </a>

                {{-- 19- ACCION ELIMINAR --}}
                <form action="{{url('/viajero/'.$viajero->id)}}"  method="post" >  {{-- Envio los datos para ser borrados  --}}
                    @csrf
                    {{method_field('DELETE')}} 
                    <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                </form>

                {{-- Mostrar viajero --}}
                <a href="{{url('/viajero/'.$viajero->id.'/show')}}">
                Mostrar 
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> 


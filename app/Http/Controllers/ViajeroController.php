<?php

namespace App\Http\Controllers;

use App\Models\viajero;
use Illuminate\Http\Request;

class ViajeroController extends Controller
{
    public function index()
    {
        $datos['viajero']=Viajero::paginate(10);//
        return view ('viajero.index', $datos);
    }

    public function create()
    {
        return view ('viajero.create');
    }

    public function store(Request $request)
    {
        // 18-  envio de datos --importante
        $campos=[ // validaciones para los campo
            'identificacionviajero'=>'required|integer',
            'nombreviajero'=>'required|string|max:50',
            'direccionviajero'=>'required|string|max:50',
            'telefonoviajero'=>'required|integer',
        ];
        
        $mensaje=[// mensaje enviado
            'required'=>'El :attribute es requerido',
        ];

        $validatedData = $request->validate($campos, $mensaje);


        $datosviajero =  $request->except('_token');// obtiene los datos que le enviaron exceptuando _token
        viajero::insert($datosviajero); // Aqui guarda los datos recibidos menos el token
        //return response()->json($datosviajero); // muestra la informacion que le enviamos 
        return redirect ('viajero')->with('mensaje','VIAJERO AGREGADO CON EXITO');

    }

    public function show($id)
    {
        $viajero = Viajero::findOrFail($id);
        return view('viajero.show', compact('viajero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $viajero = Viajero::findOrFail($id);
        return view('viajero.edit', compact('viajero'));
    }

    public function update(Request $request, $id)
    {
        $datosviajero =  $request->except(['_token','_method']);// obtiene los datos que le enviaron exceptuando _token y _method
        viajero::where('id','=',$id)->update($datosviajero);// revisa si los id coinciden para hacer el update
        $viajero=viajero::findOrFail($id);
        //  Redireccionando a la vista edit
        // return view('viajero.edit', compact('viajero'));// enviamos los datos encontrados a la vista
        return redirect ('viajero')->with('mensaje','VIAJERO MODIFICADO CON EXITO');


    }

    public function destroy($id)
    {
        Viajero::destroy($id);
        return redirect('viajero'); // redirecciona a la lista de presidente
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['administrador']=Administrador::paginate(5);
        return view('administrador.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('administrador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'tituloServicio'=>'required|string|max:100',
            'precioServicio'=>'required|string|max:100',
            'imagenServicio'=>'required|max:10000|mimes:jpeg,png,jpg,webp',
            
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'imagenServicio.required'=>'La :attribute es requerido',

        ];

        $this->validate($request, $campos, $mensaje);
        //$datosAdministrador = request()->all();
        $datosAdministrador = request()->except('_token');

        if ($request->hasFile('imagenServicio')) {
            $datosAdministrador['imagenServicio']=$request->file('imagenServicio')->store('uploads','public');
        }

        Administrador::insert($datosAdministrador);

        return redirect ('administrador')->with('mensaje', 'Servicio Agregado Correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $administrador=Administrador::findOrFail($id); 
       return view('administrador.edit', compact('administrador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'tituloServicio'=>'required|string|max:100',
            'precioServicio'=>'required|string|max:100',
            
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            
        ];

        if ($request->hasFile('Foto')) {

            $campos=['imagenServicio'=>'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=['imagenServicio.required'=>'La foto es requerida'];
        }

        $this->validate($request, $campos, $mensaje);

        $datosAdministrador = request()->except(['_token','_method']);

        if ($request->hasFile('imagenServicio')) {
            $administrador=Administrador::findOrFail($id);
            Storage::delete('public/'.$administrador->imagenServicio);
            $datosAdministrador['imagenServicio']=$request->file('imagenServicio')->store('uploads','public');
        }

        Administrador::where('id','=',$id)->update($datosAdministrador);

        $administrador=Administrador::findOrFail($id); 
        return redirect('administrador')->with('mensaje','Servicio Agregado Con Exito!!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $administrador=Administrador::findOrFail($id); 
        if (Storage::delete('public/'.$administrador->imagenServicio)) {
            Administrador::destroy($id);
        }
        
        return redirect('administrador')->with('mensaje','Servicio Eliminado Correctamente!');
    }
}

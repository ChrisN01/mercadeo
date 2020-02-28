<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('auth.tipo_registro');
    }
    //Funcion para verificar el tipo de registro seleccionado y enviar a la ruta correspondiente
    public function tipo_registro_seleccionado(Request $request )
    {
        //return ($request->get('tipo'));
       //dd(request()->all());
       $tipo = $request->input('tipo');
       // return dd($tipo);
        if( $request->input('tipo') == 1)
        {

            return redirect ('RegistroPersonaN');
        }
        else if ( $request->input('tipo') == 2)
        {
            return redirect ('RegistroEmpresa');
        }
        
    }

    //Funcion donde se muestra la vista para el registro de clientes (personas naturales)

    public function registro_clientes()
    {
        return view('auth.register_clientes');
    }
    //Funcion donde se muestra la vista para el registro de empresas

    public function registro_empresas()
    {
        return view('auth.register_empresa');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

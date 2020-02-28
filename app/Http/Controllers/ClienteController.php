<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Exception;
use DataTables;
//use Validator;
//Importacion de los modelos
use App\Models\User;
use App\Models\Cliente;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //return dd ($request->all());
        //Validaciones
        $this->validate($request, [
            'name' => 'required|string|min:3|max:45|alpha_spaces',
            'apellido' => 'required|string|min:3|max:45|alpha_spaces',
            'cedula' => 'required|string|min:7|max:15|alpha_num|unique:clientes',
            'direccion' => 'required|string|min:7|max:45',
            'telefono' => 'required|string|min:11|max:12|alpha_dash',
            'email' => 'required|string|email|max:70|unique:users',
            'password' => 'required|string|max:15|confirmed',
        ]);
        try{
            //Creacion de un nuevo usuario
            $n_user = User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),]);
            $n_user->save();
            $user_id= $n_user->id;//Se toma el id del usuario regsitrado
            Cliente::create([

                'nombre' => strtoupper($request->name),//Se guarda el nombre en letras mayusculas
                'apellido' => strtoupper($request->apellido),
                'cedula' => $request->cedula,
                'direccion' => strtoupper($request->direccion),
                'telefono' => $request->telefono,
                'licencia_id' => 1,//Esto se debe modificar
                'usuario_id' => $user_id, //Se le asigna el id del usuario creado anteriormente
            ]);
            return redirect()->route('listado_clientes')->with('mensaje', 'Registro realizado con éxito');

        }
        catch(Exception $e)
        {
            return "Fatal error - ".$e->getMessage();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*Se muestra el listado de clientes guardados*/
    public function show()
    {

        $clientes = DB::table('clientes')
        ->join('users', 'clientes.usuario_id', '=', 'users.id')
        ->select(array('clientes.id as id', 'clientes.nombre as nombre', 'clientes.cedula as cedula', 'clientes.apellido as apellido', 'clientes.direccion as direccion', 'clientes.telefono as telefono', 'users.email as email'))
        ->get();
        return view ('cliente.show', compact ('clientes'));
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

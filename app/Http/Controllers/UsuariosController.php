<?php

namespace Directorio\Http\Controllers;

use Directorio\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuarios::all();
        return view('admin/admin', ['id'=>'views'], compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/admin', ['id'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $datos = new Usuarios;
            $datos->nombre = $request->nombre;
            $datos->tipo_ident = $request->tipo_documento;
            $datos->num_ident = $request->numero_documento;
            $datos->email = $request->correo;
            $datos->telefono = $request->telefono;
            $datos->save();
            return response()->json([
            "mensaje" => "creado"
          ]);
        }
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
        $datos = Usuarios::find($id);
        return response()->json(
          $datos->toArray()
        );
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
        if ($request->ajax()) {
            $datos = Usuarios::find($id);
            $datos->nombre = $request->nombre;
            $datos->tipo_ident = $request->tipo_documento;
            $datos->num_ident = $request->numero_documento;
            $datos->email = $request->correo;
            $datos->telefono = $request->telefono;
            $datos->save();
            return response()->json([
          "mensaje" => "creado"
        ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuarios::destroy($id);
        return response()->json([
          "mensaje" => "Eliminado"
        ]);
    }
}

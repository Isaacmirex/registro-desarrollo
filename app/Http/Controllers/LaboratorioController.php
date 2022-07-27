<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use App\Models\Usuario;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{

    protected $rules = [
        'nombre' => 'required',
        'ubicacion' => 'required',
        'personal_cargo' => 'required',
        'descripcion' => 'required',
        'aforo' => 'required|numeric'
    ];
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
        return view('admin.register_lab');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->rules);
        $laboratorio = Laboratorio::create($data);
        return redirect()->route('admin.index')->with('alert', [
            'message' => "Laboratorio $laboratorio->nombre agregado correctamente.",
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratorio $laboratorio)
    {
        //
    }

    // Roles
    public function showUsers(Request $request)
    {
        $usuarios = Usuario::all();
        return view('admin.asignar_rol', compact('usuarios'));
    }

    public function updateUsers(Request $request)
    {
        $idUser = $request->get('id');
        $rol = $request->get('rol');

        $user = Usuario::find($idUser);
        $user->rol = $rol;
        $user->save();

        return redirect()->route('admin.rol.index');
    }
}

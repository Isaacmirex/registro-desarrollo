<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Laboratorio;
use App\Models\Usuario;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    protected $rules = [
        'nombre' => 'required',
        'detalle' => 'required',
        'asistentes' => 'required|numeric',
        'fecha' => 'required',
        'hora_inicio' => 'required',
        'hora_fin' => 'required',
        'usuario_id' => 'required|numeric',
        'laboratorio_id' => 'required|numeric'
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
        $usuarios = Usuario::all();
        $laboratorios = Laboratorio::all();
        return view('admin.register_ev', [
            'usuarios' => $usuarios,
            'laboratorios' => $laboratorios
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate($this->rules);
        $evento = Evento::create($data);
        return redirect()->route('admin.index')->with('alert', [
            'message' => "Evento $evento->nombre agregado correctamente.",
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        $usuarios = Usuario::all();
        $laboratorios = Laboratorio::all();
        return view('admin.edit_ev',  [
            'usuarios' => $usuarios,
            'laboratorios' => $laboratorios,
            'evento' => $evento
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $data = $request->validate($this->rules);
        $evento->update($data);
        return redirect()->route('admin.index')->with('alert', [
            'message' => "Evento $evento->nombre actualizado correctamente.",
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('admin.index')->with('alert', [
            'message' => "Evento $evento->nombre eliminado correctamente.",
            'type' => 'success'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Asignaciones;
use App\Http\Requests\StoreAsignacionesRequest;
use App\Http\Requests\UpdateAsignacionesRequest;
use App\Models\Clientes;
use App\Models\Salas;

class AsignacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos = Asignaciones::all();
        return view('admin.asignaciones.index')->with('datos', $datos);

    }

    public function create()
    {
        $clientes = Clientes::all();
        $salas = Salas::all();
        return view('admin.asignaciones.create')->with('clientes', $clientes)->with('salas', $salas);
    }

    public function store(StoreAsignacionesRequest $request)
    {
        //
    }

    public function show(Asignaciones $asignaciones)
    {
        //
    }

    public function edit(Asignaciones $asignaciones)
    {
        //
    }

    public function update(UpdateAsignacionesRequest $request, Asignaciones $asignaciones)
    {
        //
    }

    public function destroy(Asignaciones $asignaciones)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Asignaciones;
use App\Http\Requests\StoreAsignacionesRequest;
use App\Http\Requests\UpdateAsignacionesRequest;

class AsignacionesController extends Controller
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
     * @param  \App\Http\Requests\StoreAsignacionesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAsignacionesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asignaciones  $asignaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Asignaciones $asignaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignaciones  $asignaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignaciones $asignaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAsignacionesRequest  $request
     * @param  \App\Models\Asignaciones  $asignaciones
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAsignacionesRequest $request, Asignaciones $asignaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignaciones  $asignaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignaciones $asignaciones)
    {
        //
    }
}

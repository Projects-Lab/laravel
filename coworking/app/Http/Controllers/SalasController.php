<?php

namespace App\Http\Controllers;

use App\Models\Salas;
use App\Http\Requests\StoreSalasRequest;
use App\Http\Requests\UpdateSalasRequest;

class SalasController extends Controller
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
     * @param  \App\Http\Requests\StoreSalasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function show(Salas $salas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function edit(Salas $salas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalasRequest  $request
     * @param  \App\Models\Salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalasRequest $request, Salas $salas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salas $salas)
    {
        //
    }
}

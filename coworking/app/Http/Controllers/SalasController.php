<?php

namespace App\Http\Controllers;

use App\Models\Salas;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $salas = Salas::all();
        return view('admin.salas.index')->with('salas', $salas);
    }

    public function create()
    {
        return view('admin/salas/create');
    }

    public function store(Request $request)
    {
        $sala = new Salas();
        $sala->codigo = $request->get('codigo');
        $sala->nombre = $request->get('nombre');
        $sala->estado = $request->get('estado');

        $sala->save();

        return redirect('sala/index');
    }

    public function show(Salas $salas)
    {
        //
    }

    public function edit($id)
    {
        $sala = Salas::find($id);
        return view('admin.salas.edit')->with('sala', $sala);
    }

    public function update(Request $request, $id)
    {
        $sala = Salas::find($id);

        // $clientes->id = $request->get('id');      
        $sala->codigo = $request->get('codigo');
        $sala->nombre = $request->get('nombre');
        $sala->estado = $request->get('estado');

        $sala->save();

        return redirect('/sala/index');
    }

    public function destroy($id)
    {
        $sala = Salas::findOrFail($id);
        $sala->delete();

        return redirect('/sala/index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Clientes::all();
        return view('admin.clientes.index')->with('clientes', $clientes);
    }

    public function create()
    {
       return view('admin/clientes/create');
    }

    public function store(Request $request)
    {
        $clientes = new Clientes();
        $clientes->cedula = $request->get('cedula');
        $clientes->nombres = $request->get('nombres');
        $clientes->apellidos = $request->get('apellidos');
        $clientes->celular = $request->get('celular');


        $clientes->save();

        return redirect('cliente/index');
    }

    // public function show(Clientes $clientes)
    // {
        
    // }

    public function edit($id)
    {
        $clientes = Clientes::find($id);
        return view('admin.clientes.edit')->with('cliente',$clientes);
    }

    public function update(Request $request, $id)
    {
        $clientes = Clientes::find($id);

        // $clientes->id = $request->get('id');      
        $clientes->cedula = $request->get('cedula');
        $clientes->nombres = $request->get('nombres');
        $clientes->apellidos = $request->get('apellidos');
        $clientes->celular = $request->get('celular');


        $clientes->save();

        return redirect('/cliente/index');
    }

    public function destroy($id)
    {
        $clientes = Clientes::findOrFail($id);
        $clientes->delete();

        return redirect('/cliente/index');
    }
}
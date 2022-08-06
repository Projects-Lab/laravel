@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1>Editar Cliente</h1>
    <hr>
@stop

@section('content')
    <form action="/cliente/{{ $cliente->id }}/update" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Cédula</label>
            <input value="{{ $cliente->cedula }}" name="cedula" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombres</label>
            <input value="{{ $cliente->nombres }}" name="nombres" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input value="{{ $cliente->apellidos }}" name="apellidos" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Celular</label>
            <input value="{{ $cliente->celular }}" name="celular" type="text" class="form-control" tabindex="2">
        </div>
        <a href="/cliente/index" class="btn btn-secondary" tabindex="4">Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="5">Guardar</button>
    </form>
@stop

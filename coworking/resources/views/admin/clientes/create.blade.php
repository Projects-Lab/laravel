@extends('adminlte::page')

@section('title', 'Crear Cliente')

@section('content_header')
    <h1>Crear Cliente</h1>
    <hr>
@stop

@section('content')
    <form action="/cliente/store" method="POST" autocomplete="off">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Cédula</label>
            <input id="cedula" name="cedula" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombres</label>
            <input id="nombres" name="nombres" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input id="apellidos" name="apellidos" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Celular</label>
            <input id="celular" name="celular" type="text" class="form-control" tabindex="2">
        </div>
        <a href="/cliente/index" class="btn btn-secondary" tabindex="4">Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="5">Guardar</button>
    </form>
@stop

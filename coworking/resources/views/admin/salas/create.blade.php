@extends('adminlte::page')

@section('title', 'Crear Sala')

@section('content_header')
    <h1>Crear Sala</h1>
    <hr>
@stop

@section('content')
    <form action="/sala/store" method="POST" autocomplete="off">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <select class="form-control" id="estado" name="estado">
                <option value="Activa">Activa</option>
                <option value="Inactiva">Inactiva</option>
            </select>
        </div>
        <a href="/sala/index" class="btn btn-secondary" tabindex="4">Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="5">Guardar</button>
    </form>
@stop

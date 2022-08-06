@extends('adminlte::page')

@section('title', 'Edita Sala')

@section('content_header')
    <h1>Editar Sala</h1>
    <hr>
@stop

@section('content')
    <form action="/sala/{{ $sala->id }}/update" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input value="{{ $sala->codigo }}" name="codigo" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input value="{{ $sala->nombre }}" name="nombre" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Estado</label>
            <select class="form-control" name="estado">
                <option value="Activa" {{ $sala->estado == 'Activa' ? 'selected' : '' }}> Activa</option>
                <option value="Inactiva" {{ $sala->estado == 'Inactiva' ? 'selected' : '' }}> Inactiva</option>
            </select>
        </div>
        <a href="/sala/index" class="btn btn-secondary" tabindex="4">Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="5">Guardar</button>
    </form>
@stop

@extends('adminlte::page')

@section('title', 'Crear Cliente')

@section('content_header')
    <h1>Crear Asignacion</h1>
    <hr>
@stop

@section('content')
    <form action="/asignacion/store" method="POST" autocomplete="off">
        @csrf
        <div class="form-row">
            <div class="col">
                <div class="mb-3">
                    <label for="" class="form-label">Fecha Asignacion</label>
                    <input id="cedula" name="fecha_asignacion" type="datetime-local" id="meeting-time"
                        class="form-control" tabindex="1">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="" class="form-label">Hora Inicio</label>
                    <input id="nombres" name="hora_inicio" type="time" class="form-control" tabindex="2">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="" class="form-label">Hora Final</label>
                    <input id="apellidos" name="hora_final" type="time" class="form-control" tabindex="1">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                <div class="mb-3">
                    <label for="" class="form-label">Total Horas</label>
                    <input id="celular" name="total" type="number" class="form-control" tabindex="2">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="" class="form-label">Nota</label>
                    <input id="celular" name="nota" type="text" class="form-control" tabindex="2">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="" class="form-label">Total</label>
                    <input id="celular" name="total" type="number" class="form-control" tabindex="2">
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label">Salas</label>
                    <select name="sala_id" id="" class="form-control">
                        @foreach ($salas as $sala)
                            <option value="{{ $sala->id }}">{{ $sala->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label">Clientes</label>
                    <select name="cliente_id" id="" class="form-control">
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nombres }} - {{ $cliente->apellidos }} </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <a href="/cliente/index" class="btn btn-secondary" tabindex="4">Cancelar</a>
        <button type="submit" class="btn btn-success" tabindex="5">Guardar</button>
    </form>
@stop

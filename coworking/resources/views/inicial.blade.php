@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">{{ \Request::route()->getName() }}</li>
        </ol>
    </nav>
@stop

@section('content')
    <h1>::..Bienvenidos a Coworking</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-deck">
                <div class="card">
                    <img src="https://www.masterlogistica.es/wp-content/uploads/2020/11/metodos-para-seleccionar-candidatos.jpg"
                        width="531" height="332" class="card-img-top" alt="Imagen Cliente" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Agrege sus clientes</h5>
                    </div>
                    <div class="card-footer">
                        <a href="/cliente/create" class="btn btn-primary">Nuevo Cliente</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.wallsauce.com/uploads/wallsauce-com/images/thumbs/672/9320e2ce5dbca0b4149091a8e69f10bb4a6dd13e_800__R_N_90.jpg"
                        width="531" height="332" class="card-img-top" alt="Imagen Cliente" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Agrege sus salas</h5>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Nuevo Sala</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.oirealtor.com/noticias-inmobiliarias/wp-content/uploads/2021/05/coworking-vyd.jpeg"
                        class="card-img-top" width="531" height="332" alt="Imagen Cliente" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title">Agende sus salas</h5>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Nuevo Agenda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop

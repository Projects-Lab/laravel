@extends('adminlte::page')

@section('title', 'Salas')

@section('content_header')
    <h1>Salas</h1>
@stop

@section('content')
    <a href="create" class="btn btn-primary mb-3">Nueva Sala</a>
    <hr>
    <h4>Listado de salas</h4>
    <table id="salas" class="table table-striped table-bordered shadow-lg mt-4">
        <thead class="bg-secondary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salas as $salas)
                <tr>
                    <th>{{ $salas->id }}</th>
                    <td>{{ $salas->codigo }}</td>
                    <td>{{ $salas->nombre }}</td>
                    <td>{{ $salas->estado }}</td>
                    <td>
                        <a href="/sala/{{$salas->id}}/edit"  class="btn btn-info">Editar</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$salas->id}}">
                            Eliminar
                        </button>
                        </td>
                </tr>
                @include('/admin.salas.delete')
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
<link rel="stylesheet" 
href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"
 class="href">
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#salas').DataTable({
            "lengthMenu": [
                [4, 8, 40, -1],
                [4, 8, 40, "All"]
            ]
        });

    });
</script>
<script>
    $.extend(true, $.fn.dataTable.defaults, {
        "language": {
            "decimal": ",",
            "thousands": ".",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoPostFix": "",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "loadingRecords": "Cargando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "processing": "Procesando...",
            "search": "Buscar:",
            "searchPlaceholder": "Término de búsqueda",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "aria": {
                "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
            },
        }
    });
</script>
@stop

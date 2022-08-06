@extends('adminlte::page')

@section('title', 'Asignaciones')

@section('content_header')
    <h1>Asignaciones</h1>
@stop

@section('content')
    <a href="create" class="btn btn-primary mb-3">Nueva Asignación</a>
    <hr>
    <h4>Listado de Asignaciones</h4>
    <table id="asignaciones" class="table table-striped table-bordered shadow-lg mt-4">
        <thead class="bg-secondary">
            <tr>
                <th scope="col">Fecha Asignación</th>
                <th scope="col">Hora Inicio</th>
                <th scope="col">Hora Final</th>
                <th scope="col">Total Horas</th>
                <th scope="col">Notas</th>
                <th scope="col">Total</th>
                <th scope="col">Cliente</th>
                <th scope="col">Sala</th>
                <th scope="col">Asignado por</th>
                {{-- <th scope="col">Acciones</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
                <tr>
                    <td>{{ $dato->fecha_asignacion }}</td>
                    <td>{{ $dato->hora_inicio }}</td>
                    <td>{{ $dato->hora_final }}</td>
                    <td>{{ $dato->total_horas }}</td>
                    <td>{{ $dato->nota }}</td>
                    <td>{{ $dato->total }}</td>
                    <td>{{ $dato->cliente->nombres }}</td>
                    <td>{{ $dato->sala->nombre }}</td>
                    <td>{{ $dato->usuario->name }}</td>
                    {{-- <td>
                        <a href="/asignacion/{{ $dato->id }}/edit" class="btn btn-info">Editar</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modal-delete-{{ $dato->id }}">
                            Eliminar
                        </button>
                    </td> --}}
                </tr>
                {{-- @include('/admin.asignaciones.delete') --}}
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" class="href">
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
            $('#asignaciones').DataTable({
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
                    "last": "ÚlStimo",
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

@extends('adminlte::page')

@section('title', 'Bienes')

@section('content_header')
    <h1>Bienes</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table id="bienes-table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Número serie</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('js')
    <script>
       
       $(function () {
            $('#bienes-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('bienes.index') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'nombre', name: 'nombre', className:'mx-auto' },
                    { data: 'descripcion', name: 'descripcion' },
                    { data: 'numero_serie', name: 'numero_serie' },
                    { data: 'modelo', name: 'modelo' },
                    { data: 'marca', name: 'marca' },
                    { data: 'estado', name: 'estado' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, className:'d-flex justify-content-center' },
                ],
                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
        });
    </script>
@stop
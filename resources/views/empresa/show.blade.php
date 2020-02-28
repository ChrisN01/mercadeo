@extends('layouts.app')
@yield('css')
<link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css"/>

@section('title', 'Mostrar|Clientes')

<style>
    html, body {
           /* background-color: #fff;*/
           background-image: url("/images/registrar_mercado.png");
           background-size: 100% 100%;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <table id="clientes_listado" class="table table-bordered table-striped" class="display">
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>CI</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->id }}</td>
                                    <td>{{ $cliente->nombre }}</td>
                                    <td>{{ $cliente->apellido }}</td>
                                    <td>{{ $cliente->cedula }}</td>
                                    <td>{{ $cliente->direccion }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>{{ $cliente->email }}</td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection
@yield('scripts')
      <script src="/DataTables/jquery-3.3.1.js"></script>
      <script src="/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
      <script src="/DataTables/DataTables-1.10.18/js/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#clientes_listado').DataTable({
                      language: {
                        "decimal": "",
                        "emptyTable": "No hay información",
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                        "infoPostFix": "",
                        "thousands": ",",
                        "lengthMenu": "Mostrar _MENU_ Entradas",
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "search": "Buscar:",
                        "zeroRecords": "Sin resultados encontrados",
                        "paginate": {
                            "first": "Primero",
                            "last": "Ultimo",
                            "next": "Siguiente",
                            "previous": "Anterior"
                }
            },
            });
        } );
        </script>
@extends('admin.template.app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <a href="{{route('admin.vehiculo.registrar')}}" class="waves-effect waves-light btn positive-primary-color"><i class="material-icons right">add_box</i>Registrar Vehiculo</a>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <table class="table-general-elements row-border" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Placa</th>
                        <th>Año</th>
                        <th>Color</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Cliente</th>
                        <th>Acciones</th>
                    </tr>

                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var datos = [];
                @foreach($vehiculos as $vehiculo)
            var fila = [];
            fila[0] = '{{$vehiculo->placa}}';
            fila[1] = '{{$vehiculo->anio}}';
            fila[2] = '{{$vehiculo->color}}';
            fila[3] = '{{$vehiculo->marca}}';
            fila[4] = '{{$vehiculo->modelo}}';
            fila[5] = '{{$vehiculo->cliente->nombre}}';
            fila[6] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('admin.vehiculo.show', [$vehiculo->id])}}" + ' " class="white-text" >Detalle</a></span>' +
                '<span class="new badge neutral-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('admin.vehiculo.editar', [$vehiculo->id])}}"+ ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge negative-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('admin.vehiculo.eliminar', [$vehiculo->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endsection

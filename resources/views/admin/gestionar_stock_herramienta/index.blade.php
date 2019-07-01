@extends('admin.template.app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <a href="{{route('admin.stock_herramienta.registrar')}}" class="waves-effect waves-light btn positive-primary-color"><i class="material-icons right">add_box</i>Registrar Stock de Herramienta</a>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <table class="table-general-elements row-border" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th>Marca</th>
                        <th>Almacen</th>
                        <th>Cantidad</th>
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
             @foreach($stock_herramientas as $stock_herramienta)
            var fila = [];
           
            fila[0] = '{{$stock_herramienta->id}}';
            fila[1] = '{{$stock_herramienta->Herramienta->Descripcion}}';
            fila[2] = '{{$stock_herramienta->Herramienta->Marca}}'
            fila[3] = '{{$stock_herramienta->Almacen->id}}';;
            fila[4] = '{{$stock_herramienta->Cantidad}}';
            fila[5] = '<div>' +
                '<span class="new badge positive-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "#" + ' " class="white-text" >Detalle</a></span>' +
                '<span class="new badge neutral-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('admin.stock_herramienta.editar', [$stock_herramienta->id])}}" + ' " class="white-text" >Editar</a></span>' +
                '<span class="new badge negative-primary-color" data-badge-caption="" style="margin-right:5px"><a href=" ' + "{{route('admin.stock_herramienta.eliminar', [$stock_herramienta->id])}}" + ' " class="white-text" >Eliminar</a></span>' +
                '</div>';
            datos.push(fila);
            @endforeach
            addDatosGeneral(datos);
        });

    </script>
@endsection

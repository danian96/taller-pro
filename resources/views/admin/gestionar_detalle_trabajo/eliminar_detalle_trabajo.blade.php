@extends('admin.template.app')
@section('contenido')
    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3">

            <form action="{{route('admin.detalle_trabajo.delete',[$detalle->id])}}" method="post">
                @csrf
                @method('delete')
                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title center-align">Eliminar Detalle de Trabajo </span>

                        <div class="row">
                            <div class="col s12 input-field">
                                <input  id="eliminar" name="eliminar" type="text" class="validate">
                                <label for="eliminar">Eliminar :</label>
                                {!! $errors->first('eliminar','<span class="help-block red-text">:message</span>') !!}
                            </div>

                            <div class="row">
                                <div class="col s12 right-align">
                                    <button class="btn positive-primary-color" type="submit">aceptar</button>
                                    <a href="{{route('admin.detalle_trabajo.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection

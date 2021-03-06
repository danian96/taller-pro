@extends('admin.template.app')
@section('contenido')
    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3">

            <form action="{{route('admin.servicio.guardar')}}" method="POST">
                @csrf
                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title center-align">Registrar Servicio</span>
                            <div class="col s12 input-field">
                                <input  id="Tipo_de_Servicio" name="Tipo_de_Servicio" type="text" class="validate">
                                <label for="Tipo_de_Servicio">Tipo de servicio:</label>
                                {!! $errors->first('Tipo_de_Servicio','<span class="help-block red-text">Esta información es obligatoria.') !!}
                            </div>
                                    <label >Estado del servicio:</label>
                                    <select id="Estado" class="browser-default" name="Estado" class="col s12 input-field">
                                        <option value="" disabled selected>selecione</option>
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                        {!! $errors->first('Estado','<span class="help-block red-text">Esta información es obligatoria.') !!}
                                    </select>

                        <div class="row">
                            <div class="col s12 right-align">
                                <a href="{{route('admin.servicio.index')}}" class="btn negative-primary-color" type="submit">cancelar</a>
                                <button class="btn positive-primary-color" type="submit">registrar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection

@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar La personas</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{{Form::open(array('action'=>array('personaController@update',$personas->id),'method'=>'patch'))}}
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="documento">Numero documento del Persona</label>
            <input type="number" name="documento" id="documento" class="form-control" value="{{$personas->documentoidentidad}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group"><br>
            <label for="pnombre">Primer Nombre</label>
            <input type="text" name="pnombre" id="pnombre" class="form-control" value="{{$personas->primer_nombre}}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <div class="form-group"><br>
            <label for="snombre">Segundo Nombre</label>
                <input type="text"name="snombre"id="snombre"class="form-control"value="{{$personas->segundo_nombre}}">
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group"><br>
        <label for="papellido">Primer Apellido</label>
            <input type="text"name="papellido"id="papellido"class="form-control"value="{{$personas->primer_apellido}}">
                </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group"> <br>
                        <label for="sapellido">Segundo Apellido</label>
                            <input type="text"name="sapellido"id="sapellido"class="form-control"value="{{$personas->segundo_apellido}}">
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group"><br>
                                        <label for="email">Telefono</label>
                                            <input type="text"name="telefono"id="telefono"class="form-control"value="{{$personas->telefono}}">
                                                </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group"><br>
                                                        <button class="btn btn-primary"type="submit">
                                                            <span class="glyphicon glyphicon-refresh"></span>Actualizar </button>
                                                                <a class="btn btn-info"type="reset" href="{{url('persona')}}">
                                                                    <span class="glyphicon glyphicon-home"></span>Regresar </a></div>
                                                                        </div>
                                                                        </div>
                                                                        {!!Form::close()!!}

                                                                        @endsection

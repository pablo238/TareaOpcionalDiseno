@extends('layouts.app')

@section('content')
    <center>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Inicio</h2>
                </div>

            </div>
        </div>
        <br>
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('registrarVehiculo') }}">registrar vehículos</a>
        </div>
        <br>
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('listadoVehiculos') }}"> listar vehículos</a>
        </div>
        <br>
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('estadisticasVehiculo') }}">estadísticas vehículos</a>
        </div>

    </div>
    </center>
@endsection

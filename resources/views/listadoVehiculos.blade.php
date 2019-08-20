@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Placa</th>
                        <th scope="col">Marca</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if(sizeof($vehiculos)>0)
                        @foreach ($vehiculos as $vehiculo)
                            @if(($vehiculo -> marca) == 'Mazda')
                                <tr>
                                    <td>{{ $vehiculo->placa }}<font color="green"> Los de Mazda
                                            son los mejores</font></td>
                                    <td>{{ $vehiculo->marca }}</td>
                                </tr>
                            @elseif(($vehiculo -> marca) == 'Toyota')
                                <tr>
                                    <td><b><font color="red">{{ $vehiculo->placa }}</font></b> </td>
                                    <td>{{ $vehiculo->marca }}</td>
                                </tr>
                            @else
                                <tr>
                                    <td>{{ $vehiculo->placa }}</td>
                                    <td>{{ $vehiculo->marca }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">
                                <div class="alert alert-warning" role="alert">
                                    No existen vehiculos en el sistema
                                </div>
                            </td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('inicio') }}"> Inicio</a>
                </div>
            </div>
        </div>
    </div>
@endsection
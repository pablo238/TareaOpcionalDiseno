@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Marca</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if(sizeof($marcas)>0)
                        @php
                            $cantidad=0;
                        @endphp

                        @foreach ($marcas as $marca)
                                <tr>
                                    <td>{{ $marca->nombre }}</td>
                                    @foreach ($vehiculos as $vehiculo)
                                        @if($vehiculo->marca==$marca->nombre)
                                            @php
                                                $cantidad++;
                                            @endphp
                                        @endif
                                    @endforeach
                                    <td>{{ $cantidad }}</td>
                                </tr>

                                @php
                                    $cantidad=0;
                                @endphp
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">
                                <div class="alert alert-warning" role="alert">
                                    No existen marcas en el sistema
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

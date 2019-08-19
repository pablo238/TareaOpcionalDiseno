@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Parece haber un problema con los datos ingresados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Registrar Vehiculo y Dueño</h2>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Registrar vehiculo') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('guardarRegistro') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="placa"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Placa') }}</label>

                                    <div class="col-md-6">
                                        <input id="placa" type="text"
                                               class="form-control" name="placa" value="{{ old('placa') }}"
                                               autocomplete="placa" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="marca"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>

                                    <div class="col-md-6">
                                        <select id="marca" class="form-control @error('marca') is-invalid @enderror"
                                                name="marca">
                                            @foreach ($marcas->all() as $marca)
                                                <option>{{ $marca->nombre }}</option>
                                            @endforeach

                                        </select>

                                        @error('marca')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nombre"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                    <div class="col-md-6">
                                        <input id="nombre" type="text"
                                               class="form-control @error('nombre') is-invalid @enderror"
                                               name="nombre" autocomplete="nombre">

                                        @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cedula"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>

                                    <div class="col-md-6">
                                        <input id="cedula" type="number"
                                               class="form-control @error('cedula') is-invalid @enderror" name="cedula"
                                               autocomplete="cedula">

                                        @error('cedula')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrar') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('registrarVehiculo') }}"> Atras</a>
        </div>
    </div>
@endsection

<?php

namespace App\Http\Controllers;

use App\Vehiculo;
use Illuminate\Http\Request;

class ListadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $vehiculos = Vehiculo::all();
        return view('listadoVehiculos', compact('vehiculos'));
    }
}

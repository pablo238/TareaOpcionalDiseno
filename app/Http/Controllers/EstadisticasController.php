<?php

namespace App\Http\Controllers;

use App\Marca;
use App\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadisticasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $marcas = Marca::all();
        $vehiculos=Vehiculo::all();
        return view('estadisticasVehiculo', compact('marcas','vehiculos'));
    }

}

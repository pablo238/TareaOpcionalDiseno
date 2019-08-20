<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $marcas = Marca::all();
        return view('registrarVehiculo', compact('marcas'));
    }

    public function store(Request $request)
    {
        $message=([
            'marca.exists' => $request['marca'].' no es una marca valida',
        ]);
        $request->validate([
            'marca' => 'exists:marca,nombre',
        ],$message);

        DB::table('dueno')->insert(array(
            'cedula' => $request['cedula'],
            'nombre' => $request['nombre'],
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('vehiculo')->insert(array(
            'placa' => $request['placa'],
            'dueno' => $request['cedula'],
            'marca' => $request['marca'],
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        return redirect() -> route('registrarVehiculo')
            -> with('success','Registro exitoso');
    }
}
<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    public function view()
    {
        $marcas = Marca::all();
        return view('registrarVehiculo', compact('marcas'));
    }

    public function store(Request $request)
    {
        $message=([
            'marca.exists' => 'Este marca no existe',
        ]);
        $request->validate([
            'marca' => 'required|string',
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
            -> with('success','Vehiculo registrado exitosamente');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
 public function store(Request $request)
{
    $data = $request->validate([
        'nombre' => 'required|string',
        'ciudad' => 'nullable|string',
        'edad' => 'nullable|string',
        'telefono' => 'required|string',
        'email' => 'nullable|string',
        'especialidad' => 'nullable|string',
        'mensaje' => 'nullable|string',
        'consulta' => 'nullable|string',
    ]);

    $consulta = \App\Models\Consulta::create($data);

    return response()->json(['message' => 'Consulta registrada correctamente', 'data' => $consulta], 201);
}

}



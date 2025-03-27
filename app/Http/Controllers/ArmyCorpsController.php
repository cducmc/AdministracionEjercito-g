<?php

namespace App\Http\Controllers;

use App\Models\ArmyCorps;
use Illuminate\Http\Request;

class ArmyCorpsController extends Controller
{
    public function create()
    {
        return view('army_corps.create');
    }

    public function store(Request $request)
    {
        // Validar la entrada
        $request->validate([
            
            'denomination' => 'required|string|max:255',
        ]);

        // Crear el nuevo Cuerpo de Ejército
        ArmyCorps::create([
            'denomination' => $request->denomination,
        ]);

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->route('army_corps.create')->with('success', 'Cuerpo de Ejército creado exitosamente');
    }
}
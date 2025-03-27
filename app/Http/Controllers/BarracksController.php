<?php

namespace App\Http\Controllers;

use App\Models\Barracks;
use Illuminate\Http\Request;

class BarracksController extends Controller
{
    public function create()
    {
        return view('Barracks');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:30',
            'location' => 'required|string|max:10',
        ]);

        Barracks::create([
            'name' => $request->name,
            'location' => $request->location,
        ]);

        return redirect()->route('cuartel.create')->with('success', 'Cuartel creado exitosamente');
    }
}

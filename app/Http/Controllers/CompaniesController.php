<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function create()
    {
        return view('companies');
    }

    public function store(Request $request)
    {
        $request->validate([
            'primary_activity' => 'required|string|max:20',
        ]);

        Companie::create([

            'primary_activity' => $request->primary_activity,
        ]);

        return redirect()->route('compania.create')->with('success', 'Compañía creada exitosamente');
    }
}

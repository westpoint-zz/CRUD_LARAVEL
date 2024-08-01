<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::all();
        return view('materia.index', compact('materias'));
    }

    public function create()
    {
        return view('materia.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'creditos' => 'required|integer',
            'tipo' => 'required|in:Basica,Formacion,Titulacion',
            'valor_hora' => 'required|numeric',
            'estado' => 'required|in:activo,inactivo',
        ]);

        Materia::create($request->all());

        return redirect()->route('materia.index');
    }

    public function show(Materia $materia)
    {
        return view('materia.show', compact('materia'));
    }

    public function edit(Materia $materia)
    {
        return view('materia.edit', compact('materia'));
    }
    public function update(Request $request, Materia $materia)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'creditos' => 'required|integer',
        'tipo' => 'required|in:Basica,Formacion,Titulacion',
        'valor_hora' => 'required|numeric',
        'estado' => 'required|in:activo,inactivo',
    ]);

    $materia->update($request->all());
    return redirect()->route('materia.index')
                     ->with('success', 'Materia actualizada con éxito.');
}


    public function destroy(Materia $materia)
    {
        $materia->delete();

        return redirect()->route('materia.index');
    }
}
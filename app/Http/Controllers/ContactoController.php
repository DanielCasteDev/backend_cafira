<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return response()->json(Contacto::orderBy('nombre')->paginate(10));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'telefono' => 'required|numeric|digits_between:8,15|unique:contactos,telefono',
            'fecha_nacimiento' => 'required|date|before_or_equal:today'
        ]);

        $contacto = Contacto::create($validated);
        return response()->json($contacto, 201);
    }

    public function update(Request $request, Contacto $contacto)
    {
        $validated = $request->validate([
            'nombre' => 'sometimes|string|max:100',
            'telefono' => 'sometimes|numeric|digits_between:8,15|unique:contactos,telefono,'.$contacto->id,
            'fecha_nacimiento' => 'sometimes|date|before_or_equal:today'
        ]);

        $contacto->update($validated);
        return response()->json($contacto);
    }

    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        return response()->json(null, 204);
    }
}
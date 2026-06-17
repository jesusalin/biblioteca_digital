<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
            $request->validate(
    [
        'nombre' => 'required',
        'email' => 'required|email|unique:usuarios',
        'telefono' => 'required'
    ],
    [
        'nombre.required' => 'El nombre es obligatorio.',
        'email.required' => 'El correo es obligatorio.',
        'email.email' => 'Debe ingresar un correo válido.',
        'email.unique' => 'Este correo ya está registrado.',
        'telefono.required' => 'El teléfono es obligatorio.'
    ]);

        Usuario::create($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario registrado correctamente');
    }
        public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required'
        ]);

        $usuario->update($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario eliminado correctamente');
    }
}

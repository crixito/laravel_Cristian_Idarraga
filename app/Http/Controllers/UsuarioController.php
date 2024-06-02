<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Usuario::all();
        return view('usuarios.index', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->input('nombreusuario');
        $usuario->email = $request->input('email');
        $usuario->contrasenia = $request->input('contrasenia');
        // $usuario->rol = $request->input('rol');

        $usuario->save();

        // Agrega un mensaje flash a la sesión
        session()->flash('message', 'Usuario guardado con éxito');

        // Redirige al usuario a la página que desees
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();

        // Agrega un mensaje flash a la sesión
        session()->flash('message', 'Usuario actualizado con éxito');

        // Redirige al usuario a la página que desees
        return redirect()->route('usuarios.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        // Agrega un mensaje flash a la sesión
        session()->flash('message', 'Usuario eliminado con éxito');

        // Redirige al usuario a la página que desees
        return redirect()->route('usuarios.index');
    }
}

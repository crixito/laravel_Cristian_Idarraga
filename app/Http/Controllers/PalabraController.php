<?php

namespace App\Http\Controllers;

use App\Models\Palabra;
use Illuminate\Http\Request;

class PalabraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $palabra = Palabra::all();
        return view('palabras.index', compact('palabra'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('palabras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $palabra = new Palabra();
        $palabra->nombre = $request->input('nombrecurso');
        $palabra->descripcion = $request->input('descripcion');

        if($request->hasFile('imagen')){
            $palabra->imagen = $request->file('imagen')->storePublicly('palabras', 'public');
            // $course->imagen = $request->file('imagen')->store('public/palabras'); // otra manera
        }

        $palabra->save();

        // Agrega un mensaje flash a la sesión
        session()->flash('message', 'Palabra guardada con éxito');

        // Redirige al usuario a la página que desees
        return redirect()->route('palabras.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $palabra = Palabra::find($id);
        return view('palabras.show', compact('palabra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $palabra = Palabra::find($id);
        return view('palabras.edit', compact('palabra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $palabra = Palabra::find($id);
        $palabra->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $palabra->imagen = $request->file('imagen')->store('public/palabras');
            $palabra->save();
        }else{
            $palabra->save();
        }

        // Agrega un mensaje flash a la sesión
        session()->flash('message', 'Palabra actualizada con éxito');

        // Redirige al usuario a la página que desees
        return redirect()->route('palabras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $palabra = Palabra::find($id);
        $palabra->delete();

        // Agrega un mensaje flash a la sesión
        session()->flash('message', 'Palabra eliminada con éxito');

        // Redirige al usuario a la página que desees
        return redirect()->route('palabras.index');
    }
}

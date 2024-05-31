<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $curso = Curso::all();
        return view('cursos.index', compact('curso'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nombre = $request->input('nombrecurso');
        $curso->descripcion = $request->input('descripcion');

        if($request->hasFile('imagen')){
            $curso->imagen = $request->file('imagen')->storePublicly('cursos', 'public');
            // $course->imagen = $request->file('imagen')->store('public/cursos'); // otra manera
        }

        $curso->save();

        // Agrega un mensaje flash a la sesión
        session()->flash('message', 'Palabra guardada con éxito');

        // Redirige al usuario a la página que desees
        return redirect()->route('cursos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $curso = Curso::find($id);
        return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $curso = Curso::find($id);
        $curso->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $curso->imagen = $request->file('imagen')->store('public/cursos');
            $curso->save();
        }else{
            $curso->save();
        }

        // Agrega un mensaje flash a la sesión
        session()->flash('message', 'Palabra actualizada con éxito');

        // Redirige al usuario a la página que desees
        return redirect()->route('cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Curso::find($id);
        $curso->delete();

        // Agrega un mensaje flash a la sesión
        session()->flash('message', 'Palabra eliminada con éxito');

        // Redirige al usuario a la página que desees
        return redirect()->route('cursos.index');
    }
}

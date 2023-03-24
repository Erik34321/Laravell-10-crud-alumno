<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $alumnos = Alumno::latest()->paginate(5);

        return view('alumnos.index',compact('alumnos'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Nombre' => 'required',
            'Primer_apellido' => 'required',
            'Segundo_apellido' => 'required',
            'Fecha_nacimiento' => 'required',
            'sexo' => 'required',
            'entidad_nacimiento' => 'required',
            'tutor' => 'required',
        ]);

        $input = $request->all();

        $sexo = $input['sexo'];
        $input['sexo'] = implode(',', $sexo);

        $entidad_nacimiento = $input['entidad_nacimiento'];
        $input['entidad_nacimiento'] = implode(',', $entidad_nacimiento);

        $tutor = $input['tutor'];
        $input['tutor'] = implode(',', $tutor);

        Alumno::create($input);

        // Alumno::create($request->all());

        return redirect()->route('alumnos.index')
                        ->with('success','Alumno created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno): View
    {
        return view('alumnos.show',compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno): View
    {
        return view('alumnos.edit',compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno): RedirectResponse
    {
        $request->validate([
            'Nombre' => 'required',
            'Primer_apellido' => 'required',
            'Segundo_apellido' => 'required',
            'Fecha_nacimiento' => 'required',
            'sexo' => 'required',
            'entidad_nacimiento' => 'required',
            'tutor' => 'required',
        ]);

        $input = $request->all();

        $sexo = $input['sexo'];
        $input['sexo'] = implode(',', $sexo);

        $entidad_nacimiento = $input['entidad_nacimiento'];
        $input['entidad_nacimiento'] = implode(',', $entidad_nacimiento);

        $tutor = $input['tutor'];
        $input['tutor'] = implode(',', $tutor);

        $alumno->update($input);

        return redirect()->route('alumnos.index')
                        ->with('success','Alumno actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno): RedirectResponse
    {
        $alumno->delete();

        return redirect()->route('alumnos.index')
                        ->with('success','Alumno eliminado satisfactoriamente');
    }
}

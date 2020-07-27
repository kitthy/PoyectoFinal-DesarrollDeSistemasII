<?php

namespace App\Http\Controllers;

use App\Project;
use App\Estudiante;
use Illuminate\Http\Request;
use App\Http\Requests\SaveEstudianteRequest;

class EstudianteController extends Controller
{
   
    public function index()
    {
       //$estud = Estudiante::get();
            
       return view('estud.index', [
      
        'estudiantes' => Estudiante::latest()->paginate()
        ]);
    }
    public function show($id)
    {
        return view('estud.show', [
            'estudiante' => Estudiante::findOrFail($id)
        ]);
    }
    public function create()
    {
        return view('estud.create',[
            'estudiante' => new Estudiante,
            'talleres'=> Project::get()
        ]);
    }

   
    public function store(SaveEstudianteRequest $request)
    {
        Estudiante::create($request->validated() );

        return redirect()->route('estud.index')->with('status', '¡El estudiante fue inscrito exitosamente!!');
    }

    
    public function edit($id)
    {
        return view('estud.edit', [
            'estudiante' => Estudiante::findOrFail($id),
            'talleres'=> Project::get()
        ]);
    }

    public function update(Estudiante $estudiante, SaveEstudianteRequest $request)
    {
        $estudiante->update($request->validated());

        return redirect()->route('estud.show', $estudiante)->with('status', '¡El Estudiante fue actualizado exitosamente!');  
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estud.index')->with('status', '¡El Estudiante fue eliminado exitosamente!');
    }
}

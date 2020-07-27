<?php

namespace App\Http\Controllers;
use App\Project;
use App\Docente;
use Illuminate\Http\Request;
use App\Http\Requests\SaveDocenteRequest;

class DocenteController extends Controller
{
   
    public function index()
    {
        return view('Docentes.index', [
      
            'docentes' => Docente::latest()->paginate()
            ]);
    }

    public function show($id)
    {
        return view('Docentes.show', [
            'docente' => Docente::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('Docentes.create',[
            'docente' => new Docente,
            'talleres'=> Project::get()//estamos diciendo que la variable recupere los datos de talleres
            //y lo enviamos al formuario
        ]);
    }

    
    public function store(SaveDocenteRequest $request)
    {
        Docente::create($request->validated() );

        return redirect()->route('Docentes.index')->with('status', '¡El docente fue contratado exitosamente!!');
    }

   
    
    public function edit($id)
    {
        return view('Docentes.edit', [
            'docente' => Docente::findOrFail($id),
            'talleres'=> Project::get()
        ]);
    }

   
    public function update(Docente $docente, SaveDocenteRequest $request)
    {
        $docente->update($request->validated());

        return redirect()->route('Docentes.show', $docente)->with('status', '¡El Docente fue actualizado exitosamente!');  
    }

    public function destroy(Docente $docente)
    {
        $docente->delete();

        return redirect()->route('Docentes.index')->with('status', '¡El Docente fue eliminado exitosamente!');
    }
}

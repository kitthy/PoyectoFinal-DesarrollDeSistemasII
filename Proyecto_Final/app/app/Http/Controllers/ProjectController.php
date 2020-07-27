<?php

namespace App\Http\Controllers;

//use DB;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construc()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    public function index(Request $request)
    {
     
        if($request){
            
           $title=$request->get('title');
           $description=$request->get('description');
           $projects=Project::title($title)->description($description)->paginate(4);
           // $datos=Project::where('id','LIKE','%'.$query.'%')
           //$dato=Project::where('description','LIKE','%'.$query.'%')
        return view('projects.index', ['projects'=>$projects,compact('projects')]);
        //, ['datos'=>$datos,'seatch'=>$query],['dato'=>$dato,'search'=>$query]
        }
    }
   
    public function show($id)
    {
     

        return view('projects.show', [
            'project' => Project::findOrFail($id) 
            //si ingresamos a un Url que no existe nos mostrara error o extraviado
        ]);
   
    }

    public function create()
    {
         return view('projects.create',[
             'project' => new Project
         ]);
    }
   
    public function store(SaveProjectRequest $request)
    {
        
       //Project :: create(request()->all());
    

        Project::create($request->validated() );

        return redirect()->route('projects.index')->with('status', '¡El taller fue creado exitosamente!');
    }
    public function edit($id)
    {
        return view('projects.edit', [
            'project' => Project::findOrFail($id) 
            //si ingresamos a un Url que no existe nos mostrara error o extraviado
        ]);
    }
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status', '¡El taller fue actualizado exitosamente!');
    }
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status', '¡El taller fue eliminado exitosamente!');
    }
}

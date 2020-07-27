@extends('layout')

@section('title', $docente->docentes)

@section('content')

       <center><h1>Informacion Docente</h1> 
<div class="container">
    <div class="bg-white p-5 shadow rounded">
    <h2>Docente: {{$docente->nombre}}
        {{$docente->apellido}}</h2>
        <p class="text-secondary"> Carnet:
            {{$docente->ci}}
        </p> 
         <p class="text-secondary"> Contacto:
            {{$docente->celular}}
        </p> 
        <p class="text-secondary"> Direccion:
            {{$docente->direccion}}
        </p> 
        <p class="text-secondary"> Taller:
            {{$docente->project_id}}
        </p>
        <div class="d-flex justify-content-between align-items-center"> 
                   <a class="btn btn-dark" href="{{ route('Docentes.index') }}">
                   Regresar
                   </a>
         @auth
                 <div class="btn-group btn-group-sm">
                    <a class="btn btn-primary" href="{{ route('Docentes.edit', $docente)}}"
                    >Editar</a>
                    <a class="btn btn-danger" href="#" 
                    onclick="document.getElementById('delete-docente').submit()">Eliminar</a>
                </div> 
                <form id="delete-docente" 
                    class="d-none"
                    method="POST" 
                    action="{{ route('Docentes.destroy', $docente)}}">
                        @csrf @method('DELETE')
                        
                </form>
                @endauth
                </div>
            </div>
        </div>
<br>
@endsection
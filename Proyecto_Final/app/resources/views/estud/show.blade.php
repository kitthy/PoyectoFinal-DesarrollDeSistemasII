@extends('layout')

@section('title', $estudiante->estudiantes)

@section('content')
<center><h1>Informacion Estudiante</h1>
<div class="container">
    <div class="bg-white p-5 shadow rounded">
    <h2>{{$estudiante->nombre}}
        {{$estudiante->apellido}}</h2>
        <p class="text-secondary"> Carnet:
            {{$estudiante->ci}}
        </p> 
        <p class="text-secondary"> Contacto:
            {{$estudiante->celular}}
        </p> 
        <p class="text-secondary"> Taller:
            {{$estudiante->project_id}}
        </p> 
        <div class="d-flex justify-content-between align-items-center"> 
                   <a class="btn btn-dark" href="{{ route('estud.index') }}">
                   Regresar
                   </a>
         @auth
                 <div class="btn-group btn-group-sm">
                    <a class="btn btn-primary" href="{{ route('estud.edit', $estudiante)}}"
                    >Editar</a>
                    <a class="btn btn-danger" href="#" 
                    onclick="document.getElementById('delete-estudiante').submit()">Eliminar</a>
                </div> 
                <form id="delete-estudiante" 
                    class="d-none"
                    method="POST" 
                    action="{{ route('estud.destroy', $estudiante)}}">
                        @csrf @method('DELETE')
                        
                </form>
                @endauth
                </div>
            </div>
        </div>
<br>
@endsection
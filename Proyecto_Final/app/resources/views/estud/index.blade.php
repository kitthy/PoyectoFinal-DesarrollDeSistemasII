@extends('layout')

@section('title','Estudiante')

@section('content')
<div class="container">
                <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="display-4 mb-0">Estudiantes Inscritos</h1>
                        @auth
                        <a class="btn btn-primary" 
                        href="{{ route('estud.create') }}"
                        > Inscribir Estudiante</a>
                        @endauth
                </div>
                        <p class="lead text-secondary">Estudiantes Activos</p>
                        @forelse ($estudiantes as $estudiante)
                                <li class="list-group-item border-0 mb-3 shadow-sm">
                                <a class="text-secondary d-flex justify-content-between align-items-center"
                                href="{{route('estud.show', $estudiante) }}"
                                >
                                <span class="font-weight-bold"> {{ $estudiante-> id}} </span>
                                <span class="font-weight-bold"> {{ $estudiante-> nombre}} </span>
                                <span class="font-weight-bold">{{ $estudiante-> apellido}}</span>
                                <span class="font-weight-bold">{{ $estudiante-> celular}}</span>
                               <span class="text-black-50 ">{{ $estudiante->created_at->format('d/m/y')}}</span>
                               </a>
                                </li>
                                @empty
                        
                                <li>no hay estudiantes</li>    
                        @endforelse
</div>

<br>    
@endsection
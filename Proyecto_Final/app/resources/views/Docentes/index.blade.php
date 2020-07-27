@extends('layout')

@section('title','Docente')

@section('content')
<div class="container">
                <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="display-4 mb-0">Docentes Contratados</h1>
                        @auth
                        <a class="btn btn-primary" 
                        href="{{ route('Docentes.create') }}"
                        > Contratar Docente</a>
                        @endauth
                </div>
                        <p class="lead text-secondary">Docentes Disponibles</p>
                        @forelse ($docentes as $docente)
                                <li class="list-group-item border-0 mb-3 shadow-sm">
                                <a class="text-secondary d-flex justify-content-between align-items-center"
                                href="{{route('Docentes.show', $docente) }}"
                                >
                                <span class="font-weight-bold"> {{ $docente-> id}} </span>
                                <span class="font-weight-bold"> {{ $docente-> nombre}} </span>
                                <span class="font-weight-bold">{{ $docente-> apellido}}</span>
                                <span class="font-weight-bold">{{ $docente-> celular}}</span>
                                <span class="text-black-50 ">{{ $docente->created_at->format('d/m/y')}}</span>
                                </a>
                                </li>
                                @empty
                        
                                <li>no hay estudiantes</li>    
                        @endforelse
</div>

<br>    
@endsection
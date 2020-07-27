@extends('layout')

@section('title','Crear Proyecto')

@section('content')
    <div class="container">
         <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                    <h1 class="display-4">Talleres!</h1>
                    <p class="lead text-secondary">Este curso estará disponible para los futuros Estudiantes</p>

                    @include('partials.validation-errors')
                    
                    <form class="bg-white py-3 px-4 shadow rounded"
                        method="POST" 
                        action="{{ route('projects.store')}}">
                        <h1 class="display-4">Crear Talleres</h1>
                        <hr>
                        @include('projects._form', ['btnText' => 'Guardar'])
                    </form>
            </div>
        </div>
    </div>
<br>
@endsection
{{--@include('projects._form', ['btnText' => 'Guardar'])--}}
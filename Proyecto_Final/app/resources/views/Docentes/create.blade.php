@extends('layout')

@section('title','Contratar Docente')

@section('content')
   <div class="container">
         <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                    <h1 class="display-6">Contratar Docente!</h1>

                    @include('partials.validation-errors')
                    
                    <form class="bg-white py-3 px-4 shadow rounded"
                        method="POST" 
                        action="{{ route('Docentes.store')}}">
                        <h1 class="display-4">Ingrese Datos</h1>
                        <hr>
                        @include('Docentes._form', ['btnText' => 'Guardar'])
                    </form>
            </div>
        </div>
    </div>
<br>
@endsection
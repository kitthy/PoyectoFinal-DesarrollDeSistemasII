@extends('layout')

@section('title','Editar Estudiante')

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">                  
                @include('partials.validation-errors')

                <form class="bg-white py-3 px-4 shadow rounded"
                 method="POST" 
                 action="{{ route('estud.update', $estudiante)}}">
                @csrf @method('PATCH')
                    <h1 class="display-6">
                    Informacion del estudiante</h1>
                    <hr> 
                @include('estud._form', ['btnText' => 'Editar'])
                </form>
        </div> 
    </div>
</div>
<br>
@endsection
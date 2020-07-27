@extends('layout')

@section('title','Crear Proyecto')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                    

                @include('partials.validation-errors')

                <form class="bg-white py-3 px-4 shadow rounded"
                 method="POST" 
                 action="{{ route('projects.update', $project)}}">
                @csrf @method('PATCH')
                    <h1 class="display-4">
                    Informacion del Taller</h1>
                    <hr> 
                @include('projects._form', ['btnText' => 'Editar'])
                </form>
        </div> 
    </div>
</div>
<br>
@endsection
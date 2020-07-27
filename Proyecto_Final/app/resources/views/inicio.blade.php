@extends('layout')

@section('title','Home')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            <h1 class="h1-responsive text-primary my-5"><center><strong>¿Porque seguir Modas?</strong></center></h1>
            <hr>
                <p class="lead text-secondary"><center>La moda de hoy esta basada en extravaganzas pero, ¿Porque seguimos esas
                modas? Se dice que debemos seguir a una persona para aumentar nuestra autoestima.</center></p>
                <p class="lead text-secondary"><center>Y si.... Nosotros forjamos eso? Alguna vez te pusiste a pensar en que pasaria si
                tu eres esa persona a quien siguen los demas?... </center></p>
                <p class="lead text-secondary"><center>Nuestro objetivo principal es formar personas con valores de autosuficiencia en estilo
                personal, edicacion (Etiqueta y protocolo), Fotografia, etc </center></p>
                <hr>  
                <br>
                <a class="btn btn-lg btn-block btn-primary" href={{ route('estud.index')}}>Inscribir Estudiante</a> 
               
            </div>    
        </div>
        <br> 
        <hr>
        <br>
</div>


@endsection
@extends('layout')

@section('title','Inicio')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            <h1 class="h1-responsive text-primary my-5"><center><strong>¿Quieres ser parte del STAFF?</strong></center></h1>
            <hr>
                <p class="lead text-secondary"><center>Solo necesitas inscribirte! Sin la necesidad de un Casting!
                Puedes aprender de cero, continuar con tus estudios, desde donde sepas!, ya sea a largo o 
                corto plazo, gana la experiencia que necesites en el tiempo que quieras.</center></p>
                <hr>  
                <br>
                <a class="btn btn-lg btn-block btn-primary" href={{ route('contactos')}}>Inscribete <strong>YA!</strong></a> 
                <a class="btn btn-lg btn-block btn-outline-primary" href={{ route('projects.index')}}>Talleres Disponibles</strong></a>          
            </div>    
        </div>
        <br> 
        <hr>
        <br>
        <div class="row">
            
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                            <img class="img-fluid mb-4" src="/img/homeMujeres.svg" alt="mujeres" width="244">
                            <a href="#!" class="pink-text">
                                    <font color="fuchsia" class="font-weight-bold mb-3" >
                                        <center><i class="fas fa-glass-cheers"></i>Solo para ellas</font></center>
                                </a>
                            <p class="lead text-secondary mb-2"><center>Descripcion.- Curso basico de modelaje, aprende a manejar los tacos altos 
                            que tanto te encantan, sin miedo a caer! Como maquillarte deacueredo a la esas ocaciones especiales.</center></p>
                            <a class="btn btn-lg btn-block btn-outline-primary" href={{ route('contactos')}}><strong>Saber MAS</strong></a>
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                            <img class="img-fluid mb-4" src="/img/homeHombre.svg" alt="hombres" width="250">
                            <a href="#!" class="red-text">
                                    <font color="red" class="font-weight-bold mb-3">
                                        <center><i class="fas fa-fire pr-2"></i>Solo para ellos</font></center>
                            </a>
                                <p class="lead text-secondary mb-2"><center>Descripcion.- Curso basico de modelaje, etiqueta y protocolo, 
                                fotografia, imagen personal, entrenamiento y nutricion personal, aumento de autoestima, etc.
                                </center></p>
                            <a class="btn btn-lg btn-block btn-outline-primary" href={{ route('contactos')}}><strong>Saber MAS</strong></a>
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                            <img class="img-fluid mb-4" src="/img/homeNiños.svg" alt="hombres">
                            <a href="#!" class="red-text">
                                    <font color="orange" class="font-weight-bold mb-3">
                                    <center><i class="fas fa-cookie-bite pr-2"></i>Taller de modas Infantil</font></center>
                            </a>
                                <p class="lead text-secondary mb-2" ><center>Descripcion.- Para las mas pequeños de la familia! 
                                Aprenderan didacticamente lo que es pasarela, baile, pintura, canto, moda, fotografia, etiqueta 
                                y protocolo,  etc.
                                </center></p>
                            <a class="btn btn-lg btn-block btn-outline-primary" href={{ route('contactos')}}><strong>Saber MAS</strong></a>
            </div> 
        </div>
</div>
<br>
<hr>
@endsection

                {{--@auth
                <i class="fas fa-chalkboard-teacher"></i> para nuevos docentes
                <i class="fas fa-user-plus"></i> para nuevos estudiantes
                    {{ auth()->user()->name }}
                @endauth--}}
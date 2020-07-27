@extends('layout')

@section('title','Revista')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
                        <h3 for="cbcategoria" class="h3-responsive text-primary">Categoria</h3>
                        <select id="cbcategoria" class="form-control align-self-center categorias" onchange="url(this.value)">
                                <option selected value="RevistaGeneral.html">Todas las fotos</option>    
                                <option value="#">Hombres</option>
                                <option value="#">Niños</option>
                                <option value="#">Mujeres</option>
                        </select>
        </div>
    </div>
    <hr>
    <div class="row">
        <script>
                $(document).ready(function(){
                $('.zoom').hover(function() {
                        $(this).addClass('transition');
                }, function() {
                        $(this).removeClass('transition');
                });
                });
        </script>
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                        <img class="zoom " src="img/Modelos/Revista/1.jpg" alt="Femenino" width="210">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                        <img class="zoom" src="img/Modelos/Revista/2.jpg" alt="Masculino" width="250">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Revista/3.jpg" alt="Femeninos" width="250"> 
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                       <img class="zoom" src="img/Modelos/Revista/4.jpg" alt="Masculino" width="185">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                       <img class="zoom" src="img/Modelos/Revista/5.jpg" alt="Femenino" width="180">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Revista/6.jpg" alt="Femenino" width="200"> 
            </div>
    </div>
    <hr>
     <div class="row">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                       <img class="zoom" src="img/Modelos/Revista/7.jpg" alt="Niños" width="200">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                       <img class="zoom" src="img/Modelos/Revista/8.jpg" alt="Niños" width="200">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Revista/9.jpg" alt="Niños" width="200"> 
            </div>
    </div>
</div>
<br>
<hr>

@endsection
@extends('layout')

@section('title','Contactos')


@section('content')
<br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white shadow rounded py-5 px-4" 
                    method="POST" 
                    action="{{ route('messages.store')}}">
                @csrf
                <h1 class="display-5">Formulario</h1>
                <hr> 
                <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control bg-light shadow-sm
                            @error ('name') is-invalid @else border-0 @enderror" 
                            id="name"
                            name='name' 
                            placeholder="Nombre..." 
                            value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert"></span>
                                    <div class="alert alert-danger">
                                    {{ $message}}
                                    </div>
                            @enderror
                            
            </div> 
                <div class="form-group">
                        <label for="name">Email</label>
                        <input class="form-control bg-light shadow-sm
                            @error ('email') is-invalid @else border-0 @enderror"
                            id="email"
                            type="email" 
                            name="email" 
                            placeholder="Example@hotmail.com" 
                            value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert"></span>
                                <div class="alert alert-danger">
                                   {{ $message}}
                                </div>
                            @enderror
                </div>
                <div class="form-group"> 
                        <label for="name">Tema</label>
                        <input class="form-control bg-light shadow-sm
                            @error ('subject') is-invalid @else border-0 @enderror"
                            id="subject"
                            name="subject" 
                            placeholder="Tema...." 
                            value="{{ old('subject') }}">
                            @error('subject')
                                <span class="invalid-feedback" role="alert"></span>
                                <div class="alert alert-danger">
                                   {{ $message}}
                                </div>
                            @enderror
                </div>  
                <div class="form-group">  
                        <label for="name">Contenido</label> 
                        <textarea class="form-control bg-light shadow-sm
                            @error ('content') is-invalid @else border-0 @enderror"
                            id="content"
                            name="content" 
                            placeholder="Escriba aqui el contenido de su asunto">
                            {{ old('content') }}</textarea>
                        @error('content')
                                <span class="invalid-feedback" role="alert"></span>
                                <div class="alert alert-danger">
                                   {{ $message}}
                                </div>
                        @enderror
                </div> 
                    <button class="btn btn-primary btn-lg btn-block">Enviar</button>        
          
                </form>
        </div>   
    </div>
</div>
<br>            
@endsection
 {{--@foreach ($datos as $datos1)
           <li>{{ $datos1['title'] }} <small>{{ $loop->first ? 'es el primero' : '' }}</small></li>
          {{-- <li>{{ $datos1['title'] }} <small>{{ $loop->last ? 'es el primero' : '' }}</small></li> 
          
@endforeach--}}
{{--{{ var_dump($errors->any()) }} 

@if ($errors->any())
   {{-- {{var_dump($errors->all())}} 

  {{-- @foreach ($errors->all() as $error)
       <p>{{ $error }}</p>
   @endforeach --}}

   {{--{{$errors->first('name')}}

@endif--}}
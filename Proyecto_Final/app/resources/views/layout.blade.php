<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
    <script src="/js/app.js" defer></script>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5eeedfa70ef96600120c1b6b&product=inline-share-buttons" async="async"></script>
    <link href="css/style.css" rel="stylesheet">
    <title>@yield('title','FreyjaModels')</title>
   <style>
        img.zoom {
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            -ms-transition: all .2s ease-in-out;
            }
        
            .transition {
                -webkit-transform: scale(1.8); 
                -moz-transform: scale(1.8);
                -o-transform: scale(1.8);
                transform: scale(1.8);
            }
   </style> 
</head>
    <body>
           
        <div id="app" class="d-flex flex-column h-screen justify-content-between">
            <header>
                @include('partials.nav')
                @include('partials.session-status')
            </header> 

            <nain class="py-4">
                @yield('content')

            </main>

            <footer class="bg-primary text-center text-black-50 text-black py-3 shadow">           
                        @include('partials.footer')
                        
            </footer>
        </div>
    </body>
</html>
   {{--class="bg-primary text-center text-black-50 text-black py-3 shadow"
   FreyjaModels | Copyright @ {{ date ('Y')}}
  {{-- <li class=" {{ setActive('home')}}"><a href="/">Home</a></li> // no me deja configurar en la terminal me salen errores, y 
       tampoco me deja ingresar a la carpeta--}}

  {{-- <li class="{{ setActive('home')}}"> <a href="<{{route('home')}}">@lang('home')</a></li>
     <li class="{{ setActive('servicio')}}"> <a href="<{{route('servicio')}}">@lang('servicio')</a></li>
     <li class="{{ setActive('ayuda')}}"> <a href="<{{route('projects.index')}}">@lang('ayuda')</a></li>
     <li class="{{ setActive('contactos')}}"> <a href="<{{route('contactos')}}">@lang('contactos')</a></li>
     </ul>--}}

{{--<li class=" {{ setActive('home')}}"><a href="/">Home</a></li>
<li class=" {{ setActive('servicio')}}"><a href="/servicio">Servicios</a></li>
<li class=" {{ setActive('ayuda')}}"><a href="/ayuda">Ayuda</a></li>
<li class=" {{ setActive('contactos')}}"><a href="/contactos">Contactos</a></li>--}}
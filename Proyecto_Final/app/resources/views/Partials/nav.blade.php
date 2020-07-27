<nav class="navbar navbar-light navbar-expand-md bg-while shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
               <img src="img/Logos/logo1.png" height="70" alt="mdb logo">      
        </a> 
            <button class="navbar-toggler" 
                type="button" 
                data-toggle="collapse"
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent"
                aria-expanded="false" 
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                 
                @guest
                <li class="nav-item ">
                    <a class="nav-link {{request()->routeIs('home') ? 'active' : ''}}" 
                        href="/"><i class="fas fa-home"></i>Inicio
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('projects.*') ? 'active' : ''}}" 
                        href="/ayuda"><i class="fas fa-link"></i>Talleres
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('servicio') ? 'active' : ''}}" 
                        href="/servicio"><i class="fas fa-boxes"></i>Revista
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('contactos') ? 'active' : ''}}" 
                        href="/contactos"><i class="fab fa-weixin"></i>Contactanos
                    </a></li>
                <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('login') ? 'active' : ''}}" 
                        href="{{ route('login') }}">Login
                </a></li>
                @else
                <li class="nav-item ">
                    <a class="nav-link {{request()->routeIs('inicio') ? 'active' : ''}}" 
                        href="/inicio"><i class="fas fa-home"></i>Inicio
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('projects.*') ? 'active' : ''}}" 
                        href="/ayuda"><i class="fas fa-link"></i>Talleres
                </a></li>
                 <li class="nav-item ">
                    <a class="nav-link {{request()->routeIs('estud.*') ? 'active' : ''}}" 
                        href="estudiantes"><i class="fas fa-user-plus"></i>Estudiantes
                    </a></li>
                    <li class="nav-item ">
                    <a class="nav-link {{request()->routeIs('Docente.*') ? 'active' : ''}}" 
                        href="docentes"><i class="fas fa-chalkboard-teacher"></i> Docentes
                    </a></li>
                <li class="nav-item">
                        <a class="nav-link" 
                            href="#" 
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                        >Cerrar sesiòn</a>
                </li> 

                @endguest
                </ul> 
        </div>
    </div>
</nav>
        <form id="logout-form" action="{{ route('logout') }}" 
        method="POST" style="display: none;">
            @csrf
        </form>
@extends('layout')

@section('title','Ayuda')

@section('content')
      <div class="container">                
                  {{--  <h6>
                    @if ($title && $description)
                      <div class="alert alert-primary" rol="alert">
                        Los resultados de la busqueda '{{$title}}' y '{{$description}}' son:
                      </div>
                    @endif
                    </h6> --}} 
                    
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4 mb-0">Talleres en curso</h1>
                  @auth
                    <a class="btn btn-primary" 
                      href="{{ route('projects.create') }}"
                    > Crear Talleres</a>
                  @endauth
                  
          </div>
          <form class="form-inline"  method="GET" 
                        action="{{ route('projects.index')}}">
                              <input name="title" id="title" rol="alert" class="form-control mr-sm-2" placeholder="Buscar Taller" aria-label="Search">
                              <input name="description" id="description" rol="alert" class="form-control mr-sm-2" placeholder="Buscar descripcion" aria-label="Search">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                      </form>
          <nav class="navbar navbar-light float-right">

                      
          </nav>
          <p class="lead text-secondary"> Ya puedes revisar los talleres que estan en curso,
            para poder inscribirte!</p>
           <table class="table" id="projects">
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Taller</th>
                  <th>Descripcion</th>
                  <th>ver</th>
                </tr>
              </thead>
              <tbody>
                  @forelse ($projects as $project)
                      <tr>
                        <td>{{ $project-> id}}</td>
                        <td>{{ $project-> title}}</td>
                        <td>{{ $project-> description}}</td>
                        <td><a class="text-secondary d-flex justify-content-between align-items-center"
                        href="{{route('projects.show', $project) }}"
                        ><button class="btn btn-outline-success my-2 my-sm-0">Ver</button></a></td> 
                      </tr>
                  @empty
                      <li class="list-group-item border-0 mb-3 shadow-sm"> 
                      No hay talleres disponibles
                      </li>
                  @endforelse
                  {{ $projects->links()}}
              </tbody>
           </table> 
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">  
              <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
              <script>
                    $(document).ready(function(){
                    $('#projects').DataTable();
                    });
             </script> 
        </div>  
       <br>    
@endsection

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title') - Laravel App</title>
    
    <!-- favicon -->
    <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body class="bg-secondary bg-opacity-25">
    <!-- header -->
    <nav class="d-flex bg-info bg-opacity-50">
        <div >
            <img src="https://img.icons8.com/cute-clipart/50/000000/favourite-file.png"/>
        </div>
        <div class="position-relative me-auto ">
            <h3 class="c text-dark ">Mis Favoritos</h3>
        </div>
           
        @if(auth()->check())
            <div class="btn-toolbar p-2 d-flex position-relative float-end">

                <p style="margin-right: 10px;"">Bienvenido <b>{{ auth()->user()->name }} {{ auth()->user()->last_name }}</b></p>

                <a href="{{ route('login.destroy') }}" class="btn btn-danger btn-sm mb-2 ml-2" tabindex="-4" role="button" aria-disabled="true" style="margin-right: 10px; responsive: true;">Cerrar Sesión</a>
           
            </div>

        @else
            <div class="btn-toolbar p-2 d-flex position-relative float-end">
            
                <a href="{{ route('login.index') }}" class="btn btn-success btn-sm mb-2 ml-2" tabindex="-4" role="button" aria-disabled="true" style="margin-right: 10px; responsive: true;">Inicio Sesión</a>

                <a href="{{ route('register.index') }}" class="btn btn-primary btn-sm mb-2 ml-2" tabindex="-4" role="button" aria-disabled="true" style="margin-right: 5px; responsive: true;">Registrate</a>
            
            </div>

        @endif    
    </nav>
    
    <!-- footer -->
    @yield('content')
    <!--script -->
    </body>
</html>
@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')

<div class="w-75 p-3 border border-secondary me-auto bg-light" style="margin-top: 40px; margin-left:5%; margin-right: 10%;">
    <h1 style="font-family:helvetica margin-top: 100px;" class="text-center">Inicio de Sesión!</h1>

    <form class="mt-4" method="POST" action="">
      @csrf
        
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email" id="floatingInput"  id="validationCustom03" required>
            <label for="floatingInput">Correo Electronico</label>
        </div>
        
        <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" id="floatingPassword" id="validationCustom03" required>
            <label for="floatingPassword">Contraseña</label>
        </div>
        

        <div class="col-sm-2 mx-auto" style="margin-top:60px;">
            <button style="margin-bottom: 50px;" class="btn btn-success btn-sm" type="submit">Iniciar Sesión</button>
        </div>
    </form>

</div>

@endsection

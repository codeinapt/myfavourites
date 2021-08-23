@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')

<div class="w-75 p-3 border border-secondary me-auto bg-light" style="margin-top: 40px; margin-left:5%; margin-right: 10%;">
    <h1 style="font-family:helvetica margin-top: 100px;" class="text-center">Agregar Favoritos</h1>

    <form class="form-ad" action="{{ url('/list') }}" method="post" >
      @csrf
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" name="name" id="floatingInput"  id="validationCustom03" required>
            <label for="floatingInput">Titulo de Favorito</label>
        </div>
        
        <div class="form-floating">
            <input type="text" class="form-control" id="theme" name="theme" id="floatingPassword" id="validationCustom03" required>
            <label for="floatingPassword">Descripcion de Favorito</label>
        
        </div>
        <div class="form-floating" style="margin-top:20px;">
            <input type="url" class="form-control" id="url" name="url" id="floatingPassword" id="validationCustom03" required>
            <label for="floatingPassword">URL de Favorito</label>
        </div>

        

        <div class="col-sm-2 mx-auto" style="margin-top:60px;">
            <button style="margin-bottom: 50px;" class="btn btn-success btn-sm" type="submit">Agregar</button>
        </div>
    </form>

</div>

@endsection

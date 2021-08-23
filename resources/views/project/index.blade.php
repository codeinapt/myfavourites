@extends('layouts.plantilla')

@section('title', 'index')

@if(auth()->check())
@section('content')
    <h1 style="font-family:helvetica", class="text-center pt-24 ">Bienvenido a tus de favoritos!</h1>
    <div class="col-sm-2 mx-auto" style="margin-top:60px;">
            <a href="{{ route('list.create') }}" class="btn btn-success btn-sm mb-2 ml-2" tabindex="-4" role="button" aria-disabled="true" style="margin-right: 10px; responsive: true;">Agregar Favorito</a>
    </div>
@else


@endif
@endsection
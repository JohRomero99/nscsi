@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Página no encontrada'))
@section('edit','Ocurrió un problema, por favor, intentalo nuevamente')
@section('image')
    <img src="{{ asset('imagenes/paginaNoEncontrada.png') }}" width="450" height="350" alt="Nuestra Señora del Carmen">
@endsection()

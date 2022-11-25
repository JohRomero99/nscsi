@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code', '400')
@section('message', __('Ocurrio un problema'))
@section('edit','Error inesperado')
@section('image')
    <img src="{{ asset('imagenes/paginaNoEncontrada.png') }}" width="450" height="350" alt="Nuestra Señora del Carmen">
@endsection()
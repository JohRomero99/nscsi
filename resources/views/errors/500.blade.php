@extends('errors::illustrated-layout')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
@section('edit','Por el momento el sitio se encuentra en mantenimiento')
@section('image')
    <img src="{{ asset('imagenes/mantenimiento.png') }}" width="450" height="350" alt="Nuestra Señora del Carmen">
@endsection()

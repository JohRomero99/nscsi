@extends('errors::illustrated-layout')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))
@section('image')
    <img src="{{ asset('imagenes/mantenimiento.png') }}" width="450" height="350" alt="Nuestra Señora del Carmen">
@endsection()

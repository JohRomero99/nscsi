@extends('errors::illustrated-layout')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
@section('image')
    <img src="{{ asset('imagenes/mantenimiento.png') }}" width="450" height="350" alt="Nuestra Señora del Carmen">
@endsection()

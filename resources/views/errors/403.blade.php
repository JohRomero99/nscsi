@extends('errors::illustrated-layout')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
@section('image')
    <img src="{{ asset('imagenes/mantenimiento.png')}}") width="450" height="350" alt="Nuestra Señora del Carmen">
@endsection()

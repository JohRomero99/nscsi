@extends('errors::illustrated-layout')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))
@section('image')
    <img src="{{ asset('imagenes/mantenimiento.png') }}" width="450" height="350" alt="Nuestra Señora del Carmen">
@endsection()

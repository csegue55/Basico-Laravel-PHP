@extends('plantillas.header')
@section('title','Evotic')

@section('content')
    @foreach($coches as $coche)
        {{$coche->id}}
        {{$coche->id_propietario}}
        {{$coche->marca}}
        {{$coche->modelo}}
        {{$coche->color}}
        <br>

    @endforeach
@endsection    
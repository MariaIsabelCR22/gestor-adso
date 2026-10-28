@extends('layouts.app')

@section('title', 'Nuevo aprendiz')

@section('content')
    <h1>Nuevo aprendiz</h1>

    <form action="{{ route('aprendices.store') }}" method="POST">
        @include('aprendices._form', ['aprendiz' => $aprendiz])
    </form>

    <p><a href="{{ route('aprendices.index') }}">Volver al listado</a></p>
@endsection
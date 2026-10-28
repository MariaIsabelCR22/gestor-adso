@extends('layouts.app')

@section('title', 'Editar aprendiz')

@section('content')
    <h1>Editar aprendiz</h1>

    <form action="{{ route('aprendices.update', $aprendiz) }}" method="POST">
        @method('PUT')
        @include('aprendices._form', ['aprendiz' => $aprendiz])
    </form>

    <p><a href="{{ route('aprendices.index') }}">Volver al listado</a></p>
@endsection
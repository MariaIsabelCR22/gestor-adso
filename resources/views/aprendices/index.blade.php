@extends('layouts.app')

@section('title', 'Aprendices')

@section('content')
    <h1>Aprendices</h1>

    <p><a href="{{ route('aprendices.create') }}">+ Nuevo</a></p>

    <form action="{{ route('aprendices.index') }}" method="GET">
        <input type="text" name="q" value="{{ $q }}" placeholder="Buscar por nombre o documento">
        <button type="submit">Buscar</button>
        @if ($q)
            <a href="{{ route('aprendices.index') }}">Limpiar</a>
        @endif
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Correo</th>
                <th>Ficha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($aprendices as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->nombre }}</td>
                    <td>{{ $a->documento }}</td>
                    <td>{{ $a->correo }}</td>
                    <td>{{ $a->ficha_id ?? '—' }}</td>
                    <td>
                        <a href="{{ route('aprendices.edit', $a) }}">Editar</a>

                        <form action="{{ route('aprendices.destroy', $a) }}" method="POST"
                              onsubmit="return confirm('¿Eliminar?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No hay aprendices para mostrar.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $aprendices->links() }}
@endsection
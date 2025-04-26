@extends('layouts.app')

@section('content')
    <h1>Todas las Tareas</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Título</th>
                <th>Estado</th>
                <th>Fecha Cumplimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->titulo }}</td>
                    <td>{{ ucfirst($tarea->estado) }}</td>
                    <td>{{ $tarea->fecha_cumplimiento }}</td>
                    <td>
                        <a href="{{ route('tareas.edit', $tarea) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('tareas.destroy', $tarea) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que quieres eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

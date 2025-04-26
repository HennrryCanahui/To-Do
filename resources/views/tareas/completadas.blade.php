@extends('layouts.app')

@section('content')
    <h1>Tareas Completadas</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Fecha Cumplimiento</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->titulo }}</td>
                    <td>{{ $tarea->fecha_cumplimiento }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Editar Tarea</h1>

    <form action="{{ route('tareas.update', $tarea) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $tarea->titulo) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control">{{ old('descripcion', $tarea->descripcion) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Estado</label>
            <select name="estado" class="form-control" required>
                <option value="pendiente" {{ old('estado', $tarea->estado) == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="completada" {{ old('estado', $tarea->estado) == 'completada' ? 'selected' : '' }}>Completada</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de Cumplimiento</label>
            <input type="date" name="fecha_cumplimiento" class="form-control"
                value="{{ old('fecha_cumplimiento', $tarea->fecha_cumplimiento ? \Illuminate\Support\Carbon::parse($tarea->fecha_cumplimiento)->format('Y-m-d') : '') }}">
        </div>
        

        <button type="submit" class="btn btn-primary">Actualizar Tarea</button>
    </form>
@endsection

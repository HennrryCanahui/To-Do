@extends('layouts.app')

@section('content')
    <h1>Crear Nueva Tarea</h1>

    <form action="{{ route('tareas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Estado</label>
            <select name="estado" class="form-control" required>
                <option value="pendiente">Pendiente</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de Cumplimiento</label>
            <input type="date" name="fecha_cumplimiento" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Guardar Tarea</button>
    </form>
@endsection

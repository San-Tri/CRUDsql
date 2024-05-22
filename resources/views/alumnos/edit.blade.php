@extends('layout')

@section('content')
    <h1>Editar Alumno</h1>
    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $alumno->nombre }}" required>
        <label>Apellido:</label>
        <input type="text" name="apellido" value="{{ $alumno->apellido }}" required>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $alumno->email }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection

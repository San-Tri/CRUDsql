@extends('layout')

@section('content')
    <h1>Crear Alumno</h1>
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Apellido:</label>
        <input type="text" name="apellido" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Guardar</button>
    </form>
@endsection

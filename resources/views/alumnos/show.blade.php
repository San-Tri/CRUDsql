@extends('layout')

@section('content')
    <h1>Detalles del Alumno</h1>
    <p>ID: {{ $alumno->id }}</p>
    <p>Nombre: {{ $alumno->nombre }}</p>
    <p>Apellido: {{ $alumno->apellido }}</p>
    <p>Email: {{ $alumno->email }}</p>
    <a href="{{ route('alumnos.index') }}">Volver</a>
@endsection

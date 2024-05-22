<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Alumnos</title>
</head>
<body>
    <header>
        <h1>Gestión de Alumnos</h1>
        <nav>
            <a href="{{ route('alumnos.index') }}">Inicio</a>
            <a href="{{ route('alumnos.create') }}">Crear Alumno</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>

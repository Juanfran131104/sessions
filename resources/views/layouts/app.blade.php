<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación de Clase</title>
</head>
<body style="font-family: sans-serif; margin: 0; padding: 0;">
    <header style="background-color: #f3f4f6; padding: 15px; display: flex; justify-content: space-between; align-items: center;">
        <div>
            <strong>MiApp</strong>
        </div>
        <nav>
            {{-- Comprobación del token en la sesión --}}
            @if(session()->has('token'))
                <span style="margin-right: 15px;">Hola, {{ session('name') }}</span>
                
                {{-- Formulario para cerrar sesión --}}
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="cursor: pointer; padding: 5px 10px;">Cerrar sesión</button>
                </form>
            @else
                <a href="{{ route('login') }}" style="margin-right: 10px; text-decoration: none; color: #333;">Iniciar sesión</a>
                <a href="#" style="text-decoration: none; color: #333;">Crear cuenta</a>
            @endif
        </nav>
    </header>

    <main style="padding: 20px;">
        {{-- Mensajes Flash de la sesión --}}
        @if(session('mensaje'))
            <div style="background-color: #d1e7dd; color: #0f5132; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
                {{ session('mensaje') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
@extends('layouts.app')

@section('content')
<div style="max-width: 400px; margin: 0 auto; border: 1px solid #ccc; padding: 20px; border-radius: 8px;">
    <h2 style="margin-top: 0;">Iniciar Sesión</h2>

    {{-- Mostrar errores si fallan las credenciales --}}
    @if($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        
        <div style="margin-bottom: 15px;">
            <label for="email" style="display:block; margin-bottom: 5px;">Correo Electrónico:</label>
            {{-- old('email') mantiene el valor tras un error --}}
            <input type="email" name="email" id="email" value="{{ old('email') }}" required style="width: 100%; padding: 8px; box-sizing: border-box;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="password" style="display:block; margin-bottom: 5px;">Contraseña:</label>
            <input type="password" name="password" id="password" required style="width: 100%; padding: 8px; box-sizing: border-box;">
        </div>

        <button type="submit" style="width: 100%; padding: 10px; background-color: #000; color: #fff; border: none; border-radius: 4px; cursor: pointer;">Entrar</button>
    </form>
</div>
@endsection
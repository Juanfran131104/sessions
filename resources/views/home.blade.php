@extends('layouts.app')

@section('content')
    <div style="text-align: center; margin-top: 50px;">
        <h1>Bienvenido a la página principal</h1>
        
        @if(session()->has('token'))
            <p>Has iniciado sesión correctamente. Tu token actual es: <br> 
               <code style="background-color: #eee; padding: 5px;">{{ session('token') }}</code>
            </p>
        @else
            <p>Actualmente no has iniciado sesión.</p>
            <a href="{{ route('login') }}" style="display: inline-block; margin-top: 15px; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Ir a Login</a>
        @endif
    </div>
@endsection
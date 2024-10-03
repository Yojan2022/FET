@extends('master')

@section('content')
  @auth
    <h1>Bienvenido, {{ Auth::user()->username }}</h1>
    <!-- Mostrar contenido solo para usuarios autenticados -->
  @else
    <p>No tienes acceso a esta página. Por favor <a href="{{ route('login') }}">inicia sesión</a>.</p>
  @endauth
@endsection

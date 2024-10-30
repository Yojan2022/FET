@extends('layouts.admin.master')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Editar Usuario: {{ $user->username }}</h3>
  </div>
  <div class="card-body">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="username">Nombre de Usuario</label>
        <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $user->username) }}" required>
        @error('username')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-group">
        <label for="email">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        @error('email')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-group">
        <label for="password">Contraseña (dejar en blanco si no desea cambiarla)</label>
        <input type="password" class="form-control" id="password" name="password">
        @error('password')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-group">
        <label for="password_confirmation">Confirmar Contraseña</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
      </div>

      <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
      <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
  </div>
</div>
@endsection

@extends('layouts.admin.master')

@section('content')
<div class="container-fluid">
  <div class="row">

    <!-- Gestión de Usuarios -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $userCount }}</h3>
          <p>Gestión de Usuarios</p>
        </div>
        <div class="icon">
          <i class="fas fa-users"></i>
        </div>
        <a href="{{ route('users.index') }}" class="small-box-footer">
          Más información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->

    <!-- Solicitudes -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $applicationCount }}</h3>
          <p>Solicitudes</p>
        </div>
        <div class="icon">
          <i class="fas fa-file-alt"></i>
        </div>
        <a href="{{ route('applications.index') }}" class="small-box-footer">
          Más información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->

    <!-- Crear Solicitud -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>Nueva Solicitud</h3>
          <p>Crear Solicitud</p>
        </div>
        <div class="icon">
          <i class="fas fa-plus"></i>
        </div>
        <a href="{{ route('applications.create') }}" class="small-box-footer">
          Más información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->

    <!-- Personas en Partidas -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{ $bookCount }}</h3>
          <p>Personas en Partidas</p>
        </div>
        <div class="icon">
          <i class="fas fa-users"></i>
        </div>
        <a href="{{ route('book.index') }}" class="small-box-footer">
          Más información <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- ./col -->

  </div>
  <!-- /.row -->
</div>
@endsection

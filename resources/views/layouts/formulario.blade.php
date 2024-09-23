@extends('master')

@section('content')
	<header>		
    <form class="d-flex" role="search" action="{{ route('form.search') }}" method="POST">
      @csrf
      <div class="col-md-7 col-md-pull-2 animate-box" width="100%">
        <div class="row">
          <div class="col-md-12">
          	<span>Nombre</span>
            <div class="form-group">
            	<input type="text" class="form-control" name="Nombre" id="Nombre" required>
              <br><br>
              <span>Apellidos</span>
              <input type="text" class="form-control" name="Apellidos" id="Apellidos" required>
            </div>
          </div>
          <div class="col-md-12">
          	<div class="form-group">
            	<input type="submit" value="Buscar" class="btn btn-primary btn-modify" name="btn-consultar">
            </div>
          </div>
        </div>
      </div>
    </form>
	</header>
@endsection

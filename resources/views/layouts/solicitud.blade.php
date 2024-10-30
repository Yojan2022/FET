@extends('master')

@section('content')

<div class="container-wrap">
  <form action="{{ route('applications.store') }}" method="post" class="d-flex">
    @csrf
    
    <div class="row mb-3"> 
      <div class="col-md-5"> 
        <label class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{ $name }}" required readonly>
      </div>
      <div class="col-md-5"> 
        <label class="form-label">Apellidos</label>
        <input type="text" name="last_name" class="form-control" value="{{ $last_name }}" required readonly>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-5">
        <label class="form-label">Fecha de nacimiento</label>
        <input type="date" name="date_of_birth" class="form-control" required>
      </div>
      <div class="col-md-5">
        <label class="form-label">Fecha Aproximada del bautizo</label>
        <input type="date" name="christening" class="form-control" value="">
      </div>
      
    </div>

    <div class="row mb-3">
      <div class="col-md-5">
        <label class="form-label">Nombre de la mamá</label>
        <input type="text" name="mom" class="form-control" value="">
      </div>
      <div class="col-md-5">
        <label class="form-label">Nombre del papá</label>
        <input type="text" name="father" class="form-control" value="">
      </div>
      
    </div>

    <div class="row mb-3">
      <div class="col-md-5">
        <label class="form-label">Nombre de la madrina</label>
        <input type="text" name="godmother" class="form-control" value="">
      </div>
      <div class="col-md-5">
        <label class="form-label">Nombre del padrino</label>
        <input type="text" name="godfather" class="form-control" value="">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-5">
        <label class="form-label">Abuelo paterno</label>
        <input type="text" name="paternal_grandfather" class="form-control" value="">
      </div>
      <div class="col-md-5">
        <label class="form-label">Abuela paterna</label>
        <input type="text" name="paternal_grandmother" class="form-control" value="">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-5">
        <label class="form-label">Abuelo materno</label>
        <input type="text" name="maternal_grandfather" class="form-control" value="">
      </div>
      <div class="col-md-5">
        <label class="form-label">Abuela materna</label>
        <input type="text" name="maternal_grandmother" class="form-control" value="">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-5">
        <label class="form-label">Para qué la solicita</label>
        <input type="text" name="solicitante" class="form-control" value="">
      </div>
      <div class="col-md-5">
        <label class="form-label">Dirección a la cual se envía la partida de bautismo</label>
        <input type="text" name="address" class="form-control" value="">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-5">
        <label class="form-label">Teléfono 1</label>
        <input type="number" name="telephone_1" class="form-control" required>
      </div>
      <div class="col-md-5">
        <label class="form-label">Teléfono 2</label>
        <input type="number" name="telephone_2" class="form-control">
      </div>
    </div>
    <br>

    <div class="row mb-3">
      <div class="col-md-5">
        <label class="form-label">La solicita autenticada</label>
        <select name="authenticated" class="form-select" aria-label="Default select example">
          <option value="" selected disabled>Seleccionar</option>
          <option value="si">sí</option>
          <option value="no">no</option>
        </select>
      </div>
      <div class="col-md-5">
        <div class="col-md-6 mb-3">
          <button type="submit" class="btn btn-primary btn-modify">Enviar Solicitud</button>
        </div>
      </div>
    </div>
  </form>
</div>

@endsection

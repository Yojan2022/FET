@extends('layouts.admin.master')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Agregar Nueva Aplicación</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('applications.store') }}" method="POST">
              @csrf

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="last_name">Apellido</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="date_of_birth">Fecha de Nacimiento</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="father">Padre</label>
                    <input type="text" name="father" id="father" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="mom">Madre</label>
                    <input type="text" name="mom" id="mom" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="godfather">Padrino</label>
                    <input type="text" name="godfather" id="godfather" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="godmother">Madrina</label>
                    <input type="text" name="godmother" id="godmother" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="christening">Bautizo</label>
                <input type="date" name="christening" id="christening" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="solicitante">Solicitante</label>
                <input type="text" name="solicitante" id="solicitante" class="form-control" required>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="telephone_1">Teléfono 1</label>
                    <input type="number" name="telephone_1" id="telephone_1" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="telephone_2">Teléfono 2</label>
                    <input type="number" name="telephone_2" id="telephone_2" class="form-control">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="address">Dirección</label>
                <input type="text" name="address" id="address" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="authenticated">Autenticada</label>
                <select name="authenticated" id="authenticated" class="form-control" required>
                  <option value="" disabled selected>Seleccione una opción</option>
                  <option value="si">Sí</option>
                  <option value="no">No</option>
                </select>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Agregar Aplicación</button>
                <a href="{{ route('applications.index') }}" class="btn btn-secondary">Cancelar</a>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

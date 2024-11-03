@extends('layouts.admin.master')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Editar Aplicación</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('applications.update', $application->id) }}" method="POST">
              @csrf
              @method('PUT') <!-- Utilizamos el método PUT para la actualización -->

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $application->name) }}" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="last_name">Apellido</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name', $application->last_name) }}" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="date_of_birth">Fecha de Nacimiento</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ old('date_of_birth', $application->date_of_birth) }}" required>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="father">Padre</label>
                    <input type="text" name="father" id="father" class="form-control" value="{{ old('father', $application->father) }}" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="mom">Madre</label>
                    <input type="text" name="mom" id="mom" class="form-control" value="{{ old('mom', $application->mom) }}" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="godfather">Padrino</label>
                    <input type="text" name="godfather" id="godfather" class="form-control" value="{{ old('godfather', $application->godfather) }}" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="godmother">Madrina</label>
                    <input type="text" name="godmother" id="godmother" class="form-control" value="{{ old('godmother', $application->godmother) }}" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="christening">Bautizo</label>
                    <input type="date" name="christening" id="christening" class="form-control" value="{{ old('christening', $application->christening) }}" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="solicitante">Solicitante</label>
                    <input type="text" name="solicitante" id="solicitante" class="form-control" value="{{ old('solicitante', $application->solicitante) }}" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="telephone_1">Teléfono 1</label>
                    <input type="number" name="telephone_1" id="telephone_1" class="form-control" value="{{ old('telephone_1', $application->telephone_1) }}" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="telephone_2">Teléfono 2</label>
                    <input type="number" name="telephone_2" id="telephone_2" class="form-control" value="{{ old('telephone_2', $application->telephone_2) }}">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="address">Dirección</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $application->address) }}" required>
              </div>

              <div class="form-group">
                <label for="authenticated">Autenticada</label>
                <select name="authenticated" id="authenticated" class="form-control" required>
                  <option value="si" {{ old('authenticated', $application->authenticated) == 'si' ? 'selected' : '' }}>Sí</option>
                  <option value="no" {{ old('authenticated', $application->authenticated) == 'no' ? 'selected' : '' }}>No</option>
                </select>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar Aplicación</button>
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

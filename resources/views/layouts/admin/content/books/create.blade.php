@extends('layouts.admin.master')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Agregar Nuevo Libro</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ route('book.store') }}" method="POST">
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
                <label for="folio">Folio</label>
                <input type="number" name="folio" id="folio" class="form-control" required>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="page">Número de Páginas</label>
                    <input type="number" name="page" id="page" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="record">Número de Partidas</label>
                    <input type="number" name="record" id="record" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Agregar Libro</button>
                <a href="{{ route('book.index') }}" class="btn btn-secondary">Cancelar</a>
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

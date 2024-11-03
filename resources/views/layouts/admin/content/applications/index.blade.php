@extends('layouts.admin.master')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lista de Aplicaciones</h3>
            <a href="{{ route('applications.create') }}" class="btn btn-success float-right">Agregar Nueva Aplicación</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Fecha de Nacimiento</th>
                  <th>Padre</th>
                  <th>Madre</th>
                  <th>Padrino</th>
                  <th>Madrina</th>
                  <th>Solicitante</th>
                  <th>Teléfono 1</th>
                  <th>Teléfono 2</th>
                  <th>Dirección</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($applications as $application)
                <tr>
                  <td>{{ $application->id }}</td>
                  <td>{{ $application->name }}</td>
                  <td>{{ $application->last_name }}</td>
                  <td>{{ $application->date_of_birth }}</td>
                  <td>{{ $application->father }}</td>
                  <td>{{ $application->mom }}</td>
                  <td>{{ $application->godfather }}</td>
                  <td>{{ $application->godmother }}</td>
                  <td>{{ $application->solicitante }}</td>
                  <td>{{ $application->telephone_1 }}</td>
                  <td>{{ $application->telephone_2 }}</td>
                  <td>{{ $application->address }}</td>
                  <td>
                    <a href="{{ route('applications.edit', $application->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('applications.destroy', $application->id) }}" method="POST" class="delete-form d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="button" class="btn btn-danger delete-button">Eliminar</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Fecha de Nacimiento</th>
                  <th>Padre</th>
                  <th>Madre</th>
                  <th>Padrino</th>
                  <th>Madrina</th>
                  <th>Solicitante</th>
                  <th>Teléfono 1</th>
                  <th>Teléfono 2</th>
                  <th>Dirección</th>
                  <th>Acciones</th>
                </tr>
              </tfoot>
            </table>
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

@section('scripts')
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
      button.addEventListener('click', function() {
        const form = this.closest('.delete-form');

        Swal.fire({
          title: '¿Estás seguro?',
          text: "¡No podrás revertir esto!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sí, eliminarlo',
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.isConfirmed) {
            form.submit(); // Envía el formulario si se confirma
          }
        });
      });
    });
  });
</script>
@endsection

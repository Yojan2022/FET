@extends('layouts.admin.master')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lista de Libros</h3>
            <a href="{{ route('book.create') }}" class="btn btn-success float-right">Agregar Nuevo Libro</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Folio</th>
                  <th>Páginas</th>
                  <th>Partidas</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($books as $book)
                <tr>
                  <td>{{ $book->id }}</td>
                  <td>{{ $book->name }}</td>
                  <td>{{ $book->last_name }}</td>
                  <td>{{ $book->folio }}</td>
                  <td>{{ $book->page }}</td>
                  <td>{{ $book->record }}</td>
                  <td>
                    <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('book.destroy', $book->id) }}" method="POST" class="delete-form d-inline">
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
                  <th>Folio</th>
                  <th>Páginas</th>
                  <th>Partidas</th>
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

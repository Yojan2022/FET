@extends('master')

@section('css')
  <style>
    h1{
      text-align: center;
    }
    .custom-btn {
      padding: 10px 20px;
      border: 2px solid #198754;
      background-color: transparent;
      color: #198754;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
    }

    .custom-btn:hover {
      background-color: #198754;
      color: white;
    }
  </style>
@endsection

@section('content')
  <h1>Lista de Libros</h1>
    
  @if ($books->isEmpty())
    <p>No hay libros registrados.</p>
  @else
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Folio</th>
          <th>Página</th>
          <th>Registro</th>
          <th>Solicitar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
          <tr>
            <td>{{ $book->name }}</td>
            <td>{{ $book->last_name }}</td>
            <td>{{ $book->folio }}</td>
            <td>{{ $book->page }}</td>
            <td>{{ $book->record }}</td>
            <td>
              <a type="button" class="custom-btn" href="">
                <i class="bi bi-plus"></i>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
@endsection

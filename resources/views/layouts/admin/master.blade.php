<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.admin.partials.head')
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    @include('layouts.admin.partials.navbar')

    @include('layouts.admin.partials.sidebar')

    <div class="content-wrapper">

      {{-- Inicio breadcrumb --}}
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard v3</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v3</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      {{-- Fin breadcrumb --}}

      <!-- Alertas -->
      <div class="container-fluid">
        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if(session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if($errors->any())
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
      </div>

      <!-- Main content -->
      @section('content')
      @show
      <!-- /.content -->
    </div>

    <aside class="control-sidebar control-sidebar-dark"></aside>

    @include('layouts.admin.partials.footer')
  </div>
  @include('layouts.admin.partials.scripts')
  @section('scripts')
  @show
</body>
</html>

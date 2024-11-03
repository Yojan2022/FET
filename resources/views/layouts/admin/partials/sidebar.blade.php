<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{ route('form.index') }}" class="brand-link">
    <img src="{{ asset('images/icono.ico') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">BAPTIZED</span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->username }}</a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <!-- Dashboard -->
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        
        <!-- Solicitudes -->
        <li class="nav-item">
          <a href="{{ route('requests.index') }}" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>Solicitudes</p>
          </a>
        </li>

        <!-- Personas en Partidas -->
        <li class="nav-item">
          <a href="{{ route('book.index') }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Personas en Partidas</p>
          </a>
        </li>

        <!-- Usuarios -->
        <li class="nav-item">
          <a href="{{ route('users.index') }}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Usuarios</p>
          </a>
        </li>
        
      </ul>
    </nav>
  </div>
</aside>

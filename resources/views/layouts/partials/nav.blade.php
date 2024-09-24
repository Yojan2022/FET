<div class="fh5co-loader"></div>
<div id="page">
  <nav class="fh5co-nav" role="navigation">
    <div class="container-wrap">
      <div class="top-menu">
        <div class="row">
          <div class="col-md-12 col-offset-0 text-center">
            <div id="fh5co-logo">
              <p>Diócesis de Neiva</p>
              <p>Vicaría Sagrada Familia</p>
              <p>Parroquia Nuestra Señora de Lourdes</p>
              <p>Algeciras</p>
            </div>
          </div>
          <div class="col-md-12 col-md-offset-0 text-center menu-1">
          	<ul>
              @auth
              <!-- Si el usuario está autenticado, muestra el botón de logout -->
                <li>
                	<form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" style="border: none; background: transparent; cursor: pointer;">
                    	<img src="https://img.icons8.com/ios-glyphs/30/000000/cross.png" />
                    </button>
                  </form>
                </li>
              @endauth
              @guest
              <!-- Si el usuario no está autenticado, muestra el botón de login -->
              	<li>
                  <a href="{{ route('login') }}">
                  	<img src="https://img.icons8.com/ios-glyphs/30/000000/cross.png" />
                  </a>
                </li>
              @endguest
            </ul>
          </div>
        </div>  
      </div>
    </div>
  </nav>
</div>

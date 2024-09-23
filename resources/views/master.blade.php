<!DOCTYPE HTML>
<html>
	<head>
      @include('layouts.partials.head')
    </head>
	<body>
		@include('layouts.partials.nav')
		@include('layouts.partials.carruself')
    @include('layouts.partials.info')
      @section('content')
      @show
		@include('layouts.partials.foto')
		@include('layouts.partials.footer')
		@include('layouts.partials.script')
	</body>
</html>
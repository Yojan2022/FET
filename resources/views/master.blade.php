<!DOCTYPE HTML>
<html>
	<head>
    @include('layouts.partials.head')
		@section('css')
		@show
  </head>
	<body>
		@include('layouts.partials.nav')
		@include('layouts.partials.carruself')
    @section('content')
    @show
		@include('layouts.partials.foto')
		@include('layouts.partials.footer')
		@include('layouts.partials.script')
		@if(session('error'))
			<script>
				Swal.fire({
					position: "top-end",
					icon: "error",
					title: "{{ session('error') }}",
					showConfirmButton: false,
					timer: 2000
				});
			</script>
		@endif
		@if (session('last_login'))
			<script>
				Swal.fire({
					position: "top-end",
					icon: "success",
					title: "Última conexión",
					text: "{{ session('last_login') }}",
					showConfirmButton: false,
					timer: 2000
				});
			</script>
		@endif
	</body>
</html>
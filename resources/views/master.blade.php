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
	</body>
</html>
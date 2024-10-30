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
		@if ($errors->any())
    <script>
        @foreach ($errors->all() as $error)
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "{{ $error }}",
                showConfirmButton: false,
                timer: 3000
            });
        @endforeach
    </script>
		@endif
		@if (session('success'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('success') }}",
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
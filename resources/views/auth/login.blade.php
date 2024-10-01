<!DOCTYPE html>
<html lang="en">

<head>
	<title>Diócesis de Neiva Vicaría Sagrada Familia Parroquia Nuestra Señora de Lourdes Algecirass</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
	<link rel="stylesheet" href="{{ asset('images/icono.ico') }}">
</head>

<body class="img js-fullheight" style="background-image: url(images/img-2.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Al que cree todo le es posible.</h2>
					<h2 class="heading-section">Marcos 9:23</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Iniciar sesión</h3>

						<form action="{{ route('login') }}" method="post" name="login_form" class="signin-form">
              @csrf
							<div class="form-group">
								<input type="text" name="username" class="form-control" id="username" placeholder="username" value="{{ old('username') }}" required autofocus>
							</div><br>
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required autocomplete="current-password">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div><br>
							<div class="form-group">
								<input type="submit" class="form-control btn btn-danger submit px-3" value="Ingresar">
							</div>
						</form>

						<p class="w-100 text-center">&mdash; Parroquia Nuestra señora de Lourdes &mdash;</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--opcion para poder visualizar la clave escrita-->
	<script type="text/JavaScript" src="{{ asset('js/login.min.js') }}"></script>
	<script type="text/JavaScript" src="{{ asset('js/main.js') }}"></script>
	<script type="text/JavaScript" src="{{ asset('js/sha512.js') }}"></script>
	<script type="text/JavaScript" src="{{ asset('js/forms.js') }}"></script>
</body>

</html>
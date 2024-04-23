<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts/partials/head')
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
								<input type="email" name="email" id="email" class="form-control" placeholder="Correo" required value="{{ old('email') }}" autocomplete="email" autofocus>
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
	<script src="js/login.min.js"></script>
	<script src="js/main.js"></script>
  <script type="text/JavaScript" src="js/sha512.js"></script>
	<script type="text/JavaScript" src="js/forms.js"></script>
</body>

</html>
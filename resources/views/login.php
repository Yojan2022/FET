
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Diócesis de Neiva Vicaría Sagrada Familia Parroquia Nuestra Señora de Lourdes Algecirass</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="shortcut icon" href="images/icono.ico"/>
	<script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script>
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
	 			
		    <form action="includes/process_login.php" method="post" name="login_form" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="email" class="form-control" placeholder="Usuario" required>
		      		</div><br>
	            <div class="form-group">
	              <input id="password-field" type="password" name="password" id="password"  class="form-control" placeholder="Contraseña" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div><br>
	            <div class="form-group">
	            	<input  type="button" onclick="formhash(this.form, this.form.password);" class="form-control btn btn-danger submit px-3" value="Ingresar">
	            </div>
	        </form>
						
	          	<p class="w-100 text-center">&mdash; Parroquia Nuestra señora de Lourdes &mdash;</p>
		      </div>
				</div>
			</div>
		</div>
	</section>
	<!--oppcion para poder visualizar la clave escrita-->
	<script src="js/login.min.js"></script>
  	<script src="js/main.js"></script>
	</body>
</html>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pagina Principal</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	


</head>

</head>
<body>
	
	<div class="container">
		<h2 class="text-info">Bienvenido!</h2>
		<p>Te damos la bienvenida.</p>

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<?php if($this->session->userdata('username')): ?>
				<a href="<?=site_url('panel') ?>">Ir al panel </a>
				<br>
				<a href="<?=site_url('login/logout') ?>">desconectarse</a>
			<?php else: ?>
			<a href="#" data-toggle="modal" data-target="#myModal">conectarse</a>
		<?php endif; ?>

		

<!-- ||||||||||||||||| Intentando traer los datos||||||||||||||||||-->


	</div>



	

	
				
	
	


<!-- ||||||||||||||||| BEGIN LOGIN MODAL||||||||||||||||||-->
	<div class="col-lg-12 col-md-12 col-sm-12">
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="well">
					<h2>Iniciar sesión</h2>
					<form action="<?php echo site_url("login"); ?>" method="POST">
						<div class="form-group">
							<label for="username"></label>
							<input type="text" name="username" id="username" class="form-control" placeholder="Username">
						</div>
						<div class="form-group">
							<label for="password"></label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password">
						</div>
						<input type="submit" value="Ingresar" class="btn btn-primary">
					</form>
				</div>

			</div>
		</div>
	</div>


<!-- ||||||||||||||||| END LOGIN MODAL||||||||||||||||||-->
</div>

</div>





<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
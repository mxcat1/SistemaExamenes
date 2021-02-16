<?php
    if ($this->session->has_userdata('Administrador')){
    	header('location:'.base_url().'administracion/Sistema');
	};
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistema Examenes Inicio de Session de Administradores</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/adminlte.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="../../index2.html"><b>Sistema </b>Examenes</a>
	</div>
	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Inicio de session para Administradores</p>

			<div>
				<small class="text-danger">
					{errores}
				</small>
			</div>

			<form action="<?php echo base_url();?>administracion/LoginAdministrador" method="post">
				<?php
				echo form_error('txtuser');
				?>
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="txtuser" id="txtuser" placeholder="Usuario">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<?php
				echo form_error('txtcontraseña');
				?>
				<div class="input-group mb-3">
					<input type="password" class="form-control" name="txtcontraseña" id="txtcontraseña" placeholder="Contraseña">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12 d-flex justify-content-end">
						<div>
							<button type="submit" class="btn btn-primary btn-block">Acceder</button>
						</div>
					</div>
					<!-- /.col -->
				</div>
			</form>

		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/js/adminlte.js"></script>


</body>
</html>

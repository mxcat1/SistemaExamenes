<?php
$this->load->view('plantilla/html');
$this->load->view('plantilla/header');
?>
<main class="contenido">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mt-5 d-flex justify-content-center">
				<h3>Contactanos</h3>
			</div>
		</div>
		<div class="row m-5">
			<div class="col-sm-6">
				<h5 class="text-center">Ubícanos</h5>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15310.501535869078!2d-71.53678579999999!3d-16.39303485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1574212706272!5m2!1ses!2spe" class="h-100 w-100" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
			<div class="col-sm-6">
				<form action="" method="post" class="d-flex flex-column ">
					<div class="form-group">
						<input type="text" class="form-control" id="txtnomape"  placeholder="Nombres y Apellidos" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="txtemail" placeholder="Correo Electronico" required>
					</div>
					<div class="form-group">
						<textarea class="form-control" id="comentario" placeholder="Dinos en que podemos ayudarte" rows="4"></textarea>
					</div>
					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-primary w-50">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
<?php
$this->load->view('plantilla/footer');
$this->load->view('plantilla/htmlfinal');

?>


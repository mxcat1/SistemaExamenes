<?php
$this->load->view('plantilla/html');
$this->load->view('plantilla/header');
?>
<main class="contenido p-5">
	<div class="container">
		<h3 class="text-center">Alumnos</h3>
		<div class="row">
			<div class="col-sm-12 d-flex justify-content-center p-3">
				<img src="<?=base_url()?>assets/img/img-fake.png" alt="" width="100" height="100">
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<?php
				$atributos=array('class'=>'d-flex flex-column align-items-center','id'=>'frmlogin');
			    echo form_open('autenticacion/IncioSession',$atributos);
			?>
				<div class="form-group d-flex flex-column align-items-center">
					<?php
					echo form_label('Nombre de usuario', 'txtnomusu');
					$data = array(
						'type' => 'text',
						'name' => 'txtnomusu',
						'id' => 'txtnomusu',
						'value' => '',
						'class' => 'form-control w-150',
						'placeholder' => 'Nombre de Usuario'
					);
	
					echo form_input($data);

					?>
	
				</div>
				<?php
				echo form_error('txtnomusu')
				?>
				<div class="form-group d-flex flex-column align-items-center">
					<?php
					echo form_label('Nombre de usuario','txtnomusu');
					$contra = array(
						'type'  => 'text',
						'name'  => 'passcontraseña',
						'id'    => 'passcontraseña',
						'class' => 'form-control w-150',
						'placeholder'=>'Contraseña'
					);

					echo form_password($contra);

					?>
				</div>
				<?php
				echo form_error('passcontraseña')
				?>
				<?php
				$boton = array(
					'value' => 'Ingresar',
					'type' => 'submit',
					'content' => 'Ingresar',
					'class'=>'btn btn-success align-items-center w-50'
				);

				echo form_button($boton);
				?>
				<small id="emailHelp" class="form-text text-muted">Nunca des tus credenciales a nadie.</small>
			<?php
				echo form_close();
			?>
		</div>
	</div>
</main>

<?php
$this->load->view('plantilla/footer');
$this->load->view('plantilla/htmlfinal');

?>

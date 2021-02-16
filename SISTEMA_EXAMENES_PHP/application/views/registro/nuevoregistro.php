<?php
$this->load->view('plantilla/html');
$this->load->view('plantilla/header');
?>
<main class="contenido">
	<div class="row m-5">
		<div class="col-sm-12 d-flex justify-content-center">
			<h3 class="text-size-50">Registro Alumnos</h3>
			{errors}
		</div>
	</div>
	<?php
	    echo form_open('registro/nuevoRegistroAlumno');
	?>
		<div class="container w-75">
			<div class="row ml-5">
				<div class="form-group col-sm-6 mt-3">
					<?php
					$inputdni = array(
						'type' => 'text',
						'class' => 'form-control w-75',
						'name' => 'txtdni',
						'id' => 'txtdni',
						'placeholder' => 'Nro de DNI'
					);
					echo form_input($inputdni);
					?>
					<?php echo form_error('txtdni'); ?>
				</div>
				<div class="form-group col-sm-6 ">
					<h5>Contrato</h5>
					<div class="m-2">
						<div class="form-check form-check-inline">
							<?php
							$rbconct = array(
								'class' => 'form-check-input',
								'name' => 'grbcontrato',
								'id' => 'rbconcontrato',
								'value' =>'Con Contrato'
							);
							echo form_radio($rbconct);
							echo form_label('Con Contrato','rbconcontrato','class="form-check-label"');
							?>
						</div>
						<div class="form-check form-check-inline">
							<?php
							$rbsinct = array(
								'class' => 'form-check-input',
								'name' => 'grbcontrato',
								'id' => 'rbsincontrato',
								'value' =>'Sin Contrato',
								'checked'=>true
							);
							echo form_radio($rbsinct);
							echo form_label('Sin Contrato','rbsincontrato','class="form-check-label"');
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="row ml-5">
				<div class="form-group col-sm-6">
					<?php
					$txtnom = array(
						'type' => 'text',
						'class' => 'form-control w-75',
						'name' => 'txtnombre',
						'id' => 'txtnombre',
						'placeholder' => 'Nombres'
					);
					echo form_input($txtnom);
					?>
					<?php echo form_error('txtnombre'); ?>
				</div>
				<div class="form-group col-sm-6">
					<?php
					$nrcontrato = array(
						'type' => 'text',
						'class' => 'form-control w-75',
						'name' => 'txtnrcontrato',
						'id' => 'txtnrcontrato',
						'placeholder' => 'Nro de Contrato'
					);
					echo form_input($nrcontrato);
					?>
				</div>
			</div>
			<div class="row ml-5">
				<div class="form-group col-sm-6">
					<?php
					$txtape = array(
						'type' => 'text',
						'class' => 'form-control w-75',
						'name' => 'txtapellido',
						'id' => 'txtapellido',
						'placeholder' => 'Apellidos'
					);
					echo form_input($txtape);
					?>
					<?php echo form_error('txtapellido'); ?>
				</div>
				<div class="form-group col-sm-6">
					<?php
					$txtnomusu = array(
						'type' => 'text',
						'class' => 'form-control w-75',
						'name' => 'txtnomusuario',
						'id' => 'txtnomusuario',
						'placeholder' => 'Nombre de Usuario'
					);
					echo form_input($txtnomusu);
					?>
					<?php echo form_error('txtnomusuario'); ?>
				</div>
			</div>
			<div class="row ml-5">
				<div class="form-group col-sm-6">
					<label for="dtfenac"><small>Fecha de Nacimiento</small></label>
					<?php
					$dtfenac = array(
						'type' => 'date',
						'class' => 'form-control w-75',
						'name' => 'dtfenac',
						'id' => 'dtfenac',
						'placeholder' => 'Fecha de Nacimiento'
					);
					echo form_input($dtfenac);
					?>
					<?php echo form_error('dtfenac'); ?>

				</div>
				<div class="form-group col-sm-6">
					<?php
					$pass = array(
						'class' => 'form-control w-75',
						'name' => 'txtpass',
						'id' => 'txtpass',
						'placeholder' => 'Contraseña'
					);
					echo form_password($pass);
					?>
					<?php echo form_error('txtpass'); ?>
				</div>
			</div>
			<div class="row ml-5">
				<div class="form-group col-sm-6">
					<h5>Sexo</h5>
					<div class="m-2">
						<div class="form-check form-check-inline">
							<?php
							$rbfe = array(
								'class' => 'form-check-input',
								'name' => 'grbsexo',
								'id' => 'rbfemenino',
								'value' =>'Femenino',
							);
							echo form_radio($rbfe);
							echo form_label('Femenino','rbfemenino','class="form-check-label"');
							?>
						</div>
						<div class="form-check form-check-inline">
							<?php
							$rbma = array(
								'class' => 'form-check-input',
								'name' => 'grbsexo',
								'id' => 'rbmasculino',
								'value' =>'Masculino',
							);
							echo form_radio($rbma);
							echo form_label('Masculino','rbmasculino','class="form-check-label"');
							?>
						</div>
					</div>
					<?php echo form_error('grbsexo'); ?>
				</div>
				<div class="form-group col-sm-6">
					<?php
					$veripass = array(
						'class' => 'form-control w-75',
						'name' => 'txtveripass',
						'id' => 'txtveripass',
						'placeholder' => 'Verificar Contraseña'
					);
					echo form_password($veripass);
					?>
					<?php echo form_error('txtveripass'); ?>
				</div>
			</div>
			<div class="row ml-5">
				<div class="form-group col-sm-6">
					<select class="form-control w-75" name="cbpais" id="cbpais" >
						<option value="">Pais</option>

						{paices}
						<option value="{PaisCodigo}">{PaisNombre}</option>
						{/paices}
					</select>
					<?php echo form_error('cbpais'); ?>
				</div>

				<div class="form-group col-sm-6 ">
					<?php
					    $btnsubmit=array(
					    	'type'=>'submit',
					    	'class'=>'btn btn-success w-50 ml-5',
							'id'=>'btnregistrar'
						);
					    echo form_submit('btnregistrar','Registrarse',$btnsubmit);
					?>
				</div>
			</div>
			<div class="row ml-5">
				<div class="form-group col-sm-6">
					<?php
					$correo=array(
						'type'=>'email',
						'class' => 'form-control w-75',
						'name' => 'txtcorreo',
						'id' => 'txtcorreo',
						'placeholder' => 'Correo Electrónico'
					);
					echo form_input($correo);
					?>
					<?php echo form_error('txtcorreo'); ?>
				</div>
			</div>

		</div>
	<?php
	    echo form_close();
	?>

</main>
<?php
$this->load->view('plantilla/footer');
$this->load->view('plantilla/htmlfinal');

?>
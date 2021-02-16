<?php
if (!$this->session->has_userdata('Administrador')){
	header('location:'.base_url().'administracion/login');
};
$this->load->view('plantillaAdmin/html');
$this->load->view('plantillaAdmin/menunav');
$this->load->view('plantillaAdmin/menulateral');
?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Administradores</h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Lista de Administradores</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i>
					</button>
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table table-striped projects">
					<thead>
					<tr>
						<th style="width: 1%">
							#
						</th>
						<th style="width: 20%">
							Nombre y Apellidos
						</th>
						<th style="width: 30%">
							Correo
						</th>
						<th>
							Pais
						</th>
						<th style="width: 15%" class="text-center">
							Fecha de Nacimiento
						</th>
						<th style="width: 20%">
							Accion
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							#
						</td>
						<td>
							<a href="" title="Detalles"  data-toggle="modal" data-target="#modal-default">
								Names and Lastname
							</a>
							<br/>

						</td>
						<td>
							Correo Admin
						</td>
						<td >
							<p>
								Pais Admin
							</p>
						</td>
						<td >
							<p>
								Fecha Nacimiento Admin
							</p>
						</td>
						<td class="project-actions text-right">
							<a class="btn btn-info btn-sm" href="#">
								<i class="fas fa-pencil-alt">
								</i>
								Editar
							</a>
							<a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#modal-warning">
								<i class="fas fa-trash">
								</i>
								Eliminar
							</a>
						</td>
					</tr>


					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Datos Persona </h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body box-profile">
						<h3 class="profile-username text-center">
							Nombre y Apellido Persona
						</h3>
						<p class="text-muted text-center">
							Codigo Persona
						</p>
						<p class="text-muted text-center">
							Codigo PersonaAdmin o PersonaAlmuno
						</p>
						<ul class="list-group list-group-unbordered mb-3">
							<li class="list-group-item">
								<b>Dato1</b>
								<a class="float-right">Dato</a>
							</li>
							<li class="list-group-item">
								<b>Dato1</b>
								<a class="float-right">Dato</a>
							</li>
							<li class="list-group-item">
								<b>Dato1</b>
								<a class="float-right">Dato</a>
							</li>
							<li class="list-group-item">
								<b>Dato1</b>
								<a class="float-right">Dato</a>
							</li>
							<li class="list-group-item">
								<b>Dato1</b>
								<a class="float-right">Dato</a>
							</li>
						</ul>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<!-- /.modal -->

		<div class="modal fade" id="modal-warning">
			<div class="modal-dialog">
				<div class="modal-content bg-warning">
					<div class="modal-header">
						<h4 class="modal-title">Eliminar Persona</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<p>Esta seguro que desea eliminar a esta persona </p>
					</div>
					<div class="modal-footer justify-content-center">
						<button type="button" class="btn btn-outline-dark" >Si</button>
						<button type="button" class="btn btn-outline-dark" data-dismiss="modal">No</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
	</section>

</div>
<?php
$this->load->view('plantillaAdmin/footer');
$this->load->view('plantillaAdmin/htmlfinal');
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/sweetalert/sweetalert.css">
</head>

<body>

<div class="container">
	<div class="row">	
		<div class="col-md-12 text-center">	
			<a href="<?php echo base_url();?>welcome/download" class="btn btn-dark mt-3">Descargar Proyecto</a>
		</div>
	</div><br>
	<div class="row">
		<div class="col-12">
			<div class="card text-white bg-secondary mb-3">
				<div class="card-body">
					<h2 class="text-center">CONSULTAS RENIEC</h2>
					<form action="<?php echo base_url();?>welcome/search" method="POST" id="form-search">
						<div class="form-group row">
						    <label for="search" class="col-sm-1 offset-sm-2 col-form-label">DNI:</label>
						    <div class="col-sm-6">
						      	<input type="text" class="form-control" id="search" name="search" placeholder="Ingrese DNI">
						    </div>
						    <div class="col-sm-2">
						    	<button type="submit" class="btn btn-primary">Consultar</button>
						    </div>
						</div>
					</form>
				</div>
			</div>
			<div class="card mb-3" id="info-persona">
				<h5 class="card-header text-center">Información de la Persona</h5>
				<div class="card-body">
				    <div class="form-group row">
					    <label for="dni" class="col-sm-2 offset-sm-4 col-form-label">DNI:</label>
					    <div class="col-sm-6">
					      <input type="text" readonly class="form-control-plaintext" id="dni" value="25252525">
					    </div>
					    <label for="ape_paterno" class="col-sm-2 offset-sm-4 col-form-label">Apellido Paterno:</label>
					    <div class="col-sm-6">
					      <input type="text" readonly class="form-control-plaintext" id="ape_paterno" value="Perez" >
					    </div>
					    <label for="ape_materno" class="col-sm-2 offset-sm-4 col-form-label">Apellido Materno:</label>
					    <div class="col-sm-6">
					      <input type="text" readonly class="form-control-plaintext" id="ape_materno" value="Quispe">
					    </div>
					    <label for="nombres" class="col-sm-2 offset-sm-4 col-form-label">Nombres:</label>
					    <div class="col-sm-6">
					      <input type="text" readonly class="form-control-plaintext" id="nombres" value="Juan">
					    </div>
					    <label for="sexo" class="col-sm-2 offset-sm-4 col-form-label">Sexo:</label>
					    <div class="col-sm-6">
					      <input type="text" readonly class="form-control-plaintext" id="sexo" value="Masculino">
					    </div>
					    <label for="fecnac" class="col-sm-2 offset-sm-4 col-form-label">Fecha de Nacimiento:</label>
					    <div class="col-sm-6">
					      <input type="text" readonly class="form-control-plaintext" id="fecnac" value="12/12/1990">
					    </div>
					 </div>
				</div>
			</div>
		</div>
	</div>
	
</div>
<script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/sweetalert/sweetalert.js"></script>
<script src="<?php echo base_url();?>assets/backend/script.js"></script>
</body>
</html>
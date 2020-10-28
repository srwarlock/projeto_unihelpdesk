<?php
	require_once "validador_acesso.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Uni Help Desk</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

	<style>
		.card-padrao{
			padding: 30px 0 0 0;
			width: 100%;
			margin: 0 auto;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<a class="navbar-brand" href="#">
			<img src="logo.png" width="30" class="d-inline-block align-top"/>
			Uni Help Desk
		</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="logoff.php" class="nav-link">Sair</a>
			</li>
		</ul>
	</nav>

	<div class="container">
		<div class="row">
			<div class="card-padrao">
				<div class="card">
					<div class="card-header">
						Abertura de chamado
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<form method="post" action="registra_chamado.php">

									<div class="form-group">
										<label>Título</label>
										<input type="text" name="titulo" class="form-control" placeholder="Título" />
									</div>

									<div class="form-group">
										<label>Categoria do chamado:</label>
										<select class="form-control" name="categoria">
											<option disabled selected>Selecione</option>
											<option>Problema com internet</option>
											<option>Problema com algum programa</option>
											<option>Problema com o computador</option>
											<option>Problema com o e-mail?</option>
											<option>Problema usuário e/ou senha</option>
											<option>Problema com a impressora</option>
											<option>Outro...</option>
										</select>
									</div>

									<div class="form-group">
										<label>Descrição</label>
										<textarea type="text" name="descricao" class="form-control" rows="4"></textarea>
									</div>


									<div class="row mt-5">
										<div class="col-6">
											<a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
										</div>

										<div class="col-6">
											<button class="btn btn-lg btn-info btn-block" type="submit">Abrir chamado</button>
										</div>

									</div>
								</form>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>

</body>











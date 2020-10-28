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
		.card-home{
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

	<div  class="container">
		<div class="row">
			<div class="card-home">
				<?php if(isset($_GET['action']) && $_GET['action'] == 'chamadoAberto'){ ?>
						<div class="text-success text-center">
							Chamado aberto com sucesso!
						</div>
					<?php } ?>
				<div class="card">
					<div class="card-header">
						Menu
					</div>	
					<div class="card-body">
						<h5 class="card-title text-center">Escolha uma opção</h5>
						<div class="row">
							<div class="col-6 d-flex justify-content-center">
								<a href="abrir_chamado.php">
									<img src="abrirChamado.png" width="80" height="80">
									<p>Abrir chamado</p>
								</a>
							</div>
							<div class="col-6 d-flex justify-content-center">
								<a href="lista_chamados.php">
									<img src="verChamado.png" width="80" height="80">
									<p>Ver chamados</p>
								</a>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>		
	</div>
</body>
</html>











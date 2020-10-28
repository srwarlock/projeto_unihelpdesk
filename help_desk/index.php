<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Uni Help Desk</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
	<style>
		.login-card{
			padding: 30px 0 0 0;
			width: 350px;
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
	</nav>
	<div class="container">
		<div class="row">
			<div class="login-card">
				<div class="card">
					<div class="card-header">
						Entrar no sistema
					</div>
					<div class="card-body">
						<form action="valida_login.php" method="post">
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="E-mail"/>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="senha" placeholder="Senha"/>
							</div>
							<?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
									<div class="text-danger">
										Usuário ou senha inválidos!
									</div>
							<?php } ?>
							
							<?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>
									<div class="text-danger">
										Por favor, faça login para continuar...
									</div>
							<?php } ?>
							<button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>









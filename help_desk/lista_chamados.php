<?php
	require_once "validador_acesso.php";
?>

<?php
	
	//lista de chamados
	$chamados = array();

	//arquivo de chamados:
	$arquivo = fopen('chamados.uni', 'r');
 
 	//Faz a leitura de linha por linha do arquivo:
	while(!feof($arquivo)){ //condição de saída: chegar ao final do arquivio (feof)
		//leitura de cada linha:
		$linha = fgets($arquivo);
		$chamados[] = $linha;
	}

	//fechar o arquivo:
	fclose($arquivo);

	// echo '<pre>';
	// var_dump($chamados);
	// echo '</pre>';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Uni Help Desk</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
	<style>
		.listachamados-card{
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
			<div class="listachamados-card">
				<div class="card">
					<div class="card-header">
						Listagem de chamados
					</div>
					<div class="card-body">
						<?php
							foreach ($chamados as $chamado) :
								$dados_chamado = explode('#', $chamado);
								//var_dump($dados_chamado);

								if($_SESSION['perfil_id'] == 2){
									if($dados_chamado[0] != $_SESSION['id']){
										continue;
									}
								}

								if(count($dados_chamado) < 4){
									continue;
								}
						?>

						<div class="card bg-light mb-4">
							<div class="card-body">
								<h5 class="card-title"><?= $dados_chamado[1] ?></h5>
								<h6 class="card-subtitle mb-2 text-muted"><?= $dados_chamado[2] ?></h6>
								<p class="card-text"><?= $dados_chamado[3] ?></p>
							</div>
						</div>

						<?php endforeach;	?>
						<div class="row mt-4">
							<div class="col-12">
								<a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>















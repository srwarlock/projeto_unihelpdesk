<?php
	session_start();
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = $_POST['categoria'];
	$desc = str_replace('#', '-', $_POST['descricao']);

	//monta o texto que será adicionado no arquivo de chamados
	$chamado = $_SESSION['id'].'#'.$titulo.'#'.$categoria.'#'.$desc.PHP_EOL;

	//abre o arquivo:
	$arquivo = fopen('chamados.uni', 'a');

	fwrite($arquivo, $chamado);

	fclose($arquivo);

	header('Location: home.php?action=chamadoAberto');
?>
<?php
	
	session_start();

	// echo '<pre>';
	// print_r($_SESSION);
	// echo '</pre>';

	session_destroy(); //linmpa tudo que está na sessão do usuário
	header('Location: index.php');

?>
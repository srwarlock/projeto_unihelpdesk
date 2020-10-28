<?php

	session_start();
	
	//VARIÁVEIS QUE VERIFICAM SE A AUTENTICAÇÃO ESTÁ OK
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;


	//perfil 1 = admin; perfil 2 = usuário comum
	//LISTA DE USUÁRIOS
	$usuarios_app = array(
		array('id' => 1, 'email' => 'admin@teste.com.br', 'senha' => 'Senha123', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'admin2@teste.com.br', 'senha' => 'Senha123', 'perfil_id' => 1),
		array('id' => 3, 'email' => 'usuario@teste.com.br', 'senha' => 'Senha123', 'perfil_id' => 2),
		array('id' => 4, 'email' => 'giovana@teste.com.br', 'senha' => 'Senha123', 'perfil_id' => 2)
	);


	foreach($usuarios_app as $user){

		// echo 'Usuario app: '.$user['email'] . ' - senha: ' . $user['senha'];
		// echo '<br/>';
		//para pegar do POST do form as variáveis email e senha:
		//echo 'E-mail do form:' .$_POST['email'] .' senha digitada: ' .$_POST['senha'];
		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
			break;
		}
	}

	if($usuario_autenticado){
		echo 'Usuario autenticado!';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php');
	}else{
		//echo 'Usuário e senha inválidos!';
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	}

?>









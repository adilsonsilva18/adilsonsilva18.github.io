<?php

    include_once './Conexao.class.php';
	include_once './Usuario.class.php';
	include_once './DaoUsuario.class.php';
	
	$usuario = $_POST["txtnome"];
	$senha = $_POST["txtsenha"];
	
	$udao = new DaoUsuario();
	
	session_start();
	
	if ($udao->validar($usuario,$senha) == true ){
		
		$_SESSION['login'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('location:principal.php');
		
	}else {
   	    unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        header('location:index.php');
	}
	
	


	
?>
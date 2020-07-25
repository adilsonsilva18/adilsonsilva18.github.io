<?php
    include_once './Conexao.class.php';
	include_once './Usuario.class.php';
	include_once './DaoUsuario.class.php';
 
    $udao = new DaoUsuario();
	
	$id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
    if ( null==$id ) {
        header("Location: ListaUsuario.php");
    } else { 
	    $data = array($udao->busca($id)) ;
	}
	
	print_r($data);
	
	
?>
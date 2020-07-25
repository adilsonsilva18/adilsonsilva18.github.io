<?php

    include_once './Conexao.class.php';
	include_once './Usuario.class.php';
	include_once './DaoUsuario.class.php';
	
	
    /*
    $nome = 'ADM';
	$senha = '123';
	$ativo = 'S';
	$id = '1';
	*/
	$u = new Usuario();
	
	$u->setId('2');
	$u->setNome('abc');
	$u->setSenha('abc');
	$u->setAtivo('S');
	
	
	$udao = new DaoUsuario();
//	$udao->Inserir($u);
//	$udao->Editar($u);
//	$udao->Apagar(4);

	$results = $udao->busca_todos();
	foreach($results as $value) {
	    echo $value['id'] .  $value['nome'] .  $value['senha'] . $value['ativo'] ."<br/>";
	}
	
	if ($udao->validar('admin','admin') == true ){
	    echo 'login ok';
	}else {
		echo 'usuario ou senha invalidos ';
	}
	
	
	
// echo $data['nm_usuario'];
	
	//criar classe Dao baseada nesta
	// criar classe pojo
	/*
		try{
	    $ConexaoBD = new Conexao;
        $conn = $ConexaoBD->conectar();
		
	    echo 'Conectado !';
		
	//	$sql = $c->prepare("insert into usuarios (nome, senha,ativo) values (:nome, :senha,:ativo)");
	    
		$sql = $conn->prepare("update usuarios set nome = :nome, senha = :senha ,ativo = :ativo where id = :id");
	    
        $sql->bindParam("nome", $nome, PDO::PARAM_STR);
        $sql->bindParam("senha", $senha, PDO::PARAM_STR);
		$sql->bindParam("ativo", $ativo, PDO::PARAM_STR);
		$sql->bindParam("id", $id, PDO::PARAM_STR);
		
        $sql->execute();
		
		echo '<br/>Usuario alterado !';
		
		
		
	} catch (\PDOException $e) {
        echo $e->getMessage();
    }
	*/
	
 /*   
    public function inserir($nome, $cpf){
        $j = new Conexao;
        $c = $j->conectar();
                   
        $sql = $c->prepare("insert into usuarios (nome, cpf) values (:nome, :cpf)");
        $sql->bindParam("nome", $nome, PDO::PARAM_STR);
        $sql->bindParam("cpf", $cpf, PDO::PARAM_STR);
        $sql->execute();
    }
*/

?>
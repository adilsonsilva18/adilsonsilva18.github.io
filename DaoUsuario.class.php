<?php

   include_once './Conexao.class.php';
   include_once './Usuario.class.php';
   
class DaoUsuario {
 
    public static $instance;
 
    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoUsuario();
 
        return self::$instance;
    }
 
    public function Inserir(Usuario $usuario) {
        try {
            			
            $ConexaoBD = new Conexao;
            $conn = $ConexaoBD->conectar();
		 			
            $sql = $conn->prepare("insert into usuarios (nome, senha,ativo) values (:nome, :senha,:ativo)");
 
            $sql->bindValue(":nome", $usuario->getNome());
            $sql->bindValue(":senha", $usuario->getSenha());
            $sql->bindValue(":ativo", $usuario->getAtivo());
            
            print "nOme " . $usuario->getNome();
			
			return $sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado  um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " .$e->getCode() . " Mensagem: " . $e->getMessage());
        }	
		
    }
 
    public function Editar(Usuario $usuario) {
        try {
			
            $ConexaoBD = new Conexao;
            $conn = $ConexaoBD->conectar();
		   
		    $sql = $conn->prepare("update usuarios set nome = :nome, senha = :senha ,ativo = :ativo where id = :id");
	    
            $sql->bindValue(":nome", $usuario->getNome());
            $sql->bindValue(":senha", $usuario->getSenha());
            $sql->bindValue(":ativo", $usuario->getAtivo());
			$sql->bindValue(":id", $usuario->getId());
			
			$sql->execute();
			   
            return $sql->execute();
			
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado  um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage());
        }
    }
 
    public function Apagar($id) {
        try {
			
            $ConexaoBD = new Conexao;
            $conn = $ConexaoBD->conectar();
		   
		    $sql = $conn->prepare("delete from usuarios where id = :id");
            $sql->bindValue(":id", $id);
			$sql->execute();
			   
            return $sql->execute();
			
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado  um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage());
        }
    }
	
	public function busca_todos(){
		try {
			
			$ConexaoBD = new Conexao;
			$conn = $ConexaoBD->conectar();
			   
			$sql = $conn->prepare("select * from usuarios where ativo = 'S' order by nome");
			$sql->execute();
			
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
			
		}catch (PDOException $e) {
    	    echo "Erro de exceção: ".$e->getMessage(). " Código: " .$e->getCode();
	    }
	}
	
	public function busca($id){
		try {
			
			$ConexaoBD = new Conexao;
			$conn = $ConexaoBD->conectar();
			   
			$sql = $conn->prepare("select * from usuarios where id = :id");
		    $sql->bindValue(":id", $id);
		 	$sql->execute();
			
		//	$sql = $pdo->prepare($sql);
        //    $sql->execute(array($id));
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);  //
			
		//	$result = $sql->fetch(PDO::FETCH_ASSOC);

            return $result;
			
		}catch (PDOException $e) {
    	    echo "Erro de exceção: ".$e->getMessage(). " Código: " .$e->getCode();
	    }
	}
	
	public function validar($pnome,$psenha){
	try {
			
			$ConexaoBD = new Conexao;
			$conn = $ConexaoBD->conectar();
			   
			$sql = $conn->prepare("select id from usuarios where nome = :nome and senha = :senha");
			$sql->bindValue(":nome", $pnome);
            $sql->bindValue(":senha", $psenha);
			$sql->execute();
			
			$result = $sql->fetch(PDO::FETCH_ASSOC);
            
            if	($result['id'] > 0){
                return true;
			}else{				
                return false;
			}
			
		}catch (PDOException $e) {
    	    echo "Erro de exceção: ".$e->getMessage(). " Código: " .$e->getCode();
	    }
	}          
	
	
	
	
}
	
?>	
	
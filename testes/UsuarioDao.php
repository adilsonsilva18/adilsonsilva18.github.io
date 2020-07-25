<?php
 
class UsuarioDao {
	
    private $pdo;
 
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }


    public function get_todos() {
        $stmt = $this->pdo->query('SELECT id, nome, senha, ativo '
                                . 'FROM usuario '
                                . 'ORDER BY idusuario');
        $usuarios = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $usuarios[] = [
                'id' => $row['id'],
                'nome' => $row['nome'],
                'senha' => $row['senha'],
                'ativo' => $row['ativo']
            ];
        }
        return $usuarios;
    }

    public function lista_por_id($id) {
        // prepare SELECT statement
        $stmt = $this->pdo->prepare('SELECT id, nome, senha, ativo
                                       FROM usuario
                                      WHERE id = :id');
        // bind value to the :id parameter
        $stmt->bindValue(':id', $id);
        
        // execute the statement
        $stmt->execute();
 
        // return the result set as an object
        return $stmt->fetchObject();
    }
	
	//criar metodos de insert e update e delete
	
	
}
?>	
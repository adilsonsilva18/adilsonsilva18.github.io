<?php

class Conexao {
     
    public static $conexao;
 
  //  private function __construct() {
        //
  //  }
	 
    public function conectar() {
        try {
			//singleton
			if (!isset(self::$instance)) {
		        $conexao = new \PDO('sqlite:Sistema.db');
       //     $conexao = new PDO("mysql:host=localhost;dbname=teste", "root", "");
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
        
        return $conexao;
    }
    

}

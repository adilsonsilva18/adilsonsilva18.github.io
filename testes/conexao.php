<?php
 
class conexao{
 
    private static $conn;
 
    public function connect() {
		/*
        // read parameters in the ini configuration file
        $params = parse_ini_file('database.ini');
        if ($params === false) {
            throw new \Exception("Erro no arquivo de Configuração");
        }
        // connect to the postgresql database
        $conStr = sprintf("mysql:host=%s;port=%d;dbname=%s;user=%s;password=%s", 
                $params['host'], 
                $params['port'], 
                $params['database'], 
                $params['user'], 
                $params['password']);
 
        $pdo = new \PDO($conStr);
		
		*/
		
		if ($pdo == null) {
            $pdo = new \PDO('sqlite:db/teste.db');
        }
		
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
 
        return $pdo;
    }
 
    public static function get() {
        if (null === static::$conn) {
            static::$conn = new static();
        }
 
        return static::$conn;
    }
 
    protected function __construct() {
        
    }
 
    private function __clone() {
        
    }
 
    private function __wakeup() {
        
    }
 
}
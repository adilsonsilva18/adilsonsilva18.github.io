<?php
 //   private $pdo;

  //  if ($pdo == null) {
        $pdo = new \PDO('sqlite:Sistema.db');
  //  }
 
	if ($pdo != null)
		echo 'Connected to the SQLite database successfully!';
	else
		echo 'Whoops, could not connect to the SQLite database!';


?>
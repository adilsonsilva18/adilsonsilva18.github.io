<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
<?php
     
     include_once './Conexao.class.php';
     include_once './Usuario.class.php';
     include_once './DaoUsuario.class.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $emailError = null;
 //       $mobileError = null;
         
        // keep track post values
        $name = $_POST['name'];
        $email = $_POST['email'];
 //       $mobile = $_POST['mobile'];
         
        // validate input
        $valid = true;
        if (empty($name)) {
            $nameError = 'Digite o nome de usuario';
            $valid = false;
        }
         
        if (empty($email)) {
            $emailError = 'Digite a senha do usuario';
            $valid = false;
		}	
     //   } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
     //       $emailError = 'Digite um autor valido';
     //       $valid = false;
     //   }
         
  //      if (empty($mobile)) {
  //          $mobileError = 'Digite o nome do agente';
  //          $valid = false;
  //     
         
        // insert data
    //    if ($valid) {
    //        $pdo = Database::connect();
    //        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //        $sql = "INSERT INTO usuario (nm_usuario,senha) values(?, ?)";
    //        $q = $pdo->prepare($sql);
    //        $q->execute(array($name,$email));
    //        Database::disconnect();
    //        header("Location: CadUsuario.php");
    //    }
   // }
	
	
?>

    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Novo Usuario</h3>
                    </div>
             
                    <form class="form-horizontal" action="createus.php" method="post">
					
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Nome do Usuario</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Nome do usuario" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      
                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                        <label class="control-label">Senha</label>
                        <div class="controls">
                            <input name="email" type="password" placeholder="Senha" value="<?php echo !empty($email)?$email:'';?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
           
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Salvar</button>
                          <a class="btn" href="CadUsuario.php">Voltar</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>


        
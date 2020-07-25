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

     foreach ($udao->busca($id) as $row) {
	
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Detalhes do Usuario</h3>
                    </div>
                     
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Codigo</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $row['id'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Nome</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $row['nome'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Senha</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo '******' ;?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Ativo</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $row['ativo']; } } ?>
                            </label>
                        </div>
                      </div>
                      <div class="form-actions">
                          <a class="btn btn-success" href="ListaUsuario.php">Voltar</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
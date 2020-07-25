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
            <div class="row">
                <h3>Listagem de Usuarios</h3>
            </div>
            <div class="row">
                <p>
                    <a href="NovoUsuario.php" class="btn btn-primary">Novo</a>
					<a href="principal.php" class="btn btn-success">Voltar</a>
                </p>
                 
                <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Codigo</th>
                          <th>Usuario</th>
						  <th>Senha</th>
						  <th>Ativo</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
					  
					  	  include_once './Conexao.class.php';
	                      include_once './Usuario.class.php';
	                      include_once './DaoUsuario.class.php';
 
                	      $udao = new DaoUsuario();
	
						  foreach ($udao->busca_todos() as $row) {
                                echo '<tr>';
                                echo '<td>'. $row['id'] . '</td>';
                                echo '<td>'. $row['nome'] . '</td>';
                                echo '<td>'. '**********' . '</td>';
                                echo '<td>'. $row['ativo'] . '</td>';
                                echo '<td width=250>';
                                echo '<a class="btn btn-info" href="DetalheUsuario.php?id='.$row['id'].'">Detalhes</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="updateus.php?id='.$row['id'].'">Editar</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="deleteus.php?id='.$row['id'].'">Apagar</a>';
                                echo '</td>';
                                echo '</tr>';
                          }
		
                      ?>
                      </tbody>
                </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>
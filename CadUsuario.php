<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>Cadastro de Usuarios</h3>
            </div>
            <div class="row">
                <p>
                    <a href="createus.php" class="btn btn-primary">Novo</a>
					<a href="principal.php" class="btn btn-success">Voltar</a>
                </p>
                 
                <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Codigo</th>
                          <th>Usuario</th>
						  <th>Senha</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       include 'database.php';
                       $pdo = Database::connect();
                       $sql = 'SELECT * FROM usuario';
                       foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<td>'. $row['idusuario'] . '</td>';
                                echo '<td>'. $row['nm_usuario'] . '</td>';
                                echo '<td>'. '**********' . '</td>';

                                echo '<td width=250>';
                                echo '<a class="btn" href="readus.php?id='.$row['idusuario'].'">Detalhes</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="updateus.php?id='.$row['idusuario'].'">Editar</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="deleteus.php?id='.$row['idusuario'].'">Apagar</a>';
                                echo '</td>';
                                echo '</tr>';
                       }
                       Database::disconnect();
                      ?>
                      </tbody>
                </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>
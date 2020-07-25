<?php
  session_start();
  
  if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
  {
      unset($_SESSION['login']);
      unset($_SESSION['senha']);
      header('location:index.php');
  }

  $logado = $_SESSION['login'];
 
?>
     
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema 1.0</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Sistema</a>
    </div>
    <ul class="nav navbar-nav">
     <!-- <li class="active"><a href="#">Início</a></li> !-->
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="ListaUsuario.php">Usuarios</a></li>
          <li><a href="#">Contas</a></li>
       <!--   <li><a href="#">Produto</a></li>  !-->
        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Movimento <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Contas a Pagar/Receber</a></li>
          <li><a href="#">Contas já Pagas ou Recebidas</a></li>
          <li><a href="#">Investimentos</a></li>
        </ul>
      </li>
      <li><a href="#">Ajuda</a></li>
	  
    </ul>
    <ul class="nav navbar-nav navbar-right">
	  <?php
          echo "<li><a><span class='glyphicon glyphicon-user'></span>". $logado."</a></li>";
	  ?>
      <li><a href=".\index.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>

     <div class="container">
	  <div class="panel panel-default">
	       <h2 align="center"> Sistema de gerenciamento financeiro pessoal</h2>
	  </div>
	</div>
   
	 
	<div class="container">
	  <h2></h2>
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">

		  <div class="item active">
			<img src=".\img\contas.jpg" alt="Los Angeles" style="width:100%;">
			<div class="carousel-caption">
			  <h3><font color="#FF0000">Contas a Pagar/Receber</h3>
			  <p>Todas as contas em dia</font></p>
			</div>
		  </div>

		  <div class="item">
			<img src=".\img\investimentos.jpg" alt="Chicago" style="width:100%;">
			<div class="carousel-caption">
			  <h3><font color="#FF0000">Investimentos</h3>
			  <p>Rumo a independencia financeira!</font></p>
			</div>
		  </div>
		
		  <div class="item">
			<img src=".\img\aposentadoria.jpg" alt="New York" style="width:100%;">
			<div class="carousel-caption">
			  <h3><font color="#FF0000">Calculo de Aposentadoria</h3>
			  <p>Quanto tempo já contribui ?</font></p>
			</div>
		  </div>
	  
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Anterior</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Proximo</span>
		</a>
	  </div>
	</div>

	<div class="container">
	  <div class="panel panel-default">
	      <h6>Links úteis</h6>
	  </div>
	</div>


	<div class="container">
	  <div class="panel panel-default">
	      <h6>2019 All rigths reserved</h6>
	  </div>
	</div>


</body>
</html>

</div>

</body>
</html>

 	


<?php
/**
 * TAREFAS
 *
 * @package Tarefas\dimenssoês
 * @author Sandro Miguel Marques <rogerwillian121213@hotmail.com>
 * @version v.1.0 
 * @copyright Copyright (c) 2021, ROGER
 */
session_start();
include("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_tbdimensoes = "SELECT * FROM tbdimensoes WHERE id = '$id'";
$resultado_tbdimensoes= mysqli_query($conexao, $result_tbdimensoes);
$row_tbdimensoes= mysqli_fetch_assoc($resultado_tbdimensoes);

?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAREFAS</title>
    <!-- LINKS FONTES --> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- LINKS BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head> 

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/index.php">PULSES</a>
    </div>
    <ul class="nav navbar-nav"style="float: right;">
      
      <li><a href="\index.php">Voltar</a></li>
      <li><a href="\dimenssoes.php">DIMENSÕES</a></li> 
      
    </ul>
  </div>
</nav>
  
<div class="container">
  <h2>Criar dimensão</h2>
  <p>Aqui você cria as dimensões das perguntas</p>
  <form class="form-inline" action="bdeditdimen.php" method="POST">
    <div class="form-group">
      <label>Nome da dimensão:</label>
    
      <input type="text" class="form-control" id="dimens"  name="dimens" value="<?php echo $row_tbdimensoes['dimens']; ?>">
    
    </div>


    <br>
    <br>
    <input type="submit" class="btn btn-default" value="Editar">

    <button type="button" class="btn btn-default">Cancelar</button>
    
  </form>
</div>



</body>

</html>
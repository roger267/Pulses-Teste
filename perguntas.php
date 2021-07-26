<?php
/**
 * TAREFAS
 *
 * @package Tarefas\dimenssoês
 * @author Sandro Miguel Marques <rogerwillian121213@hotmail.com>
 * @version v.1.0 
 * @copyright Copyright (c) 2021, ROGER
 */
include_once "conexao.php";
//consultar no banco de dados
$result_tbdimensoes = "SELECT * FROM tbdimensoes ORDER BY id DESC";
$resultado_tbdimensoes = mysqli_query($conexao, $result_tbdimensoes);
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
      <a class="navbar-brand" href="#">PULSES</a>
    </div>
    <ul class="nav navbar-nav"style="float: right;">
      
      <li><a href="\index.php">VOLTAR</a></li>
      <li><a href="dimenssoes.php">DIMENSÕES</a></li>
      
    </ul>
  </div>
</nav>
  
<div class="container">
  <h2>Criar Pergunta</h2>
  <p>Aqui você cria um pergunta e define a dimensão dessa pergunta</p>
  <form class="form-inline" action="bdperguntas.php" method="POST">
    <div class="form-group">
      <label for="perguntas">Texto da Pergunta:</label>
      <input type="perguntas" class="form-control" id="perguntas" placeholder="Escreva a Pergunta" name="perguntas">
    </div>
    <br>
    <br>
    <div class="form-group">
    <label for="dimens"> DIMENSÃO:</label> 
   <select  name="" id="dimens" onchange="location = this.value;" class="form-control">  
   <?php echo ($_SESSION['dimens'] == 0)  ? 'selected' : '' ; ?> value="dimensoes.php?dimens=null">Selecione uma dimensão</option>
    <?php
    if($num_logar > 0) {
        do {
        echo "<option ". $selected($fet_logar['dimens']) ." value=dimensoes.php?dimens=".$fet_logar['dimens_id'].">".$fet_logar['dimens_nome']."</option>";
        }while($fet_logar = mysqli_fetch_assoc($exe_logar));
    }
    ?>
</select>
    </div>
    <br>
    <br>
    <button type="button" class="btn btn-success">Gravar</button>  

    <button type="button" class="btn btn-default">Cancelar</button>
    
  </form>
</div>



</body>

</html>
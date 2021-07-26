<?php
/**
 * TAREFAS
 *
 * @package Tarefas\dimenssoês
 * @author Roger Willian Torres <rogerwillian121213@hotmail.com>
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
    <title>DIMENSÃO</title>
    <!-- LINKS FONTES --> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- LINKS BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head> 

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">PULSES</a>
    </div>
    <ul class="nav navbar-nav"style="float: right;">
    <li><a href="/index.php">VOLTAR</a></li>
      <li><a href="edit_dimenso.php">+ CRIAR DIMENSÃO</a></li>
      
    </ul>
  </div>
</nav>
  
<div class="container">
  <h2>DIMENSÕES:</h2>                                          
  <table class="table table-striped table-bordered table-hover table-condensed">
  
  <?php





//Verificar se encontrou resultado na tabela "tbdimensoes"
if(($resultado_tbdimensoes) AND ($resultado_tbdimensoes->num_rows != 0)){
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($row_tbdimensoes = mysqli_fetch_assoc($resultado_tbdimensoes)){
        echo "<a  href='edit_dimen.php?id=" . $row_tbdimensoes['id'] . "'>Editar</a><br><hr>";
				?>
				<tr>
					<th><?php echo $row_tbdimensoes['id']; ?></th>
					<td><?php echo $row_tbdimensoes['dimens']; ?></td>
         
					
				</tr>
				<?php
			}?>
		</tbody>
	</table>
<?php
}else{
	echo "<div class='alert alert-danger' role='alert'>Nenhuma dimenssão  encontrado!</div>";
}

?>

</body>

</html>
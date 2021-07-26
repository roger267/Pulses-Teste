<?php
session_start();
include("conexao.php");

$pergunta = mysqli_real_escape_string($conexao, trim($_POST['pergunta']));

$sql = "select count(*) as total from usuario where usuario = '$tbperguntas'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

$sql = "INSERT INTO tbperguntas (pergunta,data_cadastro) VALUES ('$pergunta', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}


$conexao->close();

header('Location: index.php');
exit;

?>
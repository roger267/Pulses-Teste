<?php
session_start();
include("conexao.php");

$dimens = mysqli_real_escape_string($conexao, trim($_POST['dimens']));

$sql = "select count(*) as total from usuario where usuario = '$tbdimensoes'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

$sql = "INSERT INTO tbdimensoes (dimens,data_cadastro) VALUES ('$dimens', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}


$conexao->close();

header('Location: index.php');
exit;

?>
<?php
session_start();
include_once("conexao.php");


$dimens = filter_input(INPUT_POST, 'dimens', FILTER_SANITIZE_STRING);

$result_psdimenssoes = "UPDATE psdimenssoes SET dimens='$dimens',  WHERE id='$id'";
$resultado_psdimenssoes= mysqli_query($conexao, $result_psdimenssoes);

if(mysqli_affected_rows($conexao)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: edit_dimen.php?id=$id");
}


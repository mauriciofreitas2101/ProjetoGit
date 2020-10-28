<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$genero = mysqli_real_escape_string($conexao, trim($_POST['genero']));
$altura = mysqli_real_escape_string($conexao, trim($_POST['altura']));
$peso = mysqli_real_escape_string($conexao, trim($_POST['peso']));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro, genero, altura, peso) VALUES ('$nome', '$usuario', '$senha', NOW(), '$genero', '$altura', '$peso')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = TRUE;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>
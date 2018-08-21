<?php

	if(!isset($_POST['email'])){

		header("Location:index.php");
		exit();

	}

$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = MD5($_POST['senha']);


$conexao = mysqli_connect('127.0.0.1','root','','cadastro');

$query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

$buscar = mysqli_query($conexao, $query);

$dados = mysqli_fetch_assoc($buscar);


if($dados != null) {
	
	echo "Logado com Sucesso!";
	header ("location: home.php");
	session_start();
	$_SESSION['nome'] = $dados['nome'];
	exit();


}else 
{
	echo "Senha Inválida";
	header ("location: index.php?login=0");
	exit();
}
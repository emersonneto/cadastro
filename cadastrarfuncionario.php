

<?php
$nome   = $_POST['nome'];
$sobrenome    = $_POST['sobrenome'];
$datanascimento   = $_POST['datanascimento'];
$cpf   = $_POST['cpf'];
$endereco = $_POST['endereco'];
$funcao = $_POST['funcao'];

$conexao = mysqli_connect('127.0.0.1','root','','cadastro');
$conexao->set_charset("utf8");

$query = "INSERT INTO `funcionario` (`nome`, `sobrenome`, `datanascimento`, `cpf`, `endereco`, `funcao`) VALUES ('$nome', '$sobrenome', '$datanascimento', '$cpf', '$endereco', '$funcao ')";

mysqli_query($conexao, $query);
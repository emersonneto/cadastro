

<?php
session_start();

$nome= $_SESSION['nome'];
echo "Bem Vindo, $nome";


?>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body>

<form method="POST" action="logout.php">
<button type="submit"> Logout </button>
</form>

<div>
    <a href="cadastro.php">
    <button>Cadastrar</button>

    </a>

</div>

<div>
    <a href="listar.php">
    <button>Listar</button>
    
    </a>

</div>


</body>
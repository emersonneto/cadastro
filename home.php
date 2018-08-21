<?php
session_start();

$nome= $_SESSION['nome'];
echo "Bem Vindo, $nome";

?>

<form method="POST" action="logout.php">
<button type="submit"> Logout </button>
</form>
		
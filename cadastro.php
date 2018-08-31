<?php


?>

<html>
    <head>
        <title>Cadastro</title>
    </head>

    <body>
        <h1>Tela de Cadastro de funcionário</h1>
        <p>Preencha as informações abaixo e clique em cadastrar</p>

        <form method="POST" action="cadastrarfuncionario.php">
            <label>Nome:</label>    
            <input type="text" name="nome">

            <label>Sobrenome:</label>    
            <input type="text" name="sobrenome">

            <label>Data Nascimento:</label>    
            <input type="nunber" name="datanascimento"> 

            <label>CPF:</label>    
            <input type="number" name="cpf">

            <label>Endereço:</label>
            <input type="text" name="endereco">

            <label>Função:</label>
            <input type="text" name="funcao">

            <button type="submit">Cadastrar</button>


        
        </form>
    
    </body>



</html>
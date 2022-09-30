<?php

include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$conect = isset($_POST['nome'], $_POST['email'], $_POST['senha']);

if ($conect == true) {

    mysqli_query($conexao, "INSERT INTO  formulario (nome, email, senha)
    VALUES('$nome', '$email', '$senha')");
} else {
    echo "houve um problema";
}


?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" href="form.css">


</head>


<body>
    <div class="menu">

        <form action="index.php" method="POST" id="form">
            <fieldset>
                <legend id="legenda"> Formulário </legend>

                <label for="nome"><b>Nome:</b></label>
                <input type="text" id="nome" name="nome" value="nome" required>
                <br>
                <br>
                <br>
                <label for="email"><b>Email:</b></label>
                <input type="email" id="email" name="email" value="email" required>
                <br>
                <br>
                <br>
                <label for="senha"><b>Senha:</b></label>
                <input type="password" id="senha" name="senha" value="senha" required>
                <br>
                <br>
                <br>
                <label for="data"> <b>Data de Nascimento: </b></label>
                <input type="date" id="data" name="data" required>
                <br>
                <br>
                <br>
                <button type="submit" class="botao"> Enviar </button>

            </fieldset>
        </form>



    </div>
</body>

</html>
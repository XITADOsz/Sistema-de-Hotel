<?php
include_once "includes/conexao.php";
include_once "classes/Usuario.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Meu Projeto PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Bem-vindo ao Meu Projeto PHP 🚀</h1>
    <p>Estrutura inicial configurada com sucesso!</p>

    <?php
        $usuario = new Usuario("Pedro", "pedro@email.com");
        echo "<p>Usuário criado: " . $usuario->getNome() . "</p>";
    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./public/css/style_cadastro.css">
</head>

<body>
    <main>
        <form method="POST" action="http://localhost/loginmenu/cadastrar">
            <h1>Cadastro</h1>
            <label for="usuario">Nome:</label>
            <input type="text" id="usuario" name="nome" required placeholder="Nome de usuário">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">

            <label for="confirm_email">Confirme seu e-mail:</label>
            <input type="email" id="confirm_email" name="confirm_email" required placeholder="Confirme seu e-mail">

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha:" required>

            <label for="confirm_senha">Confirme sua senha:</label>
            <input type="password" id="confirm_senha" name="confirm_senha" required placeholder="Confirme sua senha">

            <button>Enviar</button>

            <div class="erro">
                <?php
                if (!empty($_SESSION["emailDif"])) {
                    //limpa sessao da senha 
                    echo "<p class='mensagem'>" . $_SESSION["emailDif"] . "</p>";
                    session_unset();
                } elseif (!empty($_SESSION["senhaDif"])) {
                    //limpa sessao do email
                    echo "<p class='mensagem'>" . $_SESSION["senhaDif"] . "</p>";
                    session_unset();
                }
                ?>

            </div>
        </form>

    </main>
</body>

</html>
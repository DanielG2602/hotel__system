<?php
//Verifica se tá logado, caso esteja é redirecionado para a página home
if (isset($_SESSION['email']) || !empty($_SESSION['email'])) {
    header("Location: http://localhost/loginmenu/home");
    die;
}

?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./public/css/style_login.css">

</head>

<body>
    <!--login-->
    <section class="container_login">
        <form action="http://localhost/loginmenu/logar" method="POST">
            <h1>Login</h1>

            <Label for="email">Email</Label>
            <input type="text" placeholder="Email" id="email" name="email" required><br>

            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" name="senha" required><br>

            <input type="submit" value="Login">
            <a href="http://localhost/loginmenu/cadastro">Não possui cadastro? Cadastre-se</a>

        </form>

        <!--Exibir mensagem de erro quando digitar algo errado-->
        <?php
        if (isset($_SESSION["errorLogin"]) && !empty($_SESSION["errorLogin"])) {
        ?>
            <div <?php echo "style='display:flex;'" ?> class="container_error_login">
            <?php
        }
            ?>
            <p>
                <?php
                echo isset($_SESSION["errorLogin"]) && !empty($_SESSION["errorLogin"]) ? $_SESSION["errorLogin"] : null;
                ?>
            </p>

            </div>

    </section>


</body>

</html>
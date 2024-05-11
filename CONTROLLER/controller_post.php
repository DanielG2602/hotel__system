<?php
class Cliente
{

    function validacaoInfo()
    {
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : null;
        $email = isset($_POST["email"]) ? $_POST["email"] : null;
        $email2 = isset($_POST["confirm_email"]) ? $_POST["confirm_email"] : null;
        $senha = isset($_POST["senha"]) ? $_POST["senha"] : null;
        $senha2 = isset($_POST["confirm_senha"]) ? $_POST["confirm_senha"] : null;

        if ($nome != null && $email != null &&  $email2 != null &&  $senha != null && $senha2 != null) {

            if ($email != $email2) {
                echo "testando";
                $_SESSION["emailDif"] = 'Email incorreto!';
                header('Location: http://localhost/loginmenu/cadastro');
            } else if ($senha != $senha2) {
                $_SESSION["senhaDif"] = 'senha incorreta!';
                header('Location: http://localhost/loginmenu/cadastro');
            } else {
                $dados['nome'] = $nome;
                $dados['email'] = $email;
                $dados['senha'] = password_hash($senha, PASSWORD_DEFAULT);

                header('location:http://localhost/loginmenu/login');

                return $dados;
            }
        }
    }

    function cadastrar()
    {

        $cad = $this->validacaoInfo();

        $Model = new Post;

        $Model->nome = $cad['nome'];
        $Model->email = $cad['email'];
        $Model->senha = $cad['senha'];
        $Model->postar();

        //$result = $Model->postar();

        //var_dump($result);

        //return print_r($cad);

    }
}

<?php
class Validacao_user
{
    //Recebe dados do formulário
    function validateUser_controller()
    {
        //Recebendo dados do formulário e decodificando
        $dataLogin = $_POST;
        // $dataLogin = json_decode($dataLogin);

        //Transfere dados recebido para variáveis separadas
        $email = $dataLogin['email'];
        $senha = $dataLogin["senha"];

        //Instâncio a model e envia os dados para a mesma
        $model = new M_validarUser;
        $model->setEmail($email);
        $model->setSenha($senha);
        $responseModel = $model->validate();

        if ($responseModel === true) {
            //Redirecionado para a página de home
            unset($_SESSION['errorLogin']);
            header("Location: http://localhost/loginmenu/home");
            die;
        } else if ($responseModel == "email não encontrado") { //Gabiarra de teste
            $_SESSION['errorLogin'] = $responseModel;
            echo $responseModel;
        } else {
            $_SESSION['errorLogin'] = "Email ou senha inválidos";
            echo "Email ou senha inválidos";
        }
    }
}

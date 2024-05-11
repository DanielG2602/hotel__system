<?php

class Router
{
    //Criar rotas do sistema
    public function route()
    {
        $uri = $this->getUri();

        switch ($uri[2]) {
            case "welcome":
                require_once("./view/welcome.php");
                exit;
            case "cadastro":
                require_once("./view/cadastro.php");
                exit;
            case "cadastrar":
                $controller = new Cliente;
                $controller->cadastrar();
                exit;
            case "login";
                require_once("./view/login.php");
                exit;
            case "logar":
                $controller = new Validacao_user;
                $controller->validateUser_controller();
            case "home":
                require_once("./view/sistema_hotel/home.php");
                exit;
            case "admin":
                require_once("./view/sistema_hotel/admin.php");
                exit;
            case "sair":
                $controller = new Controller_sair;
                $controller->logout();
                header("Location: http://localhost/loginmenu/login");
                exit;
            default:
                require_once("./view/welcome.php");
                exit;
        }
    }

    //Pegar na uri ação a ser realizada
    public function getUri()
    {
        $uri =  $_SERVER["REQUEST_URI"];
        $uri = explode("/", $uri);
        //$uri = parse_rl($_SERVER["RESQUEST_URI"]);
        return $uri;
    }
}

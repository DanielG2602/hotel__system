<?php
session_start();
require_once("./router/router.php");

include('CONFIG/conexao.php');

//controller
require_once("./controller/controller_post.php");
require_once("./controller/validacao_usurs.php");

//Model
require_once('./model/model_post.php');
require_once("./model/m_validarUsers.php");
require_once("./controller/controller_sair.php");

//Instância
$router = new Router;
$router->route();





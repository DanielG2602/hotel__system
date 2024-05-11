<?php

class Banco
{

    private $local = "localhost";
    private $usuario = "root_a";
    private $senha = ""; //root - padrão teste123@
    private $dataBase = "usuarios"; //banco de dados q estamos usando

    function conn()
    {
        try {
            $mysqli = new mysqli($this->local, $this->usuario, $this->senha, $this->dataBase);
             return $mysqli;
        } catch (Exception $erro) {
            echo "falha na conexão" . $erro->getMessage();
        }

        // if (!$mysqli->error) {
        //     echo "conectado";
        // }

       
    }
}

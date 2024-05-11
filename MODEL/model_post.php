<?php

class Post{

    public $nome;
    public $email;
    public $senha;
    
    function postar(){
        $Banco = new Banco;

        var_dump($Banco->conn());
        $sql = "INSERT INTO usuarios.clientes(nome, email, senha) VALUES('$this->nome','$this->email','$this->senha')";
        
        $query = mysqli_query($Banco->conn(),$sql);
        mysqli_close($Banco->conn());
        return $query;
    }

}



<?php

class M_validarUser
{

    public $email;
    public $senha;

    public function validate()
    {
        //Instância da conexão
        $con = new Banco;
        $con = $con->conn();

        //Sql no banco
        $sql = mysqli_query($con, "SELECT email, senha FROM clientes WHERE email = '$this->email'");

        $rows = mysqli_num_rows($sql);

        //echo "teste";
        if ($rows == 1) {

            //Cria um array associativo e verifica se as senhas são autênticas
            $sql = mysqli_fetch_assoc($sql);

            //Se as senha forem autênticas return true, senão false
            if (password_verify($this->senha, $sql["senha"])) {

                $_SESSION['email'] = $sql["email"];
                return true;
            } else {
                return false;
            }
        } else {
            return "email não encontrado";
        }
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {

        $this->senha = $senha;
    }
}

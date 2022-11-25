<?php 

namespace App\DAO;

use App\Model\LoginModel;

use \PDO;

class LoginDAO extends DAO
{

    public function __construct()
    {
        parent::__construct();
    }

    public function selectByUser($usuario, $senha)
    {
        $sql = "SELECT * FROM usuario WHERE usuario = ? AND senha = sha1(?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $usuario);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\LoginModel"); // Retornando um objeto específico PessoaModel
    }
}
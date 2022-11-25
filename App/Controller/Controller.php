<? 

namespace App\Controller;

abstract class Controller
{
    protected static function AuthenticatedLogin()
    {
        if(!isset($_SESSION['usuario']))
        header("Location: /login"); // alterar aqui
    }
}
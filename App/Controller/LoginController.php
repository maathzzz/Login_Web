<?php

namespace App\Controller;
use App\Model\LoginModel;


class LoginController extends Controller
{
    public static function index()
    {  
        include 'View/modules/Login/login.php';
        // parent::render('Login/FormLogin');
    }

    public static function form()
    {
        $model = new LoginModel();
            
        if(isset($_GET['id'])) 
         $model->selectByUser( (int) $_GET['id']); //here
        
        include 'View/modules/Login/login.php';
    }

    public static function save()
    {

        $model = new LoginModel();
        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];
        $model->AuthenticatedLogin();
    }
}

